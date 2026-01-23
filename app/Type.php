<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    use HasFactory;
    protected $table = "monster_types";

    public function monster() {
        return $this->hasMany(Monster::class);
    }
}
