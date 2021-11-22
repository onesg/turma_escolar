<?php

namespace App\Http\Controllers;

use App\Models\Turma;
use Illuminate\Http\Request;
use stdClass;

class TurmaController extends Controller
{
    public function __construct()
    {

    }

    //  TOTAL DE REGISTROS QUE SERAO EXIBIDOS
    private $totalPage = 5;

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(Turma::count() != 0){
            //$turmas = Turma::orderBy('nome_turma')->get();
            $turmas = Turma::orderBy('nome_turma')->paginate($this->totalPage);
        }else{
            $turmas = null;
        }
        return view('turma.index')->with('turmas',$turmas);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('turma.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $t = new Turma();
        $t->nome_turma = $request->input('form_nome_turma');
        $t->classe_turma = $request->input('form_classe_turma');
        $t->sala_turma = $request->input('form_sala_turma');
        $t->save();
        return redirect(route('turma.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $turma = Turma::find($id);
        if($turma){
            return view('turma.show')->with('turma', $turma);
        }else{
            abort(404);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $turma = Turma::find($id);
        return view('turma.edit')->with('turma', $turma);
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
        $turma = Turma::find($id);
        $turma->nome_turma = $request->input('form_nome_turma');
        $turma->classe_turma = $request->input('form_classe_turma');
        $turma->sala_turma = $request->input('form_sala_turma');
        $turma->save();
        return redirect(route('turma.index')); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $turma = Turma::find($id);
        $turma->delete();
        return redirect(route('turma.index'));
    }
    public function getRules(){
        //
    }
}
