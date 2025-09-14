<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class EnderecoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('enderecos')->insert([
            'text' => 'Real Bank Pagamentos e Serviços Eletrônicos LTDA. - CNPJ Rua Graça Aranha, 1281 C - Estreito - MA.'
        ]);
    }
}
