<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Tenant;
class Tenantseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tenant=new Tenant;
        $tenant->Firstname="heloo";
        $tenant->Lastname="hello";
        $tenant->phone_number=423498;
        $tenant->address="Moon";
        $tenant->save();
    }
}
