<?php

use App\User;
use App\Materials;
use App\Takes;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call('UsersSeeder');
        $this->call('MaterialsSeeder');
        $this->call('TakesSeeder');
    }
}

class UsersSeeder extends Seeder {

    public function run()
    {
        DB::table('users')->delete();

        User::create(array(
            'email' => 'test@test.fr',
            'password' => 'test'
        ));
    }
}

class MaterialsSeeder extends Seeder {

    public function run()
    {
        DB::table('materials')->delete();

        $list_name = array(
            'Routeur','Switch','Cable ethernet','ordinateur','bureau','MAC'
        );

        foreach ($list_name as $item){
            Materials::create(array(
                'name' => $item
            ));
        }
    }
}

class TakesSeeder extends Seeder {

    public function run()
    {
        DB::table('takes')->delete();

        Takes::create(array(
            'user_id' => 1,
            'material_id' => 2
        ));
    }
}
