<?php

class Ebook{
    private $id;
    private $titulo;
    private $descricao;
    private $isbm;
    private $data_publicacao;
    private $preco;
    private $idioma;
    private $foto;



    public function __constructor($titulo, $descricao, $isbm, $data_publicacao, $preco, $foto, $idioma){
        $this->titulo = $titulo;
        $this->descricao = $descricao;
        $this->isbm = $isbm;
        $this->data_publicacao = $data_publicacao;
        $this->preco = $preco;
        $this->idioma = $idioma;
        $this->foto = $foto;

    }

    public function inserir(){}

    public function buscar($id){}

    public function buscarTodos(){}

    public function atualizar($id){}

    public function deletar($id){}
}

?>