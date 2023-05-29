<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => User::factory(),
            'category_id' => Category::factory(),
            'title' => $this->faker->sentence(),
            'slug' => $this->faker->slug(),
            'excerpt' => '<p>'. implode('</p><p>', $this->faker->paragraphs(2)) .'</p>',
            'body' => '<p>'. implode('</p><p>', $this->faker->paragraphs(6)) .'</p>'
//            'excerpt' => '<p>'.'Lorem ipsum dolor sit amet ccing elit. Ne, d doloore Rerum dolor est a quod, dolorem adipisci sint obcaecati repellat in porro itaque commodi distinctio quaerat. Blanditiis eum omnis doloribus.
//Lorem ipsum dolor sit amet consectetur adipisicing elit.' . '</p>',
//            'body' => '<p>'.'Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus consequuntur ab eum obcaecati, dolorum perspiciatis doloremque debitis exercitationem soluta aut animi, inventore consequatur facere qui dolor et veniam atque numquam! Rerum dolor est a quod, dolorem adipisci sint obcaecati repellat in porro itaque commodi distinctio quaerat. Blanditiis eum omnis doloribus.
//Lorem ipsum dolor sit amet consectetpisicing elit. Necessitatibus consequuntur ab eum obcaecati, dolorum perspiciatis doloremque debitis exercitationem soluta aut animi, inventore consequatur facere qui dolor et veniam atque numquam! Rerum dolor est a quod, dolorem adipisci sint obcaecati repellat in porro itaque commodi distinctio quaerat. Blanditiis eum omnis doloribus.
//Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus consequuntur ab eum obcaecati, dolorum perspiciatis doloremque debitis exercitationem soluta aut animi, inventore consequatur facere qui dolor et veniam atque numquam! Rerum dolor est a quod, dolorem adipisci sint obcaecati repellat in porro itaque commodi distinctio quaerat. Blanditiis eum omnis doloribus.' . '</p>'
        ];
    }
}
