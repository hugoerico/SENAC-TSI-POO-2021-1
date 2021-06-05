<?php

interface Restaurante
{
        public function  aceitarOnline();
        public function  pagamentoOnline();
        public function  entraCliente();
        public function  pagamentodinheiro();

}

class Cliente implements Restaurante
{
        public function  aceitarOnline()
        {
            
        }

        public function  pagamentoOnline()
        {
             
        }
}



interface ClienteOnlineInterface
{
        public function  aceitarOnline();
        public function  pagamentoOnline();
}

interface EntraClienteInterface
{
        public function  entraCliente();
        public function  pagamentodinheiro();
}

class CompraOnline implements ClienteOnlineInterface
{
        public function  aceitarOnline()
        {
           
        }

        public function  pagamentoOnline()
        {
            
        }
}

class EntraCliente implements EntraClienteInterface
{
        public function  entraCliente()
        {
            
        }

        public function  pagamentodinheiro()
        {
             
        }
}

?>