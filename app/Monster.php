<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Monster extends Model
{
    use HasFactory;
    public function type()
    {
        return $this->belongsTo(Type::class);
    }
    public function rareties()
    {
        return $this->belongsTo(Rareties::class);
    }
    public function truncatedDesc($length = 20)
    {
        return \Illuminate\Support\Str::limit($this->description, $length);
    }
}
