<?php

namespace App\Models;

use App\Models\Ingredient;
use App\Models\Nutrient;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\MorphToMany;

class Product extends Model
{
    use HasFactory;

    protected $fillable=[
        'product_name',
        'product_description',
        'weight_id'
    ];

    public function images(): MorphToMany
{
    return $this->morphToMany(Image::class, 'imageable');
}
public function weight():BelongsTo{
    return $this->belongsTo(Weight::class);
}

public function ingredients():BelongsToMany{
    return $this->belongsToMany(Ingredient::class);
}
public function nutrients():BelongsToMany{
    return $this->belongsToMany(Nutrient::class)->withPivot('quantity');;
}

}
