<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Manage extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'manage';
    protected $primaryKey = 'id';
    protected $fillable = [
    'name',
    'email',
    'phone',
    'freelancerid',
   ];
   protected $dates = ['deleted_at', 'created_at', 'updated_at'];
}
