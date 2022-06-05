<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;

class Appointment extends Model
{
    use HasFactory, Sortable;
    protected $table = 'appointments';
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'citizen_id', 'adate', 'state'
    ];
    protected $sortable = [
        'id', 'citizen_id', 'adate', 'state', 'created_at', 'updated_at'
    ];
}
