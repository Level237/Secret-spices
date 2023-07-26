<?php

namespace App\Models;

use App\Models\Product;
use App\Models\Recipe;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Ingredient extends Model
{
    use HasFactory;

    protected $fillable=[
        'ingredient_name'
    ];

    public function recipes():BelongsToMany{
        return $this->belongsToMany(Recipe::class)->withPivot('quantity');;
    }

    public function products():BelongsToMany{
        return $this->belongsToMany(Product::class);
    }
}