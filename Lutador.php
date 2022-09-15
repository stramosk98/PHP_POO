<?php
require_once 'Move.php';
class Lutador implements Move{
    
    private $nome;
    private $nascionalidade;
    private $idade;
    private $altura;
    private $peso;
    private $categoria;
    private $vitorias;
    private $derrotas;
    private $empates;

    function __construct($no, $na, $id, $al, $pe, $vi, $de, $em){
            $this->setNome($no);
            $this->setNascionalidade($na);
            $this->setIdade($id);
            $this->setAltura($al);
            $this->setPeso($pe);
            $this->setVitorias($vi);
            $this->setDerrotas($de);
            $this->setEmpates($em);

    }

    public function getNome()
    {
        return $this->nome;
    }

    public function setNome($nome)
    {
        $this->nome = $nome;

        return $this;
    }
 
    public function getNascionalidade()
    {
        return $this->nascionalidade;
    }
   
    public function setNascionalidade($nascionalidade)
    {
        $this->nascionalidade = $nascionalidade;

        return $this;
    }

    public function getIdade()
    {
        return $this->idade;
    }

    public function setIdade($idade)
    {
        $this->idade = $idade;

        return $this;
    }

    public function getAltura()
    {
        return $this->altura;
    }

    public function setAltura($altura)
    {
        $this->altura = $altura;

        return $this;
    }

    public function getPeso()
    {
        return $this->peso;
    }

    public function setPeso($peso)
    {
        $this->peso = $peso;
        $this->setCategoria();
    }

    public function getCategoria()
    {
        return $this->categoria;
    }

    private function setCategoria()
    {
        if($this->peso < 52.2 || $this->peso > 120.2){
            $this->categoria = 'Inválido';
        }else if($this->peso <= 70.3){
            $this->categoria = 'Leve';
        }else if($this->peso <= 83.9){
            $this->categoria = 'Médio';
        }else{
            $this->categoria = 'Pesado';
        }
    }
 
     function getVitorias(){
    
        return $this->vitorias;
    }

  
     function setVitorias($vitorias)
    {
        $this->vitorias = $vitorias;

        return $this;
    }
 
     function getDerrotas()
    {
        return $this->derrotas;
    }

     function setDerrotas($derrotas)
    {
        $this->derrotas = $derrotas;

        return $this;
    }

     function getEmpates()
    {
        return $this->empates;
    }

     function setEmpates($empates)
    {
        $this->empates = $empates;

        return $this;
    }

     function apresentar(){
        echo "<br>Lutador: ". $this->getNome();
        echo "<p>Idade: ". $this->getIdade(). " Anos";
        echo "<p>Pesando: ". $this->getPeso(). " Kgs";
        echo "<p>Origem: ". $this->getNascionalidade();
        echo "<p>Altura: ". $this->getAltura();
        echo "<p>Ganhou: ". $this->getVitorias();
        echo "<p>Perdeu: ". $this->getDerrotas();
        echo "<p>Empatou: ". $this->getEmpates(). "<p/>";
    }
     function status(){
        echo "<p>---------------{".$this->getNome()."}------------------<p/>";
        echo "Categoria peso ". $this->getCategoria();
        echo " " . $this->getVitorias() ." Vitorias";
        echo " " . $this->getDerrotas() ." Derrotas";
        echo " " . $this->getEmpates() ." Empates<p/>";
    }
     function ganharLuta(){
            $this->setVitorias($this->getVitorias() +1);
    }
     function perderLuta(){
        $this->setDerrotas($this->getDerrotas() +1);
    }
     function empatarLuta(){
        $this->setEmpates($this->getEmpates() +1);
    }

}

?>