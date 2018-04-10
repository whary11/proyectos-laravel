<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
         Factory(App\User::class, 30)->create()->each(function(App\User $user){
            Factory(App\producto::class)->times(5)->create([
                'user_id' => $user->id,
            ]);   
        });
    }
}
