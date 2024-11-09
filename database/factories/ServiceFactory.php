<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\service>
 */
class ServiceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->word,  // Generate a random title (e.g., "Driving License")
            'description' => $this->faker->paragraph,  // Generate a random paragraph
            'image_url' => 'images/service' . rand(1, 5) . '.png',  // Example image URL, adjust based on your actual assets
            'document_list' => implode(',', $this->faker->words(3)),  // Generate 3 random document names (comma-separated)
            'note' => 'If you are interested, You can simply whatsapp or email above documents to our Whatsapp number and email id.',  // Fake contact information (e.g., WhatsApp number)
        ];
    }
}
