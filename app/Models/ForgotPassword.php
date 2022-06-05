<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;

class ForgotPassword extends Model
{
    use HasFactory, Sortable;
    protected $table = 'forgotpasswords';
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'email'
    ];
    protected $sortable = [
        'id', 'state','email', 'created_at', 'updated_at'
    ];
}
