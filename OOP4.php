<?php

class Car {
    private $num_telaio;

    // setter e getter per il telaio
    public function setNumTelaio($num) {
        $this->num_telaio = $num;
    }

    public function getNumTelaio() {
        return $this->num_telaio;
    }
}

class Fiat extends Car {
    protected $license;
    protected $name;

    public function __construct($nome, $targa, $telaio) {
        $this->name = $nome;
        $this->license = $targa;
        $this->setNumTelaio($telaio);  
    }

    public function printMessage() {
        echo "La mia macchina e' {$this->name}, con targa {$this->license} e numero di Telaio {$this->getNumTelaio()}\n";
    }
}

// esempio d'uso
$car = new Fiat("Opel", "ND 123 OJ", "1234");
$car->printMessage();

?>