<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;
use App\Models\Project;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Project>
 */
class ProjectFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        // dd(htmlspecialchars(fake()->randomHtml()));
        // dd(collect(fake()->words(5))->join(' '));
        return [
            //
            'title'        => collect(fake()->words(5))->join(' '),
            'description' => fake()->randomHtml(),
            'ends_at'     => fake()->dateTimeBetween('now', '+ 3 days'),
            'status'      => fake()->randomElement(['open', 'closed']),
            'tech_stack'  => fake()->randomElement(['react', 'php', 'laravel', 'vue', 'tailwind', 'javascript', 'nextjs', 'phyton'], random_int(1, 5)),
            'created_by'  => User::factory(),
        ];
    }
}
