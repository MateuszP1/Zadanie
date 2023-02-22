<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Listing;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
       \App\Models\User::factory(5)->create();

       Listing::factory(6)-> create();


       Listing::create([
        'title' => 'Laravel Client',
        'tags' => 'laravel, javascript',
        'company' => 'Acme Corp',
        'location' => 'Boston', 'MA',
        'email' => 'email1@email.com',
        'website' => 'https://www.acmem.com',
        'description' =>'We are a group of Professionals, Specilized in health care solution in Libyan Market. Our Objective is to be the slected partner of respectable medical products manufactures and offer the best in class services to the libyan healthcare institutions.'
       ]);
       Listing::create([
        'title' => 'Laravel IT',
        'tags' => 'laravel, backend, api',
        'company' => 'Industries',
        'location' => 'New York', 'NY',
        'email' => 'email2@email.com',
        'website' => 'https://www.Industries.com',
        'description' =>'industry, group of productive enterprises or organizations that produce or supply goods, services, or sources of income. In economics, industries are generally classified as primary, secondary, tertiary, and quaternary; secondary industries are further classified as heavy and light.'
        ]);
        \App\Models\User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);
    }
}
