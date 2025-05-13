<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;  // SoftDeletes trait
use Illuminate\Notifications\Notifiable;

class Projectperiod extends Model
{
    use HasFactory, Notifiable, SoftDeletes;

    protected $table = 'projectperiods';  // Ensure this table name matches your DB
    protected $primaryKey = 'id';  // Primary key for the table

    // Mass assignable attributes
    protected $fillable = [
        'user_id',
        'lower',
        'higher',
        'period',
    ];

    // This tells Laravel to handle 'deleted_at' column as a timestamp
    protected $dates = ['deleted_at'];
}
