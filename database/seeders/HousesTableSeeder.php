<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Home;
use Faker\Generator as Faker;
use App\Functions\Helpers as Help;
use Mockery\Generator\StringManipulation\Pass\AvoidMethodClashPass;
class HousesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker)
    {
        /* 
        Popolo db con json
        $houses = json_decode(file_get_contents(__DIR__.'/houses.json'), true);
        dd($houses);
        foreach ($houses as $house) {
            $new_house = new Home();
            $new_house->adress = $house['adress'];
            $new_house->city = $house['city'];
            $new_house->state = $house['state'];
            $new_house->description = $house['description'];
            $new_house->price = $house['price'];
            $new_house->square_meters = $house['square_meters'];
            $new_house->save();
        } */


        /* 
            Popolo db con faker
            for($index = 0; $index < 10; $index++){
            $new_house = new Home();
            $new_house->adress = $faker->streetAddress();
            $new_house->city = $faker->city();
            $new_house->state = $faker->state();
            $new_house->description = $faker->sentence();
            $new_house->price = $faker->numberBetween(1000, 5000);
            $new_house->square_meters = $faker->numberBetween(50, 999);
            $new_house->save();
        }
        */
 
        // Popolo db con csv
       $path = __DIR__.'/houses.csv';
       $data= Help::getCsvData($path);
        //ciclo l'array per popolare il db 
        foreach($data as $index => $house){
            // elimino la prima riga che contiene le intestazioni dei campi
            if($index !== 0){
                $new_house = new Home();
                //visualizzare dove si trovano i dati [] tramite il dd($data)
                $new_house->adress = $house[2];
                $new_house->city = $house[4];
                $new_house->state = $house[5];
                $new_house->description = $house[10];
                $new_house->price = $house[11];
                $new_house->square_meters = $house[6];
                $new_house->save();
            }
            
        }
    }
   
}
