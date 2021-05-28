<?php
// 2º exemplo de OCP (Open Close Principle) - 1º esta no slide da aula
//SOLID

class Frete {
    private $empresa;

    public function __construct(string $empresa){
        $this->empresa = $empresa;
    }

    public function calcular(){
        
        // AQUI ESTOU FERINDO O OPC
        if($this->empresa == 'Correios'){
            $logistica = new Correios;
        }elseif( $this->empresa == 'TotalExpress'){
            //logica
        }
        }elseif( $this->empresa == 'DHL'){
            //logica
        }else{
            return false;
        }
    }
}

// REFATORANDO PARA ATENDERMOS AO OPC
interface EmpresaDeLogistica {

    public function setPeso();
    public function setDestino();
    public function setOrigem();
    public function setTamanho();
    public function calcular();
}

class Correios implements EmpresaDeLogistica {
    //log
}

class TotalExpress implements EmpresaDeLogistica {
    //log
}

class DHL implements EmpresaDeLogistica {
    //log
}

class Frete {
    private $empresa;

    public function __construct(EmpresaDeLogistica $empresa){
        $this->empresa = $empresa;
    }

    public function calcular(){
        //log com metodos definidos na interface
    }
}


// 3º exemplo de OCP (Open Close Principle)
class Negativacao {
    private $devedor;

    public function __construct(Devedor $devedor){
        $this->devedor = $devedor;
    }

    public function enviar(string $orgaoNegativador){
        // ASSIM ACABO FERINDO O OCP

        if ($orgaoNegativador == 'Serasa'){
            //logica
        }elseif ($orgaoNegativador == 'SPC Brasil'){
            //logica
        }else{
            return 'Erro, órgão negativador não suportado'
        }
    }
}


// REFATORANDO PARA ATENDERMOS AO OPC
interface  OrgaoNegativador {
    public function enviarRemessaInclusao();
    public function enviarRemessaExclusao();
    public function receberRetorno();
}

class Serasa implements OrgaoNegativador {
    public function enviarRemessaInclusao(){

    }
    public function enviarRemessaExclusao(){

    }
    public function receberRetorno(){

    }
}

class SpcBrasil implements OrgaoNegativador {
    public function enviarRemessaInclusao(){

    }
    public function enviarRemessaExclusao(){

    }
    public function receberRetorno(){

    }
}

class BoaVista implements OrgaoNegativador {
    public function enviarRemessaInclusao(){

    }
    public function enviarRemessaExclusao(){

    }
    public function receberRetorno(){

    }
}


class Negativacao {
    private $devedor;

    public function __construct(Devedor $devedor){
        $this->devedor = $devedor;
    }

    public function enviar(OrgaoNegativador $orgao){
        // LOGICA
    }
}

class Main {
    public function restricao (){
        $negativacao = new Negativacao;

        $negativacao->enviar(new BoaVista);
    }
}