<?php
namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder {
  /**
   * Seed the application's database.
   *
   * @return void
   */
  public function run() {
    User::create([
      'name' => 'Sandhika Galih',
      'username' => 'sandhikagalih',
      'email' => 'sandhikagalih@gmail.com',
      'password' => bcrypt('password')
    ]);

    User::factory(5)->create();

    Category::create([
      'name' => 'Web Programming',
      'slug' => 'web-programming'
    ]);

    Category::create([
      'name' => 'Web Design',
      'slug' => 'web-design'
    ]);

    Category::create([
      'name' => 'Personal',
      'slug' => 'personal'
    ]);

    Post::factory(20)->create();
  }
}
