<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        User::Create([
            'name' => 'Aku Kessoku band',
            'username' => 'bocchiderock',
            'email' => 'bocchi@gmail.com',
            'password' => bcrypt('12345')
        ]);
        // User::Create([
        //     'name' => 'Ryomen Sukuna',
        //     'email' => 'sukuna@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);

        User::factory(4)->create();

        Category::Create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);
        Category::Create([
            'name' => 'Web Design',
            'slug' => 'web-design'
        ]);
        Category::Create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        Post::factory(20)->create();

        // Post::Create([
        //     'category_id' => 1,
        //     'user_id' => 1,
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul_pertama',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Possimus blanditiis aliquid debitis, sed ipsa distinctio exercitationem odio, et sapiente voluptatibus explicabo perferendis enim natus aspernatur?',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Possimus blanditiis aliquid debitis, sed ipsa distinctio exercitationem odio, et sapiente voluptatibus explicabo perferendis enim natus aspernatur? Nihil, libero quam quidem dolorem impedit aspernatur, et facere officia rerum deleniti, neque eos. Natus optio iusto nisi voluptatum error inventore molestias. Nihil esse culpa earum qui corporis vero modi eius, vitae eum eveniet libero nostrum, hic voluptatum! Id modi.</p><p>Nobis dolore nisi incidunt excepturi ad recusandae aspernatur placeat doloribus laboriosam tempore maxime magnam, provident magni reiciendis cum similique molestias nostrum voluptate velit voluptates quidem, voluptatem libero. Perferendis atque veritatis ea assumenda ab quod saepe, enim iusto iste deleniti unde sunt accusamus itaque! Expedita distinctio maxime quasi maiores placeat reprehenderit. Eos ad maiores illo necessitatibus neque est ea repellat.</p><p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aspernatur quidem dolore impedit harum nesciunt repudiandae temporibus doloribus. Voluptatibus assumenda dolore eligendi aliquid nostrum eius fugit cupiditate, tenetur, minus pariatur ratione aperiam velit doloremque ab est? Deserunt in exercitationem cumque at dolores facere doloribus deleniti? Nihil tenetur sint officia unde?</p>'
        // ]);
        // Post::Create([
        //     'category_id' => 2,
        //     'user_id' => 1,
        //     'title' => 'Judul Kedua',
        //     'slug' => 'judul_kedua',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Possimus blanditiis aliquid debitis, sed ipsa distinctio exercitationem odio, et sapiente voluptatibus explicabo perferendis enim natus aspernatur?',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Possimus blanditiis aliquid debitis, sed ipsa distinctio exercitationem odio, et sapiente voluptatibus explicabo perferendis enim natus aspernatur? Nihil, libero quam quidem dolorem impedit aspernatur, et facere officia rerum deleniti, neque eos. Natus optio iusto nisi voluptatum error inventore molestias. Nihil esse culpa earum qui corporis vero modi eius, vitae eum eveniet libero nostrum, hic voluptatum! Id modi.</p><p>Nobis dolore nisi incidunt excepturi ad recusandae aspernatur placeat doloribus laboriosam tempore maxime magnam, provident magni reiciendis cum similique molestias nostrum voluptate velit voluptates quidem, voluptatem libero. Perferendis atque veritatis ea assumenda ab quod saepe, enim iusto iste deleniti unde sunt accusamus itaque! Expedita distinctio maxime quasi maiores placeat reprehenderit. Eos ad maiores illo necessitatibus neque est ea repellat.</p><p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aspernatur quidem dolore impedit harum nesciunt repudiandae temporibus doloribus. Voluptatibus assumenda dolore eligendi aliquid nostrum eius fugit cupiditate, tenetur, minus pariatur ratione aperiam velit doloremque ab est? Deserunt in exercitationem cumque at dolores facere doloribus deleniti? Nihil tenetur sint officia unde?</p>'
        // ]);
        // Post::Create([
        //     'category_id' => 2,
        //     'user_id' => 2,
        //     'title' => 'Judul Ketiga',
        //     'slug' => 'judul_ketiga',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Possimus blanditiis aliquid debitis, sed ipsa distinctio exercitationem odio, et sapiente voluptatibus explicabo perferendis enim natus aspernatur?',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Possimus blanditiis aliquid debitis, sed ipsa distinctio exercitationem odio, et sapiente voluptatibus explicabo perferendis enim natus aspernatur? Nihil, libero quam quidem dolorem impedit aspernatur, et facere officia rerum deleniti, neque eos. Natus optio iusto nisi voluptatum error inventore molestias. Nihil esse culpa earum qui corporis vero modi eius, vitae eum eveniet libero nostrum, hic voluptatum! Id modi.</p><p>Nobis dolore nisi incidunt excepturi ad recusandae aspernatur placeat doloribus laboriosam tempore maxime magnam, provident magni reiciendis cum similique molestias nostrum voluptate velit voluptates quidem, voluptatem libero. Perferendis atque veritatis ea assumenda ab quod saepe, enim iusto iste deleniti unde sunt accusamus itaque! Expedita distinctio maxime quasi maiores placeat reprehenderit. Eos ad maiores illo necessitatibus neque est ea repellat.</p><p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aspernatur quidem dolore impedit harum nesciunt repudiandae temporibus doloribus. Voluptatibus assumenda dolore eligendi aliquid nostrum eius fugit cupiditate, tenetur, minus pariatur ratione aperiam velit doloremque ab est? Deserunt in exercitationem cumque at dolores facere doloribus deleniti? Nihil tenetur sint officia unde?</p>'
        // ]);
        // Post::Create([
        //     'category_id' => 1,
        //     'user_id' => 2,
        //     'title' => 'Judul Keempat',
        //     'slug' => 'judul_keempat',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Possimus blanditiis aliquid debitis, sed ipsa distinctio exercitationem odio, et sapiente voluptatibus explicabo perferendis enim natus aspernatur?',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Possimus blanditiis aliquid debitis, sed ipsa distinctio exercitationem odio, et sapiente voluptatibus explicabo perferendis enim natus aspernatur? Nihil, libero quam quidem dolorem impedit aspernatur, et facere officia rerum deleniti, neque eos. Natus optio iusto nisi voluptatum error inventore molestias. Nihil esse culpa earum qui corporis vero modi eius, vitae eum eveniet libero nostrum, hic voluptatum! Id modi.</p><p>Nobis dolore nisi incidunt excepturi ad recusandae aspernatur placeat doloribus laboriosam tempore maxime magnam, provident magni reiciendis cum similique molestias nostrum voluptate velit voluptates quidem, voluptatem libero. Perferendis atque veritatis ea assumenda ab quod saepe, enim iusto iste deleniti unde sunt accusamus itaque! Expedita distinctio maxime quasi maiores placeat reprehenderit. Eos ad maiores illo necessitatibus neque est ea repellat.</p><p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aspernatur quidem dolore impedit harum nesciunt repudiandae temporibus doloribus. Voluptatibus assumenda dolore eligendi aliquid nostrum eius fugit cupiditate, tenetur, minus pariatur ratione aperiam velit doloremque ab est? Deserunt in exercitationem cumque at dolores facere doloribus deleniti? Nihil tenetur sint officia unde?</p>'
        // ]);
    }
}
