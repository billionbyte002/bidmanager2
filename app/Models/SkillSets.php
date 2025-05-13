<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class SkillSets extends Model
{
    use HasFactory, SoftDeletes;
    protected $table = 'skill_sets';
    protected $primaryKey = 'id';
    protected $fillable = [
    'user_id',
    'name',
    'skills',
   ];
   protected $dates = ['deleted_at', 'created_at', 'updated_at'];
}
