<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;

class Car extends Model
{
    use HasFactory, Sortable;
    protected $table = 'car';
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name', 'model', 'color', 'motor_number', 'chasette_number', 'motor_capacity', 'cylinder_number', 'fuel_tank', 'hp', 'nos', 'tt', 'owner_id'
    ];
    protected $sortable = [
        'car_id', 'name', 'model', 'color', 'motor_number', 'chasette_number', 'motor_capacity', 'cylinder_number', 'fuel_tank', 'hp', 'nos', 'tt', 'owner_id', 'created_at', 'updated_at'
    ];
}
