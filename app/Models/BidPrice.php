<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class BidPrice extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'bidprice';
    protected $primaryKey = 'id';

    protected $fillable = [
        'user_id',
        'lower',
        'higher',
    ];

    protected $dates = ['deleted_at', 'created_at', 'updated_at'];
}
