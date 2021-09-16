<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    use HasFactory;

    protected $fillable = [
    'name',
    'title',
    'genre',
    'country_id',
    'release',
    'synopsis',
    'rating',
    'image',
    'image_poster',];

    public function country()
    {
        return $this->belongsTo(Country::class);
    }
}