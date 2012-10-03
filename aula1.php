<?php

class carro
{
	
	public $nome_modelo = "";
	// public $velocidade = '100km/h';
 	
 	public function nome($nome) {
        $this->nome_modelo = $nome;
    }

    function acelerar($velocidade='100km/h')
    {
        echo 'O ' . $this->nome_modelo . ' está acelerando a ' . $velocidade; 
        // echo 'Estou acelerando a ' . $velocidade; 
    }
}

class picape extends carro
{
	public $peso_carregado = 0;
	public $peso_maximo = 500;
 	
 	function define_cacamba($peso) {
        if ($peso > $this->peso_maximo) 
        	echo "A caçamba pode ter até $this->peso_maximo kilos";
        else
        	$this->peso_carregado = $peso;
    }

    public function transportar($peso=100)
    {
    	$this->define_cacamba($peso);
        echo 'O ' . $this->nome_modelo . ' está carregando ' . $this->peso_carregado . ' kilos'; 
    }
}

$carro1 = new carro;
$carro1->nome('Siena');
$carro1->acelerar('200Km/h');

echo '<br/>';

$carro2 = new carro;
$carro2->nome('Bravo');
$carro2->acelerar('250Km/h');

echo '<br/>';

$carro3 = new picape;
$carro3->nome('Strada');
$carro3->acelerar('150Km/h');
echo '<br/>';
$carro3->transportar(400);

?>