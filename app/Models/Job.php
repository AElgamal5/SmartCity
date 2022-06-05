<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;

class Job extends Model
{
    use HasFactory, Sortable;
    protected $table = 'jobs';
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'salary', 'jtype', 'work_place_id', 'confirm',
    ];
    protected $sortable = [
        'jid', 'salary', 'jtype', 'work_place_id', 'created_at', 'updated_at', 'confirm'
    ];
}
