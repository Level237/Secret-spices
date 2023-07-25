<?php

namespace App\Models;

use App\Models\Category;
use App\Models\Ingredient;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Recipe extends Model
{
    use HasFactory;

    protected $fillable=[
        'name_recipe',
        'category_id',
        'description_recipe',
        'time',
        'number_person'
    ];

    public function category():BelongsTo{
        return $this->belongsTo(Category::class);
    }

    public function ingredients():BelongsToMany{
        return $this->belongsToMany(Ingredient::class);
    }
}