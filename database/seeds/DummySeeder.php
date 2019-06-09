<?php

use Illuminate\Database\Seeder;

class DummySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Enderecos
        $enderecos = [
            [
                'logradouro' => 'Rua Nova', 
                'numero' => 123, 
                'complemento' => 'Casa', 
                'cep' => '37500000', 
                'bairro' => 'Bairro 1', 
                'municipio' => 'Itajubá', 
                'uf' => 'MG', 
                'created_at' => DB::raw('CURRENT_TIMESTAMP'), 
                'updated_at' => DB::raw('CURRENT_TIMESTAMP'), 
            ],
            [
                'logradouro' => 'Rua do Centro', 
                'numero' => 32, 
                'complemento' => 'Casa', 
                'cep' => '37500012', 
                'bairro' => 'Bairro 2', 
                'municipio' => 'Itajubá', 
                'uf' => 'MG', 
                'created_at' => DB::raw('CURRENT_TIMESTAMP'), 
                'updated_at' => DB::raw('CURRENT_TIMESTAMP'), 
            ],
            [
                'logradouro' => 'Rua Comercial', 
                'numero' => 500, 
                'complemento' => 'Apartamento', 
                'cep' => '37500090', 
                'bairro' => 'Bairro 1', 
                'municipio' => 'Itajubá', 
                'uf' => 'MG', 
                'created_at' => DB::raw('CURRENT_TIMESTAMP'), 
                'updated_at' => DB::raw('CURRENT_TIMESTAMP'), 
            ],
        ];
        DB::table('enderecos')->insert($enderecos);


        // Pessoas Fìsicas
        $fisicas = [
            [
                'endereco_id' => 1, 
                'nome' => 'Leandro Duarte', 
                'data_nascimento' => '1992-05-19', 
                'cpf' => '12345678978', 
                'email' => 'leandro@leandro.com', 
                'telefone' => '1234-5678', 
                'created_at' => DB::raw('CURRENT_TIMESTAMP'), 
                'updated_at' => DB::raw('CURRENT_TIMESTAMP'), 
            ],
            [
                'endereco_id' => 2, 
                'nome' => 'José da Silva', 
                'data_nascimento' => '1997-02-11', 
                'cpf' => '11111111', 
                'email' => 'jose@jose.com', 
                'telefone' => '1111-1111', 
                'created_at' => DB::raw('CURRENT_TIMESTAMP'), 
                'updated_at' => DB::raw('CURRENT_TIMESTAMP'), 
            ],
            [
                'endereco_id' => 1, 
                'nome' => 'Lucas Marra', 
                'data_nascimento' => '1985-02-01', 
                'cpf' => '2222222222', 
                'email' => 'lucas@lucas.com', 
                'telefone' => '2222-2222', 
                'created_at' => DB::raw('CURRENT_TIMESTAMP'), 
                'updated_at' => DB::raw('CURRENT_TIMESTAMP'), 
            ],
        ];
        DB::table('fisicas')->insert($fisicas);



        // Pessoas Jurídicas
        $juridicas = [
            [
                'endereco_id' => 3, 
                'nome_fantasia' => 'Casa das Roupas', 
                'razao_social' => 'casaroupas', 
                'data_abertura' => '1970-01-01', 
                'cnpj' => '11111111111111', 
                'email' => 'casa@casa.com', 
                'telefone' => '1234-5678', 
                'created_at' => DB::raw('CURRENT_TIMESTAMP'), 
                'updated_at' => DB::raw('CURRENT_TIMESTAMP'), 
            ],
            [
                'endereco_id' => 3, 
                'nome_fantasia' => 'Açougue popular', 
                'razao_social' => 'acougue', 
                'data_abertura' => '1972-06-30', 
                'cnpj' => '22222222222222', 
                'email' => 'acougue@acougue.com', 
                'telefone' => '2222-2222', 
                'created_at' => DB::raw('CURRENT_TIMESTAMP'), 
                'updated_at' => DB::raw('CURRENT_TIMESTAMP'), 
            ],
            [
                'endereco_id' => 1, 
                'nome_fantasia' => 'Casa das Bonecas', 
                'razao_social' => 'brinquedos', 
                'data_abertura' => '1990-05-20', 
                'cnpj' => '3333333333', 
                'email' => 'bonecas@bonecas.com', 
                'telefone' => '3333-3333', 
                'created_at' => DB::raw('CURRENT_TIMESTAMP'), 
                'updated_at' => DB::raw('CURRENT_TIMESTAMP'), 
            ],
        ];
        DB::table('juridicas')->insert($juridicas);
    }
}
