<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Category;

class Contact extends Model
{
    protected $fillable = ['name', 'email', 'photo', 'cost', 'category_id'];

    public function category()
    {
    	return $this->belongsTo(Category::class);
    }
}
