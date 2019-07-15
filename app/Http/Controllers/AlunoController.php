<?php 

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AlunoController extends Controller{

    public function cadastrarAluno(Request $request){
        if($request->isMethod('GET')){
            return view("cadastroAluno");
        }
        
        return view('sucesso',[
            "nome"=> $request->nome,
            "sobrenome"=> $request->sobrenome
        ]);
    }
}

?>