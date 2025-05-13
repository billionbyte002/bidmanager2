<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ChangePassword extends Model
{
    use HasFactory;

    protected $table = 'change_passwords';
    public $timestamps = false;
    protected $primaryKey = 'email';
    protected $fillable = [
    'email',
    'token',
   ];
   protected $dates = ['created_at', 'updated_at'];
}
