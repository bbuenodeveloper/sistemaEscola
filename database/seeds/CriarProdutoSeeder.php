<?php

use Illuminate\Database\Seeder;
use App\Produto;

class CriarProdutoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $produto = new Produto();
        $produto->nome_produto = "Produto teste";
        $produto->id_categoria = 1;
        $produto->save();
        // o de cima e o de baixo fazem a mesma coisa, o de cima é em objeto e o de baixo array associativo
        Produto::create([
            "nome_produto" => "Produto teste 2",
            "id_categoria" => 2
        ]);

        factory(Produto::class, 20)->create();
    }
}
