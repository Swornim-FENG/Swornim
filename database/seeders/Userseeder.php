<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Userstable;
class Userseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $user=new Userstable;
        $user->Fullname="heloo";
        $user->email="hello@gmail.com";
        $user->password=248;
        $user->save();
    }
}
