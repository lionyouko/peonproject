<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

//Lion: 1-to-1 (user)
class Profile extends Model
{
    //Lion: only disable if you validate the data and is specific in how it enters
    //on request
    protected $guarded = [];

    public function profileImage(){
        return $this->image ? '/storage/' . $this->image : 'https://www.ndim.edu.in/wp-content/uploads/bb-plugin/cache/dascoins-default-avatar-1-853x1024-circle.jpg';

    }

    public function followers(){
        return $this->belongsToMany(User::class);
    }

    public function user() {
        return $this->belongsTo(User::class);
    }
}
