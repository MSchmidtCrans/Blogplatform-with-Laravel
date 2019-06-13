<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class categorie extends Model
{
    public function project() {
        return $this->belongsTo(blog::class);
    }
}
