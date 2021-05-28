<?php


class Retangulo
{
    protected $largura;
    protected $altura;

    public function setAltura($altura)
    {
        $this->altura = $altura;
    }

    public function getAltura()
    {
        return $this->altura;
    }

    public function setLargura($largura)
    {
        $this->largura = $largurah;
    }

    public function getWidth()
    {
        return $this->width;
    }

    public function area()
    {
         return $this->altura * $this->largura;
    }
}

class Quadrado extends Retangulo
{
    public function setAltura($value)
    {
        $this->largura = $value;
        $this->altura = $value;
    }

    public function setLargura($value)
    {
        $this->largura = $value;
        $this->altura = $value;
    }
}

class RetanguloTeste
{
    private $retangulo;

    public function __construct(Retangulo $retangulo)
    {
        $this->retangulo = $retangulo;
    }

    public function testeArea()
    {
        $this->retangulo->setAltura(2);
        $this->retangulo->setLargura(3);
    }
}