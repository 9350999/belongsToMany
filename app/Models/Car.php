<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Car extends Model
{
    use HasFactory;

    public function drivers(): BelongsToMany
    {
        return $this->belongsToMany(Driver::class, 'car_driver');
    }

    protected function displayName(): Attribute
    {
        return Attribute::make(
            get: fn($value, array $attributes) => sprintf('%s %s %s', $this->model, $this->color, $this->number),
        );
    }
}
