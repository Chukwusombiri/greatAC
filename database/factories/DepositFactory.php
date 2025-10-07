<?php

namespace Database\Factories;

use App\Models\Deposit;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Deposit>
 */
class DepositFactory extends Factory
{
    protected $model = Deposit::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'amount' => $this->faker->numberBetween(13000,100000),
            'isApproved'=>false,
            'user_id'=>null,
            'wallet'=>$this->faker->realTextBetween(6,10),
            'address'=>Hash::make('address'),
            'plan'=>$this->faker->realTextBetween(6,10),
            'receipt'=>null,
        ];
    }
}
