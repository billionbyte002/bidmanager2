<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    use HasFactory;
    protected $table = 'country';


    public function users()
    {
        $users = User::with('country')->get();
        foreach($users as $user)
            {
            echo $user->country->name;
            }

        return $this->hasMany(User::class);
    }
}
