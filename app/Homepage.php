<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

//Lion: many-to-1 (user) or 1-to-1 (user)
class Homepage extends Model
{

    protected $fillable = [];

    public function user() {
        return $this->belongsTo(User::class);
    }

    protected $attributes = [
        'is_ready' => false,
    ];
}
