<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoryModel extends Model
{
    protected $table = 'category';
    protected $guarded =['id'];

    public function products(){
    return $this->belongsTo('App\Models\CategoryModel');
    }
}

