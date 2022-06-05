<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;

class Compliment extends Model
{
    use HasFactory, Sortable;
    protected $table = 'compliments';
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'citizen_id', 'massage', 'state', 'category'
    ];
    protected $sortable = [
        'id', 'citizen_id', 'massage', 'state', 'category', 'created_at', 'updated_at'
    ];
}
