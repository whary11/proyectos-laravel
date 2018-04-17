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
        Factory(App\User::class, 20)->create()->each(function(App\User $user){
            Factory(App\Producto::class)->times(20)->create([
                'user_id' => $user->id,

            ]);


            
        });
    }
}
