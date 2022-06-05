<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;

class Home extends Model
{
    use HasFactory, Sortable;
    protected $table = 'Homes';
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'bid', 'area', 'floor_no', 'rooms_no', 'home_rent'
    ];
    protected $sortable = [
        'home_id', 'bid', 'area', 'floor_no', 'rooms_no', 'home_rent', 'created_at', 'updated_at'
    ];
}
