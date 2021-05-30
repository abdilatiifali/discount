<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

class Product extends Model
{
    use HasFactory, Searchable;

    protected $with = ['photos'];

    public function category()
    {
    	return $this->belongsTo(Category::class);
    }

    public function photos()
    {
    	return $this->hasMany(Photo::class);
    }

    protected function makeAllSearchableUsing($query)
	{
    	return $query->with('category');
	}

	
}
