<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Tip extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'benefits',
        'energy_saving',
        'image',
    ];

    public function feedback()
    {
        return $this->hasMany(Feedback::class);
    }

    public function averageRating()
    {
        return $this->feedback()->avg('rating');
    }

}
