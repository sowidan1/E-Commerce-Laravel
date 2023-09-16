<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use PDO;

class Category extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'slug', 'description', 'parent_id'];

    /**
     * Get the products for the category
     */
    public function products(){
        return $this->hasMany(Product::class);
    }

    /**
     * Get the parent category
     */
    public function parent(){
        return $this->belongsTo(Product::class,'parent_id');
    }
}
