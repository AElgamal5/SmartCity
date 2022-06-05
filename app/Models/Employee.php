<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Kyslik\ColumnSortable\Sortable;
class Employee extends Authenticatable
{
    use HasFactory, Sortable;
    protected $table = 'employee';
    protected $guard = 'employee';
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'citizen_id',
        'password',
    ];

    protected $sortable = [
        'id',
        'citizen_id',
        'created_at',
        'updated_at'
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
