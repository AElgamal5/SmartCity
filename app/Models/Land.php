<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;

class Land extends Model
{
    use HasFactory, Sortable;
    protected $table = 'Lands';
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'llength', 'lwidth', 'rid',
    ];
    protected $sortable = [
        'land_id', 'llength', 'lwidth', 'rid', 'created_at', 'updated_at'
    ];
}
