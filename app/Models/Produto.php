<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    protected $fillable=[// lista branca o que pode ser preenchido pelo usuário;
       'name','number','active','description', 'category'


   ];
    //protected $guarded = ['price'];// lista negra o que noa pose ser inseridio pelo usuário;


    // requered preeenchimento obrigatorio
    // min minimo caracter
    // number so aceita caracter tipo numero
    // max maximo de caractere


    /*public $rules=[// regras para validar os campo
        'name'          =>'required|min:3|max:100',
        'number'        =>'required|numeric|max:10',
        'category'      =>'required|',
        'description'   =>'max:1500'

    ];
*/

}
