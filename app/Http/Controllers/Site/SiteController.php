<?php

namespace App\Http\Controllers\Site;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class SiteController extends Controller
{
public function __construct(){
    //$this->middleware('auth');// para acessa qualquer metodo dessa clase obrigatoriamente tem que esta logado por conta do filtro auth

    //$this->middleware('auth')->only(['contato','categoria']);// especificando que apenas os dois metodos vão passar por esse filtro;

    //$this->middleware('auth')>except(['opcao','index']);// especificando que esse dois metodoph nao vão passar neles
}
    public function index(){
        $teste=123;// passando varial para a view
        $teste1=1224;
        $var=159;
        $arrayTeste=[1,2,4,5,6,7,8,9,10];
        $array2=[];
        return view('index',compact('teste','teste1','var','arrayTeste','array2'));
        }


    public function categoria($id){// obrigatorio passar o valor como parametro
        return "Listagem dos posta da caregoria ===={$id}";
    }


    public function opcao($op=null){// caso o parametro nao seja passado sera incluido o valor null evitando um erro
        return " Opção xxx{$op}";
    }
}
