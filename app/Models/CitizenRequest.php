<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;

class CitizenRequest extends Model
{
    use HasFactory, Sortable;
    protected $table = 'request';
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'citizen_id',
        'selected_modify',
        'details',
        'state'
    ];
    protected $sortable = [
        'req_id',
        'citizen_id',
        'selected_modify',
        'details',
        'state',
        'created_at',
        'updated_at'
    ];
}
