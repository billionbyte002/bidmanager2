<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Skills extends Model
{
    use HasFactory;

    // Define the fillable fields
    protected $fillable = [
        'user_id',
        'name',
    ];

    /**
     * Define the relationship to the User model.
     * Each skill belongs to one user.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}

