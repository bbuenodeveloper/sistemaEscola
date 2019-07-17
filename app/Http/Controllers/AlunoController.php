<?php 

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Aluno;

class AlunoController extends Controller{

    public function cadastrarAluno(Request $request){
        if($request->isMethod('GET')){
            return view("cadastroAluno");
        }
        
        $novoAluno = new Aluno();
        $novoAluno->nome = $request->nome;
        $novoAluno->cpf = $request->cpf;
        $resultado = $novoAluno->save();

        if($resultado){
            return view('sucesso', ['erro'=>false, 'aluno'=>$novoAluno]);
        }else{
            return view('sucesso', ['erro'=>true, 'aluno'=>$novoAluno]);
        }
    }

    public function selecionarAluno(Request $request){
        // $resultado = Aluno::all(); esse jeito ou o de baixo
        $alunos = new Aluno();
        $resultado = $alunos->all();

        return view('selecionarAluno',['alunos'=>$resultado]);

    }
    public function deletarAluno(Request $request, $id){
        $alunos = Aluno::find($id);
        $alunos->delete();

        return redirect("/aluno/selecionar");
}

}




?>