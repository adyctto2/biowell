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
        $this->truncateTables([
            'testimonios',
            'productos',
            'servicios',
            'p_imagenes',
            'eventos'
        ]);
        
        $this->call(ProductosSeeder::class);
        $this->call(TestimoniosSeeder::class);
        $this->call(ServiciosSeeder::class);
        $this->call(PimagenesSeeder::class);
        $this->call(EventoSeeder::class);
    }
    public function truncateTables(array $tables)
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0;');

        foreach ($tables as $table) {
            DB::table($table)->truncate();
        }

        DB::statement('SET FOREIGN_KEY_CHECKS = 1;');
    }
}
