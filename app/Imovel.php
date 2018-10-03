<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Imovel extends Model
{
    //Definindo nome da tabela
    protected $table = "imoveis";

    //Definindo relacionamentos [tipos, cidades]
    public function tipo()
    {
        return $this->belongsTo('App\Tipo', 'tipo_id');
    }

    public function cidade()
    {
        return $this->belongsTo('App\Cidade', 'cidade_id');
    }

    public function galeria()
    {
        return $this->hasMany('App\Galeria', 'imovel_id');
    }

}
