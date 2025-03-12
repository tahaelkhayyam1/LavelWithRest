<?php

namespace Database\Seeders;

use App\Models\Customer;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Customer::factory()
            ->count(25)
            ->hasInvoices(5)
            ->create();
        Customer::factory()
            ->count(125)
            ->hasInvoices(5)
            ->create();
        Customer::factory()
            ->count(75)
            ->hasInvoices(3)
            ->create();
        Customer::factory()
            ->count(25)
            ->hasInvoices(5)
            ->create();
    }
}
