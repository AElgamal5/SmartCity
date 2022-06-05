<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;

class Road extends Model
{
    use HasFactory, Sortable;
    protected $table = 'Roads';
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'rname', 'lanes', 'rlength',
    ];
    protected $sortable = [
        'road_id', 'rname', 'lanes', 'rlength', 'created_at', 'updated_at'
    ];
}
