<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Artwork extends Model
{
    use HasFactory;

    //shut down timestamp
    public $timestamps = false;

    protected $table = 'artworks';
    protected $fillable = [
        'id', //////////////////////////////////////////
        'title',
        'user_id',
        'submit_date',
        'category_id',
        'description',
        'price',
        'image_path',
    ];
}
