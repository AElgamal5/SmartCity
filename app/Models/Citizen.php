<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Kyslik\ColumnSortable\Sortable;

class Citizen extends Authenticatable
{
    use HasFactory, Sortable;
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $table = 'citizens';
    protected $guard = 'citizen';
    protected $fillable = [
        'email', 'password', 'fname', 'minit', 'lname', 'bdate', 'sex', 'sstatus', 'phone', 'hid', 'status'
    ];
    public $sortable = [
        'id', 'email', 'password', 'fname', 'minit', 'lname', 'bdate', 'sex', 'sstatus', 'phone', 'hid', 'status'
    ];
    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'Password',
    ];
}
