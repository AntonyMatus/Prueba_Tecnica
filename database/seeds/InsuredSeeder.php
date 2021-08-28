<?php

use App\insured;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class InsuredSeeder extends Seeder {


    public function run(){

        factory(insured::class,17)->create();

    }

}

