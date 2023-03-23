<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LogState extends Model
{
    use HasFactory;
    protected $table = "logstate";
    protected $fillable = [
        'order_id',
        'from',
        'comment',
        'to'
    ];
}
