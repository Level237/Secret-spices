<?php

namespace App\Models;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Nutrient extends Model
{
    use HasFactory;

    protected $fillable=[
        'nutrient_name'
    ];

    public function products():BelongsToMany{
        return $this->belongsToMany(Product::class)->withPivot('quantity');;
    }
}
