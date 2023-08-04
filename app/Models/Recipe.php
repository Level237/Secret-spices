<?php

namespace App\Models;

use App\Models\Category;
use App\Models\Image;
use App\Models\Ingredient;
use App\Models\Step;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\MorphToMany;

class Recipe extends Model
{
    use HasFactory;

    protected $fillable=[
        'name_recipe',
        'category_id',
        'description_recipe',
        'time',
        'number_person',
        'slug'
    ];

    protected $casts = [
        'created_at'  => 'date:Y/m/d',
    ];

    public function category():BelongsTo{
        return $this->belongsTo(Category::class);
    }

    public function ingredients():BelongsToMany{
        return $this->belongsToMany(Ingredient::class)->withPivot('quantity');
    }

    public function images(): MorphToMany
    {
        return $this->morphToMany(Image::class, 'imageable');
    }

    public function steps():BelongsToMany{
        return $this->belongsToMany(Step::class);
    }

    public function setDateAttribute( $value ) {
        $this->attributes['created_at'] = (new Carbon($value))->format('d/m/y');
      }
}