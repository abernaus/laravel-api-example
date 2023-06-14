<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;

class Tour extends Model
{
    use HasFactory, HasUuids;

    protected $fillable = ['name', 'travel_id', 'starting_date', 'ending_date', 'price'];

    /**
     * We want to store price as int, so we make the calcs here to get 2 decimals (as good practice we try to avoid float in ddbb)
     *
     * @return Attribute
     */
    public function price(): Attribute
    {
        return Attribute::make(
            get: fn ($value) => $value / 100,
            set: fn ($value) => $value * 100
        );
    }
}
