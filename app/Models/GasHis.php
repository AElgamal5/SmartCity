<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;

class GasHis extends Model
{
    use HasFactory, Sortable;
    protected $table = 'gas_his';
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'reader_id', 'last_read', 'current_read',
    ];
    protected $sortable = [
        'log_id', 'reader_id', 'last_read', 'current_read', 'created_at', 'updated_at'
    ];
}
