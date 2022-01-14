<?php

use \App\Core\Controller;
use \App\Auth;

class Notes extends Controller{

    public function ver($id = ''){

        $note = $this->model('Note');
        $dados = $note->findId($id);

        $this->view('notes/ver', $dados);
    }

    public function criar(){

        $mensagem = array();

        Auth::checkLogin();

        if (isset($_POST['cadastrar'])):
            
            $note = $this->model('Note');
            $note->titulo = $_POST['titulo'];
            $note->texto = $_POST['texto'];
            
            $mensagem[] = $note->save();

        endif;

        $this->view('notes/criar', $dados = ['mensagem'=> $mensagem]);

    }

    public function editar($id){

        Auth::checkLogin();

        $mensagem = array();
        $note = $this->model('Note');

        if (isset($_POST['atualizar'])):    
            $note->titulo = $_POST['titulo'];
            $note->texto = $_POST['texto'];
            $mensagem[] = $note->update($id);
        endif;

        $dados = $note->findId($id);

        $this->view('notes/editar', $dados = ['mensagem' => $mensagem, 'registros' => $dados]);
    }

    public function excluir($id = ''){

        Auth::checkLogin();

        $mensagem = array();

        $note = $this->model('Note');
        
        $mensagem[] = $note->delete($id);
        $dados = $note->getAll();

        $this->view('home/index', $dados = ['registros' => $dados, 'mensagem' => $mensagem]);
    }

    
}