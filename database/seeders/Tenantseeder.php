<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Tenants;
use Faker\Factory as Faker;
class Tenantseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker=Faker::create();
        for($i=0;$i<18;$i++){
        $tenant=new Tenants;
        $tenant->Firstname=$faker->firstname;
        $tenant->Lastname=$faker->lastname;
        $tenant->phone_number=9888888888;
        $tenant->permanent_address=$faker->address;
        $tenant->temporary_address=$faker->address;
        $tenant->save();
        
        }
    }
}

