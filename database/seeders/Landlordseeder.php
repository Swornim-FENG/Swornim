<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Landlords;
use Faker\Factory as Faker;
class Landlordseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker=Faker::create();
        for($i=0;$i<18;$i++){
        $landlords=new Landlords;
        $landlords->Firstname=$faker->firstname;
        $landlords->Lastname=$faker->lastname;
        $landlords->phone_number=9888888888;
        $landlords->permanent_address=$faker->address;
        $landlords->temporary_address=$faker->address;
        $landlords->save();
        }
    }
}
