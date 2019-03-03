<?php

use Illuminate\Database\Seeder;
//use Faker\Factory as Faker;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $faker = Faker::create();
        // foreach(range(1,10) as $index){
        //     DB::table('users')->insert([
        //         'name' => $faker->name,
        //         'email' =>  $faker->email,
        //         'password' => bcrypt('secret'),
        //     ]);
        // }

        // factory(App\User::class,50)->create();
        // factory(App\Employees::class,20)->create();

        $this->call(EmployeesSeeder::class);
        
    }
}
