<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rareties extends Model
{
    use HasFactory;
    public function monster() {
        return $this->hasMany(Monster::class);
    }
}
