<?php

use Illuminate\Database\Seeder;
use App\Models\Painel\Estilo;

class EstilosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Estilo::create([
            'nome' => 'Pop'
        ]);

        Estilo::create([
            'nome' => 'Rock'
        ]);

        Estilo::create([
            'nome' => 'Jazz'
        ]);

        Estilo::create([
            'nome' => 'Hip Hop'
        ]);

        Estilo::create([
            'nome' => 'Rap'
        ]);

        Estilo::create([
            'nome' => 'R&B'
        ]);
    }
}
