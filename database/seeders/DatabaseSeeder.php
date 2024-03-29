<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Listing;
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
        // User::factory(5)->create();

        $user = User::factory()->create(
            [
                'name' => 'Ayoub',
                'email' => 'elgountari@gmail.com'
            ]
        );

        Listing::factory(6)->create([
            'user_id' => $user->id,
        ]);

        // Listing::create([
        //     'title' => 'Laravel Senior Developer',
        //     'tags' => 'laravel, javascript',
        //     'company' => 'Acme Corp',
        //     'location' => 'Boston, MA',
        //     'email' => 'emaill@email.com',
        //     'website' => 'https://www.acme.com',
        //     'description' => 'Lorem ipsum dolor sit
        //     amet consectetur adipisicing elit. Ipsam
        //     minima et illo reprehenderit quas possimus
        //     voluptas repudiandae cum expedita, eveniet
        //     aliquid, quam illum quaerat consequatur!
        //     Expedita ab consectetur tenetur delensiti?'
        // ]);
        // Listing::create([
        //     'title' => 'Full-Stack Engineer',
        //     'tags' => 'laravel, javascript',
        //     'company' => 'Acme Corp',
        //     'location' => 'Boston, MA',
        //     'email' => 'emaill@email.com',
        //     'website' => 'https://www.acme.com',
        //     'description' => 'Lorem ipsum dolor sit
        //     amet consectetur adipisicing elit. Ipsam
        //     minima et illo reprehenderit quas possimus
        //     voluptas repudiandae cum expedita, eveniet
        //     aliquid, quam illum quaerat consequatur!
        //     Expedita ab consectetur tenetur delensiti?'
        // ]);
    }
}
