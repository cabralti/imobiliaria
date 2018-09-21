<?php

use Illuminate\Database\Seeder;
use App\Pagina;

class PaginasSeeds extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $existe = Pagina::where('tipo', '=', 'sobre')->count();

        if ($existe) {
            $paginaSobre = Pagina::where('tipo', '=', 'sobre')->first();
        }else{
            $paginaSobre = new Pagina();
        }

        $paginaSobre->titulo = "A Empresa";
        $paginaSobre->descricao = "Descricao breve sobre a empresa.";
        $paginaSobre->texto = "Texto sobre a empresa.";
        $paginaSobre->imagem = "img/modelo_img_home.jpg";
        $paginaSobre->mapa = 'Mapa do maroto';
        $paginaSobre->tipo = "sobre";

        $paginaSobre->save();

        echo "Pagina sobre criada com sucesso";


        $existe = Pagina::where('tipo', '=', 'contato')->count();

        if ($existe) {
            $paginaContato = Pagina::where('tipo', '=', 'contato')->first();
        }else{
            $paginaContato = new Pagina();
        }

        $paginaContato->titulo = "Entre em contato";
        $paginaContato->descricao = "Preencha o formulário";
        $paginaContato->texto = "Contato";
        $paginaContato->email = "cabral.9santos@gmail.com";
        $paginaContato->imagem = "img/modelo_img_home.jpg";
        $paginaContato->tipo = "contato";

        $paginaContato->save();

        echo "\nPagina contato criada com sucesso";

    }
}
