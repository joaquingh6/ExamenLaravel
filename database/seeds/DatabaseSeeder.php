<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(RoleTableSeeder::class);

        $this->call(UserTableSeeder::class);

        $this->call(CategoriesTableSeeder::class);

        $this->call(TagsTableSeeder::class);

        $this->call(PostsTableSeeder::class);

        $this->call(GradesTableSeeder::class);

        $this->call(SubjectsTableSeeder::class);

        $this->call(GradeSubjectTableSeeder::class);


    }
}
