<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class blog extends Model
{
    protected $fillable = ['titel', 'blogtext'];

    public function categories() {
        return $this->hasMany(categorie::class);
    }
}


