<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Listing;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ListingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = User::factory()->create([
            'name' => 'Nelson Ryan',
            'email' => 'nelson@neksjob.com',
            'password' => bcrypt('093322')
        ]);

        Listing::factory(6)->create([
            'user_id' => $user->id
        ]);

        // Listing::created([
        //     [
        //         'title' => 'Laravel Senior Developer', 
        //         'tags' => 'laravel, javascript',
        //         'company' => 'Acme Corp',
        //         'location' => 'Boston, MA',
        //         'email' => 'email1@email.com',
        //         'website' => 'https://www.acme.com',
        //         'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam minima et illo reprehenderit quas possimus voluptas repudiandae cum expedita, eveniet aliquid, quam illum quaerat consequatur! Expedita ab consectetur tenetur delensiti?'
        //     ]
        // ]);

        // Listing::created([
        //     [
        //         'title' => 'Full-Stack Engineer',
        //         'tags' => 'laravel, backend ,api',
        //         'company' => 'Stark Industries',
        //         'location' => 'New York, NY',
        //         'email' => 'email2@email.com',
        //         'website' => 'https://www.starkindustries.com',
        //         'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam minima et illo reprehenderit quas possimus voluptas repudiandae cum expedita, eveniet aliquid, quam illum quaerat consequatur! Expedita ab consectetur tenetur delensiti?'
        //     ]
        // ]);

        // Listing::created([
        //     [
        //         'title' => 'Laravel Developer', 
        //         'tags' => 'laravel, vue, javascript',
        //         'company' => 'Wayne Enterprises',
        //         'location' => 'Gotham, NY',
        //         'email' => 'email3@email.com',
        //         'website' => 'https://www.wayneenterprises.com',
        //         'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam minima et illo reprehenderit quas possimus voluptas repudiandae cum expedita, eveniet aliquid, quam illum quaerat consequatur! Expedita ab consectetur tenetur delensiti?'
        //     ]
        // ]);

        // Listing::created([
        //     [
        //         'title' => 'Backend Developer', 
        //         'tags' => 'laravel, php, api',
        //         'company' => 'Skynet Systems',
        //         'location' => 'Newark, NJ',
        //         'email' => 'email4@email.com',
        //         'website' => 'https://www.skynet.com',
        //         'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam minima et illo reprehenderit quas possimus voluptas repudiandae cum expedita, eveniet aliquid, quam illum quaerat consequatur! Expedita ab consectetur tenetur delensiti?'
        //     ]
        // ]);

        // Listing::created([
        //     [
        //         'title' => 'Junior Developer', 
        //         'tags' => 'laravel, php, javascript',
        //         'company' => 'Wonka Industries',
        //         'location' => 'Boston, MA',
        //         'email' => 'email4@email.com',
        //         'website' => 'https://www.wonka.com',
        //         'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam minima et illo reprehenderit quas possimus voluptas repudiandae cum expedita, eveniet aliquid, quam illum quaerat consequatur! Expedita ab consectetur tenetur delensiti?'
        //       ]
        // ]);
    }
}
