<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;

class Company extends Model
{
    use HasFactory, Sortable;
    protected $table = 'Companies';
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'cname', 'field', 'Capital', 'Bid', 'status'
    ];
    protected $sortable = [
        'company_id', 'cname', 'field', 'Capital', 'Bid', 'created_at', 'updated_at', 'status'
    ];
}
