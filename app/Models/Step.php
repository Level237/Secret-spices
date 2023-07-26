<?php

namespace App\Models;

use App\Models\Recipe;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Step extends Model
{
    use HasFactory;

    protected $fillable=[
        'description'
    ];

    public function recipes():BelongsToMany{
        return $this->belongsToMany(Recipe::class);
    }
}