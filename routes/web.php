    <?php

    /*
    |--------------------------------------------------------------------------
    | Web Routes
    |--------------------------------------------------------------------------
    |
    | Here is where you can register web routes for your application. These
    | routes are loaded by the RouteServiceProvider within a group which
    | contains the "web" middleware group. Now create something great!
    |
    */

    Route::get('/empresa',function(){
        return view('empresa');
    });




    Route::post('/post',function(){
        return 'rota post';// rota dos tipo post submeti a um formularios
    });

    Route::match(['get', 'post'], '/match', function () {
        return 'rota match';// pode retornar tanto uma rota get quanto post conforme especificado
    });

    Route::any('/any',function(){
        return 'rota any';// retorna todos os tipos de
    });



    // name nomeando rotas

    Route::get('/nome/nome2/nome3',function(){
        return 'Rota Grande';
    })->name('rota.grande');


    Route::get('/contato', function(){
        return  redirect()->route('rota.grande');// sendo direcionado para rota.grande
    });

    // passando parametro pelas rotas orbigatorio passa o parametro
    Route::get('/categoria/{id}', function($id){
        return"Posta da categoria {$id}";

    });

    // passando mais de um parametro
    Route::get('/categoria/{id}/nome/{nome}',function($id,$nome){
        return " id da categoria {$id}- {$nome}";
    });


    // passando paramento opcional

    Route::get('/categoria/{id?}', function($id=''){
        return"Posta da categoria .... {$id}";

    });



    //criando grupo de rotas
    Route::group(['prefix' => 'admin'], function () {

        Route::get('/1',function(){
            return 'empresa 1';
        });
        Route::get('/2',function(){
            return 'empresa 2';
        });
    });


    // middleware filtra o acesso

    Route::get('/teste',['middleware'=>'auth'], function () {
        return view('welcome');
    });



    // forma correta passando para o controller
    Route::get('index','Site\SiteController@index');


        // criando grupo que estao no mesmo diretorio Site
    Route::group(['namespace'=>'Site'],function()
    {
       // Route::get('cat/{id}','SiteController@categoria')->midddleware('auth');// com parametro obrigatorio e tem q estar logado por conta do filtro middleware

        Route::get('opc/{id?}','SiteController@opcao');// passagem por paramentro opcional

    });


    // caso eu nao cria-se grupo seria dessa forma
    //Route::get('/','Site\SiteController@index');

Route::resource('/painel/produtos','Painel\ProdutoController');// metodo agora é resource poor existe varios metodos diferentes CRUD




    Route::get('/', function () {
        return view('welcome');
    });

