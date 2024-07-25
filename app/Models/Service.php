<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;
    protected $fillable = [
        'title', 
        'category_id', 
        'image', 
        'description'
    ];

    public function category()
    {
        return $this->belongsTo(Categorie::class, 'category_id');
    }
}
