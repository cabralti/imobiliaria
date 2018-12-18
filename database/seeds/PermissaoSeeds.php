<?php

use Illuminate\Database\Seeder;
use App\Permissao;

class PermissaoSeeds extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (!Permissao::where('nome', '=', 'usuario_listar')->count()) {
            Permissao::create([
                'nome' => 'usuario_listar',
                'descricao' => 'Listar Usuários'
            ]);
        } else {
            /** @var Permissao $permissao */
            $permissao = Permissao::where('nome', '=', 'usuario_listar')->first();
            $permissao->update([
                'nome' => 'usuario_listar',
                'descricao' => 'Listar Usuários'
            ]);
        }

        if (!Permissao::where('nome', '=', 'usuario_adicionar')->count()) {
            Permissao::create([
                'nome' => 'usuario_adicionar',
                'descricao' => 'Adicionar Usuários'
            ]);
        } else {
            /** @var Permissao $permissao */
            $permissao = Permissao::where('nome', '=', 'usuario_adicionar')->first();
            $permissao->update([
                'nome' => 'usuario_adicionar',
                'descricao' => 'usuario_adicionar Usuários'
            ]);
        }

        if (!Permissao::where('nome', '=', 'usuario_editar')->count()) {
            Permissao::create([
                'nome' => 'usuario_editar',
                'descricao' => 'Editar Usuários'
            ]);
        } else {
            /** @var Permissao $permissao */
            $permissao = Permissao::where('nome', '=', 'usuario_editar')->first();
            $permissao->update([
                'nome' => 'usuario_editar',
                'descricao' => 'Editar Usuários'
            ]);
        }

        if (!Permissao::where('nome', '=', 'usuario_deletar')->count()) {
            Permissao::create([
                'nome' => 'usuario_deletar',
                'descricao' => 'Deletar Usuários'
            ]);
        } else {
            /** @var Permissao $permissao */
            $permissao = Permissao::where('nome', '=', 'usuario_deletar')->first();
            $permissao->update([
                'nome' => 'usuario_deletar',
                'descricao' => 'Deletar Usuários'
            ]);
        }

        // Papel
        if (!Permissao::where('nome', '=', 'papel_listar')->count()) {
            Permissao::create([
                'nome' => 'papel_listar',
                'descricao' => 'Listar Pápeis'
            ]);
        } else {
            /** @var Permissao $permissao */
            $permissao = Permissao::where('nome', '=', 'papel_listar')->first();
            $permissao->update([
                'nome' => 'papel_listar',
                'descricao' => 'Listar Pápeis'
            ]);
        }

        if (!Permissao::where('nome', '=', 'papel_adicionar')->count()) {
            Permissao::create([
                'nome' => 'papel_adicionar',
                'descricao' => 'Adicionar Pápeis'
            ]);
        } else {
            /** @var Permissao $permissao */
            $permissao = Permissao::where('nome', '=', 'papel_adicionar')->first();
            $permissao->update([
                'nome' => 'papel_adicionar',
                'descricao' => 'Adicionar Pápeis'
            ]);
        }

        if (!Permissao::where('nome', '=', 'papel_editar')->count()) {
            Permissao::create([
                'nome' => 'papel_editar',
                'descricao' => 'Editar Pápeis'
            ]);
        } else {
            /** @var Permissao $permissao */
            $permissao = Permissao::where('nome', '=', 'papel_editar')->first();
            $permissao->update([
                'nome' => 'papel_editar',
                'descricao' => 'Editar Pápeis'
            ]);
        }

        if (!Permissao::where('nome', '=', 'papel_deletar')->count()) {
            Permissao::create([
                'nome' => 'papel_deletar',
                'descricao' => 'Deletar Pápeis'
            ]);
        } else {
            /** @var Permissao $permissao */
            $permissao = Permissao::where('nome', '=', 'papel_deletar')->first();
            $permissao->update([
                'nome' => 'papel_deletar',
                'descricao' => 'Deletar Pápeis'
            ]);
        }

    }
}
