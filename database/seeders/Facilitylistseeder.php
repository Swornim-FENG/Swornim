<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Facility_lists;

class Facilitylistseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $facility=new facility_lists;
        $facility->name='Flexible Entry/Exit Hours';
        
        $facility->save();
    }
}
