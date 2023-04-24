<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Order;
use App\Models\OrderItem;
use Carbon\Carbon;
use App\Models\User;
use App\Models\Product;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class OrderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Order::class;

    public function definition()
    {
        $randomNumber = rand(2000, 9999);
        $user = User::inRandomOrder()->first();
        return [
            'user_id' => User::inRandomOrder()->first()->id,
            'name' => User::inRandomOrder()->first()->name,
            'email' => User::inRandomOrder()->first()->email,
            'phone' => User::inRandomOrder()->first()->phone,
            'address1' => $this->faker->streetAddress,
            'address2' => $this->faker->secondaryAddress,
            'faturaadres' => $this->faker->Address,
            'city' => $this->faker->city,
            'state' => $this->faker->state,
            'country' => $this->faker->country,
            'pin_code' => $this->faker->postcode,
            'status' => $this->faker->randomElement(['pending', 'cancelled','completed','in progress','out of delivery']),
            'payment_method' => $this->faker->randomElement(['cash_on_delivery', 'credit_card']),
            'tracking_no' => Str::random(10),
            'price' => $randomNumber,
            'created_at' => Carbon::now()->subDays(rand(0, 30)),

                'product' => function () {
                    return Product::inRandomOrder()->first()->name;
                },
                'quanity' => $this->faker->numberBetween(1, 10),
        ];
    }
}
