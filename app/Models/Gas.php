<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;

class Gas extends Model
{
    use HasFactory, Sortable;
    protected $table = 'gas';
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'hid', 'bid'
    ];
    protected $sortable = [
        'reader_id', 'hid', 'bid', 'created_at', 'updated_at'
    ];
}
