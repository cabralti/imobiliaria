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
        $paginaSobre->descricao = "Descrição breve sobre a empresa.";
        $paginaSobre->texto = "Texto sobre a empresa.";
        $paginaSobre->imagem = "img/modelo_img_home.jpg";
        $paginaSobre->mapa = '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3673.1177241914506!2d-43.36403258503297!3d-22.98269808497323!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9bda2ec9620a2d%3A0x5c8412e8969fa343!2sDevMedia!5e0!3m2!1spt-BR!2sbr!4v1534873760941" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>';
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
