<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Usuario extends Authenticatable
{
    use Notifiable;

    protected $fillable = [
        'name', 'email', 'password', 'is_empresa',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    public function empresa()
    {
        return $this->hasOne(Empresa::class);
    }

    public function inscricoes()
    {
        return $this->hasMany(Inscricao::class);
    }
}
