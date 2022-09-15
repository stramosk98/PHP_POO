<?php
require_once 'Lutador.php';
class Luta{
    private $desafiado;
    private $desafiante;
    private $rounds;
    private $aprovada;

    function marcarLuta($l1, $l2){
        if(($l1->getCategoria() === $l2->getCategoria()) && ($l1 != $l2)){
            $this->aprovada = true;
            $this->desafiado = $l1;
            $this->desafiante = $l2;
        }else{
            $this->aprovada = false;
            $this->desafiado = null;
            $this->desafiante = null;
        }
    }

    function lutar(){
        if($this->aprovada){
            echo "<br><p>---{" . $this->desafiado->getNome(). " VS. " . $this->desafiante->getNome(). "...<p/><br/>";
            $this->desafiado->apresentar();
            $this->desafiante->apresentar();
            $vencedor = rand(0,2);
            switch($vencedor){
                
            case 0:
                echo "<br><p>---{Empatou!}---<p/><br>";
                $this->desafiado->empatarLuta();
                $this->desafiante->empatarLuta();
                break;
            
            case 1:
                echo "<br><p>---{" .$this->desafiado->getNome(). " Ganhou!}---<p/><br>";
                $this->desafiado->ganharLuta();
                $this->desafiante->perderLuta();
                break;
            
            case 2:
                echo "<br><p>---{" .$this->desafiante->getNome(). " Ganhou!}---<p/><br>";
                $this->desafiado->perderLuta();
                $this->desafiante->ganharLuta();
                break;
            
        }
        }else{
            echo "<p>A luta não pode acontecer!<p/>";
        }
    }

    public function getDesafiado()
    {
        return $this->desafiado;
    }

    public function setDesafiado($dd)
    {
        $this->desafiado = $dd;

        return $this;
    }

    public function getDesafiante()
    {
        return $this->desafiante;
    }

    public function setDesafiante($desafiante)
    {
        $this->desafiante = $desafiante;

        return $this;
    }

    public function getRounds()
    {
        return $this->rounds;
    }
 
    public function setRounds($rounds)
    {
        $this->rounds = $rounds;

        return $this;
    }

    public function getAprovada()
    {
        return $this->aprovada;
    }
 
    public function setAprovada($aprovada)
    {
        $this->aprovada = $aprovada;

        return $this;
    }
    }


?>