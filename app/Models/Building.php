<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;

class Building extends Model
{
    use HasFactory, Sortable;
    protected $table = 'Buildings';
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'no_flats', 'no_floors', 'lid', 'sb_type', 'area'
    ];
    protected $sortable = [
        'building_id', 'no_flats', 'no_floors', 'lid', 'sb_type', 'area', 'created_at', 'updated_at','status'
    ];
}
