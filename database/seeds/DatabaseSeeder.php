<?php

use Illuminate\Database\Seeder;

use App\Book;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);

        // Desactivar integridad referencial de claves foráneas
        DB::statement('ALTER TABLE books DISABLE TRIGGER ALL;');

        // Vaciar las tablas
        Book::truncate();

        // Activar integridad referencial de claves foráneas
        DB::statement('ALTER TABLE books ENABLE TRIGGER ALL;');

        // Insertar datos del sseder Book
        $this->call(BooksSeeder::class);
    }
}

