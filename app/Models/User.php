<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Contracts\Auth\MustVerifyEmail; // Import this interface
use App\Models\Skills;

class User extends Authenticatable implements MustVerifyEmail

    {
        use HasFactory, Notifiable, SoftDeletes;

        protected $table = 'users';
        protected $primaryKey = "id";

        protected $fillable = [
            'name',
            'email',
            'password',
            'mobile',
            'freelancer_access_token'
        ];

        protected $hidden = [
            'password',
            'remember_token',
        ];

        protected $dates = [
            'deleted_at',
            'created_at',
            'updated_at',
        ];

        protected $casts = [
            'email_verified_at' => 'datetime',
        ];

        public function country()
        {
            return $this->belongsTo(Country::class);
        }

        // Add the relationship for skills
        public function skills()
        {
            return $this->hasMany(Skills::class, 'user_id');
        }
    }
