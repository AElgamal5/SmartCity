<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;

class Sos extends Model
{   
    use HasFactory, Sortable;
    protected $table = 'sos';
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'citizen_id',
        'type',
    ];
    protected $sortable = [
        'sos_id',
        'citizen_id',
        'type',
        'created_at',
        'updated_at'
    ];
}
