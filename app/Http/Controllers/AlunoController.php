<?php

namespace App\Http\Controllers;

use App\Models\Aluno;
use App\Models\Turma;
use Illuminate\Http\Request;

// ARRUMAR STORE E UPDATE

class AlunoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(Aluno::count() != 0){
            $alunos = Aluno::orderBy('nome_aluno')->get();
        }else{
            $alunos = null;
        }
        return view('aluno.index')->with('alunos',$alunos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if(Turma::count() != 0){
            $turmas = Turma::orderBy('nome_turma')->get();
        }else{
            $turmas = null;
        }
        return view('aluno.create')->with('turmas', $turmas);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $a = new Aluno();
        $a->nome_aluno = $request->input('form_nome_aluno');
        $a->nascimento_aluno = $request->input('form_data_aluno');
        $a->ra_aluno = $request->input('form_ra_aluno');
        $a->turma_id = $request->input('form_turma_aluno');
        $a->save();
        return redirect(route('aluno.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $aluno = Aluno::find($id);
        if($aluno){
            return view('aluno.show')->with('aluno', $aluno);
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
        $aluno = Aluno::find($id);
        $turmas = Turma::orderBy('nome_turma')->orWhere('nome_turma','!=',$aluno->turma->nome_turma)->get();
        return view('aluno.edit')->with(['aluno' => $aluno, 'turmas' => $turmas]);
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
        $aluno = Aluno::find($id);
        $aluno->nome_aluno = $request->input('form_nome_aluno');
        $aluno->nascimento_aluno = $request->input('form_data_aluno');
        $aluno->ra_aluno = $request->input('form_ra_aluno');
        $aluno->turma_id = $request->input('form_turma_aluno');
        $aluno->save();
        return redirect(route('aluno.index')); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $aluno = Aluno::find($id);
        $aluno->delete();
        return redirect(route('aluno.index'));
    }
}

/*
    form_nome_aluno
    form_data_aluno
    form_ra_aluno
    form_turma_aluno
*/