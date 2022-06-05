<?php

namespace App\Http\Controllers\Auth\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Job;
use Illuminate\Support\Facades\DB;


class JobController extends Controller
{

    public function test()
    {
        return 'بسم الله الرحمن الرحيم';
    }

    public function getAllJobs()
    {
        return Job::all();
    }

    public function addJob(Request $request)
    {
        $this->validate($request, [
            'salary' => 'required|numeric|min:1|max:2147483647',
            'jtype' => 'required|string',
            'work_place_id' => 'nullable|integer'
        ]);
        return Job::create([
            'salary' => $request->salary,
            'jtype' => $request->jtype,
            'work_place_id' => $request->work_place_id
        ]);
    }

    public function getById($id)
    {
        if ($id > 0 && $id < 2147483648) {
            $job = DB::select('SELECT * FROM jobs WHERE jid = ?', [$id]);
            //dd(empty($job));
            if (empty($job)) {
                //dd($job);
                return 'There is no job with ID = ' . $id;
            } else {
                return $job;
            }
        } else {
            return 'Worng ID value';
        }
    }

    public function getByType($type)
    {
        //$job = DB::select('SELECT * FROM jobs WHERE jtype = ?', [$type]);
        $job = Job::where('jtype', 'like','%'.$type.'%')->get();
        if (empty($job)) {
            //dd($job);
            return 'There is no job with Type = ' . $type;
        } else {
            return $job;
        }
    }

    public function updateJob(Request $request, $id)
    {
        if ($id > 0 && $id < 2147483648) {
            $job = DB::select('SELECT * FROM jobs WHERE jid = ?', [$id]);
            //dd($job);
            if (empty($job)) {
                return 'There is no job with ID = ' . $id;
            } else {
                if ($job[0]->confirm == 1) {
                    return 'Can Not Update Confirmed Job';
                }
                $this->validate($request, [
                    'salary' => 'required|numeric|min:1|max:2147483647',
                    'jtype' => 'required|string',
                    'work_place_id' => 'nullable|integer'
                ]);
                DB::update('UPDATE jobs SET salary=?, jtype=?, work_place_id=? WHERE jid=? ', [$request->salary, $request->jtype, $request->work_place_id, $id]);
                return 'Successfully updated';
            }
        } else {
            return 'Worng ID value';
        }
    }

    public function deleteJob($id)
    {
        if ($id > 0 && $id < 2147483648) {
            $job = DB::select('SELECT * FROM jobs WHERE jid = ?', [$id]);
            if (empty($job)) {
                return 'There is no job with ID = ' . $id;
            }
            if ($job[0]->confirm == 1) {
                return 'Can Not Delete Confirmed Job';
            }
            DB::delete('DELETE FROM jobs WHERE jid = ?', [$id]);
            return 'Successfully Deleted';
        } else {
            return 'Worng ID value';
        }
    }


}
