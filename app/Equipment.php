<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

//Lion: many-to-1 (user)
class Equipment extends Model
{
    protected $fillable = [
        'quantity',
    ];
    public function user() {
        return $this->belongsTo(User::class);
    }

    protected $attributes = [
        'is_ready' => false,
    ];
}
