<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

//Lion: many-to-many (user)
class Subdomainaccess extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'address',
    ];

    public function user() {
        return $this->belongsTo(User::class);
    }

    protected $attributes = [
        'is_ready' => false,
    ];
}
