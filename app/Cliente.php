<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    //
    protected $fillable =[
       "cpf", "nome", "nascimento", "idade",
       "signo", "status","maeNome"
    ];


}
