<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    // Papel <-> User
    public function papeis()
    {
        return $this->belongsToMany(Papel::class);
    }

    /**
     * Adiciona relação entre papel e usuário
     *
     * @param $papel
     * @return \Illuminate\Database\Eloquent\Model
     */
    public function adicionarPapel($papel)
    {
        // Verifica se é uma string
        if (is_string($papel)) {
            return $this->papeis()->save(
                Papel::where('nome', '=', $papel)->firstOrFail()
            );
        }

        // Se for objeto, retorna direto
        return $this->papeis()->save(
            Papel::where('nome', '=', $papel->nome)->firstOrFail()
        );
    }

    /**
     * Remove relação entre papel e usuário
     *
     * @param $papel
     * @return int
     */
    public function removerPapel($papel)
    {
        // Verifica se é uma string
        if (is_string($papel)) {
            return $this->papeis()->detach(
                Papel::where('nome', '=', $papel)->firstOrFail()
            );
        }

        // Se for objeto, retorna direto
        return $this->papeis()->detach(
            Papel::where('nome', '=', $papel->nome)->firstOrFail()
        );
    }

    public function existePapel($papel)
    {
        if(is_string($papel)){
            return $this->papeis->contains('nome', $papel);
        }

        return $papel->intersect($this->papeis)->count();
    }

    public function existeAdmin()
    {
        return $this->existePapel('admin');
    }
}
