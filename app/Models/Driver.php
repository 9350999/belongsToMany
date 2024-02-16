<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Driver extends Model
{
    use HasFactory;

    public function cars(): BelongsToMany
    {
        return $this->belongsToMany(Car::class, 'car_driver');
    }

    protected function displayName(): Attribute
    {
        return Attribute::make(
            get: fn($value, array $attributes) => sprintf('%s (%s) cat: %s', $this->name, $this->age, $this->categories),
        );
    }
}
