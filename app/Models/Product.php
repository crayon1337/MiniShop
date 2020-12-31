<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    
    protected $fillable = ['name', 'description', 'language_id', 'price'];

    public function language()
    {
        return $this->hasOne(Language::class, 'id', 'language_id');
    }
}
