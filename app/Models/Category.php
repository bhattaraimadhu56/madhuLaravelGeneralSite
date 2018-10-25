<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{ //1. table name match china bhane 
	// if the name is in plural form of model no need to give ok 
	// in our case we can escape ok
	protected $table = 'categories';
    //making fiels of category model/ categories table fillabe;
    // form bata submit hune field ko name define garne ok
    protected $fillable = [
        'title', 'slug', 'image','status',
    ];
}
