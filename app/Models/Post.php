<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $fillable = ['name','cat','description'];

    public function setCatAttribute($value)
    {
        $this->attributes['cat'] = json_encode($value);
    }

    // public function getCatAttribute($value)
    // {
    //     return $this->attributes['cat'] = json_decode($value);
    // }
}
