<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class StudyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title'=> $this->faker->company(),
            'randomised_patients' => '123',
            'code' => $this->faker->company(),
            'type' => 'demo',
            'description' => $this->faker->sentence(),
            'icon' => $this->faker->sentence(),
            'monitor' => 'None',
            'algorithm_type' => 'simple',
            'algorithm_masking' => 'open',
            'algorithm_rng_seed' => $this->faker->numerify(),
            'allocation_groups' => $this->faker->sentence(),
            'selection_options' => $this->faker->sentence(),
            'initial_sites' => $this->faker->city(),
            'system_messages' => 'Required field',
            'item_groups' => 'fieldset_01',
            'item_study_id' => $this->faker->sentence(),
            'item_name' => $this->faker->sentence(),
            'item_control_type' => 'Text',
            'item_text' => $this->faker->sentence(),
            'item_compulsory' => $this->faker->boolean(),
            'item_rules' => 'inclusion',
            'item_group' => 'fieldset_01',
            'item_validation' => 'none',
            'allocation_messages' => $this->faker->sentence()
        ];
    }
}
