<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

//Lion: many-to-1 (user)
class Vm extends Model
{
    public function user() {
        return $this->belongsTo(User::class);
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'ram', 'hdd', 'os',
    ];

    protected $casts = [
        'is_up' => 'boolean',
    ];

    //Lion: Defines default values. See https://laravel.com/docs/7.x/eloquent#default-attribute-values
    protected $attributes = [
        'is_up' => false,
    ];
}
