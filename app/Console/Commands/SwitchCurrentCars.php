<?php

namespace App\Console\Commands;

use App\Models\Car;
use Illuminate\Console\Command;

class SwitchCurrentCars extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'cars:switchCurrent';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $car = Car::where('current', true)->first();
        $newCar = Car::all()->shuffle()->first();
        do{
            if($car->name !== $newCar->name){
                $car->update([
                    'current' => false
                ]);
                $newCar->update([
                    'current' => true
                ]);
            }else{
                $newCar = Car::all()->shuffle()->first();
            }
        }while($car->name === $newCar->name);
        
        return 0;
    }
}
