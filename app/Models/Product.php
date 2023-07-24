<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
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

}