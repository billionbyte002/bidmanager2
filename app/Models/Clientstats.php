<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ClientStats extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'clientstats';
    protected $primaryKey = 'id';

    protected $fillable = [
        'user_id',
        'payment',
        'email',
        'deposit',
        'rating',
        'project',
    ];

    protected $dates = ['deleted_at', 'created_at', 'updated_at'];
}
