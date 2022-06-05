<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;

class StartRoad extends Model
{
    use HasFactory, Sortable;
    protected $table = 'Start_road';
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'rid', 'srid'
    ];
    protected $sortable = [
        'rid', 'srid'
    ];
}
