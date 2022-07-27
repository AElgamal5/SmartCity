<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;

class Iot extends Model
{
    use HasFactory, Sortable;
    protected $table = 'iots';
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'pname', 'state', 'hid', 'bid',
    ];
    protected $sortable = [
        'id', 'pname', 'state', 'hid', 'bid','created_at', 'updated_at'
    ];
}
