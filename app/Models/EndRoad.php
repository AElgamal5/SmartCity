<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;

class EndRoad extends Model
{
    use HasFactory, Sortable;
    protected $table = 'End_road';
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'rid', 'erid'
    ];
    protected $sortable = [
        'rid', 'erid'
    ];
}
