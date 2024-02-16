<?php

namespace Database\Seeders;

use App\Models\Car;
use App\Models\Driver;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CarsDriversSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('car_driver')->delete();
        DB::table('cars')->delete();
        DB::table('drivers')->delete();

        Car::factory()->count(10)->create();
        Driver::factory()->count(20)->create();

        $cars = Car::all();
        $cars->each(function (Car $car) {
            $drivers = Driver::query()->inRandomOrder()->take(2)->get();
            $car->drivers()->sync($drivers);
        });
    }
}
