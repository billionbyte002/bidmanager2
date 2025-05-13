<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Templates extends Model
{
    use HasFactory, Notifiable, SoftDeletes;

    protected $table = 'templates';
    protected $primaryKey = "id";

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'user_id',
        'category',
        'content',
        'skills',
        // 'position',
    ];
    protected $dates = ['deleted_at', 'created_at', 'updated_at'];
}