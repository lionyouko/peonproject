<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

//Lion: many-to-1 (user)
class Vpn extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'description',
    ];

    public function user() {
        return $this->belongsTo(User::class);
    }

    protected $attributes = [
        'is_ready' => false,
    ];
}
