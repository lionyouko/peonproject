<?php

namespace App;

use App\Mail\NewUserWelcomeMail;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'username', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'is_admin' => 'boolean',
    ];

    //Lion: Defines default values. See https://laravel.com/docs/7.x/eloquent#default-attribute-values
    protected $attributes = [
        'is_admin' => false,
    ];

    public function is_admin() {
        return $this->is_admin;
    }

    public function login_path(){
        if ($this->is_admin){
            return "/admin/" . $this->id;
        }

        return "/profile/" . $this->id;
    }

    protected static function boot()
    {
        parent::boot();

        //Lion: Whenever a user is created, this event is fired and does
        //whatever is put inside. They are triggers in database
        static::created(function ($user){
            $user->profile()->create([
                'title' => $user->username,
                'description' => "Default Description (change it)",
                'url' => "Put your Homepage Here :-)"
            ]);
        });
    }

    //Lion: Relationships part. I would like to improve this, because it is a long list
    //never ending list as it is now

    public function profile(){
        //Lion: Here is Laravel level
        return $this->hasOne(Profile::class);
    }

    public function homepages(){
        //Lion: Here is Laravel level
        return $this->hasMany(Homepage::class);
    }

    public function emails(){
        //Lion: Here is Laravel level
        return $this->hasMany(Email::class);
    }

    public function equipments(){
        //Lion: Here is Laravel level
        return $this->hasMany(Equipment::class);
    }

    public function subdomainaccesss(){
        //Lion: Here is Laravel level
        return $this->hasMany(Subdomainaccess::class);
    }

    public function vms(){
        //Lion: Here is Laravel level
        return $this->hasMany(Vm::class);
    }

    public function vpns(){
        //Lion: Here is Laravel level
        return $this->hasMany(Vpn::class);
    }

    //Lion: Hope I can change all above, minus profile, for this one and inheritance
    public function petitions(){
        //Lion: Here is Laravel level
        return $this->hasMany(Petition::class);
    }
}
