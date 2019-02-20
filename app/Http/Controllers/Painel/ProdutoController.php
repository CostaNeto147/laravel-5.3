<?php

namespace App\Http\Controllers\Painel;

use Validator;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Produto;
use App\Http\Requests\ProdutoRequest;


class ProdutoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


private $produt;



public function __construct(Produto $prod)
    {
        $this->produt=$prod;
    }

    public function index()
    {
        $produtos = $this->produt->all();

        return view('empresa',compact('produtos'));
    }




    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    $categoria=['limpeza', 'alimento', 'frio', 'bebida'];
      return view('createProduto',compact('categoria'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

       //dd($request->all()); retorn tudo
        //dd($request->only(['name','number'])); puxando apenas alguns campos especificos do formulario name e number
       // dd($request->except(['number','_token'])); puxando todos os dados do formulario menos os campos number e token
        //dd(request('active',0), $request->active);



        $request->merge(['active' => request('active',0)]); // se os active for vazio sera incluido o 0 senão o 1;


        //dd($request->all());

        //validação
        //dd($request->all(), $this->produt->rules);

        $this->validate($request, $this->produt->rules);

//inserindo os dados do formulario no banco de dados metodo insert
        $insert=$this->produt->create($request->all());

        if($insert)
             return redirect()->route('produtos.index');
        else
             return redirect()->route('produtos.create');


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    public function testes(){

            // INSERT

      /* $insert=$this->produt->create([
            'name'      =>'cerveja',
            'number'    =>132165,
            'active'    =>1,
            'category'   =>'bebida',
            'description'=>'alimentacação '
        ]);

        if($insert)
            return "inserido com sucesso id: {$insert->id}";
        else
            return'Falha ao enviar';

    */
            //UPDATE


           /* $prod=$this->produt->find(5);// find(5) retorna um item pelo id


            //$prod=$this->produt>where('number', 12345);  buscando pela coluna number

           // dd($prod);// retornando tudo

          $up=$prod->update([
            'name'      =>'vinho',
           'number'    =>13216,
           'active'    =>1,
           'category'   =>'bebida',
           'description'=>'contém alcool']);

           if($up)
             return"Alterado com sucesso";
           else
            return "falha ao atualizar";
*/
                    //DELETE

            /*
            $prod=$this->produt->find(5);
            $delete=$prod->delete();
            if($delete)
            return"Deletado com sucesso";
          else
           return "falha ao deletar";
            */




      }
}
