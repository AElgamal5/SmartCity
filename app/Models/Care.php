<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;

class Care extends Model
{
    use HasFactory, Sortable;
    protected $table = 'Care';
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'id',
        'cid',
        'ctype'
    ];
    protected $sortable = [
        'id',
        'cid',
        'ctype'
    ];
}
