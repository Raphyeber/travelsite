<?php

namespace App\Models;


use App\Models\Category;
use App\Models\Review;
use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    protected $fillable = [
        'name',
        'slug',
        'description',
        'price',
        'imageURL',
        'category_id'
    ];

    public function category() {
        return $this->belongsTo(Category::class);
    }

    public function review() {
        return $this->hasMany(Review::class);
    }

    public function getRouteKeyName() {
        return 'slug';
    }
}
