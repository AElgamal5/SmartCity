<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;

class AsJob extends Model
{
    use HasFactory, Sortable;
    protected $table = 'asjobs';
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'citizen_id', 'jid',
    ];
    protected $sortable = [
        'id', 'citizen_id', 'jid', 'created_at', 'updated_at','status'
    ];
}
