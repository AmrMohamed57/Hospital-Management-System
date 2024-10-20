<?php

namespace Database\Factories;

use App\Models\Section;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Section>
 */
class SectionFactory extends Factory
{
    protected $model = Section::class;

    public function definition()
    {
        return [
            'name' => $this->faker->unique()->randomElement([ 'قسم الجراحه ' ,' قسم المخ والاعصاب' , 'قسم الاشعه ' , 'قسم الباطنه' , 'قسم العيون' , 'قسم النسا و التوليد' ]),
            //'description' => $this->faker->text(100),
        ];
    }
}
