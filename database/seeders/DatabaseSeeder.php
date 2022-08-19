<?php

namespace Database\Seeders;

use App\Models\Listing;
use App\Models\User;
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
//         \App\Models\User::factory(5)->create();

         $user = User::factory()->create([
             'name' => 'John Doe',
             'email' => 'John@test.test'
         ]);

         Listing::factory(6)->create([
             'user_id' => $user->id
         ]);

//         Listing::create([
//             'title' => 'Laravel Developer',
//             'tags' => 'laravel, javascript',
//             'company' => 'Acme Corp',
//             'location' => 'Boston, MA',
//             'email' => 'email@email.com',
//             'website' => 'https://acme.com',
//             'description' => 'Acme Company is an offering a challenging but rewarding opportunity. This is perfect for someone who hates roadrunners!'
//         ]);
//
//        Listing::create([
//            'title' => 'Full Stack Engineer',
//            'tags' => 'laravel, backend, api',
//            'company' => 'Wayne Enterprises',
//            'location' => 'NewYork, NY',
//            'email' => 'email2@email2.com',
//            'website' => 'https://wayneent.com',
//            'description' => 'This position is for people who like coding and bats. No particular reason about the bats, must enjoy working from Cave or WFC.'
//        ]);
    }
}
