<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Feedback extends Model
{
    protected $fillable = [
        'tip_id',
        'rating',
        'comment',
    ];

    public function tip()
    {
        return $this->belongsTo(Tip::class);
    }

}
