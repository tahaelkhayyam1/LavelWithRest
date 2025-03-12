<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Invoice>
 */
class InvoiceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $status= $this->faker->randomElement(['B', 'P','V']);
        $paid_date = $status == 'P' ? $this->faker->dateTimeThisDecade() : null;
        return [
            'customer_id' => \App\Models\Customer::factory(),
            'amount' => $this->faker->randomFloat(100, 200000),
'description' => $this->faker->text(100), // Limits text to 50 characters
            'status' => $status,
            'billed_dated' => $this->faker->dateTimeThisDecade(),
            'paid_date' => $paid_date,
        
        ];
        
    }
}
