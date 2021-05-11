<?php
//SOLID
//SINGLE RESPONSABILITY

class Usuario {
    private $nome;

    public function setNome(){
        //implementação
    }

    public function getNome(){
        //implementação
    }

    public function enviaEmail(){ //aqui estou ferindo
        //implementação
    }

    public function exportarParaPlanilha(){ //aqui
        //implementação
    }
}

class Email {
    public function enviaEmail(){
        // implantação
    }
}

class ExportarDadosPlanilha extends ExportarDados{
    public function exportarParaPlanilha(){

    }
}


//EXEMPLO II
class Relatorio {

    private $dados;

    public function setDados(array $dados){
        //implantação
    }

    public function exportarParaPdf(){//aqui estou ferindo
        //implantação
    }

    public function exportarParaCsv(){//aqui estou ferindo
        //implantação
    }
}


//COMO REFATORAR SEM FERIR O PRINCIPIO DE RESPONSABILIDADE UNICA
class Relatorio {
    private $dados;

    public function setDados(array $dados){
        //implantação
    }
}

class ExportarDados {
    //implantação
}

class ExportarDadosPdf extends ExportarDados{
    public function exportar(){
        //implantação
    }
}

class ExportarDadosCSV extends ExportarDadosPdf {
    public function exportar(){
        //implantação
    }
}
//FIM EXEMPLO II


//EXEMPLO III
class Post {

    private $titulo;

    public function setTitulo(string $titulo){
        //implantação
    }

    public function geraUrlAmigavel(){ //aqui estou ferindo
        //implantação
    }

    public function buscarPostSemelhante(){ //aqui estou ferindo
        //implantação
    }
}

//COMO REFATORAR SEM FERIR O PRINCIPIO DE RESPONSABILIDADE UNICA

class Post{
    private $titulo;

    public function setTitulo(string $titulo){
        //implantação
    }
}

class Url{
    public function gerarUrlAmigavel(){
        //implantação
    }
}

class Busca{
    //implantação
}

class buscarPostSemelhanca extends Busca{
    public function buscar(){
        //implantação
    }
}