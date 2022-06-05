<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;

class Bank extends Model
{
    use HasFactory, Sortable;
    protected $table = 'bank';
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'bank_no','bank_name', 'citizen_id', 'balance',
    ];
    protected $sortable = [
        'acc_id' ,'bank_no', 'bank_name', 'citizen_id', 'balance', 'created_at', 'updated_at'
    ];
}
