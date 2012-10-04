<?php

class veiculo{
    public $nome_modelo = "";

    public function nome($nome) {
        $this->nome_modelo = $nome;
    }

}

class carro extends veiculo
{
    public $velocidade_ini = 0;
    public $velocidade_max = 220;
   
    function define_velocidade($velocidade){
        if($velocidade > $this->velocidade_max)
            echo "Limite de velocidade $this->nome_modelo: $this->velocidade_max KM/h";
        else
            $this->velocidade_ini = $velocidade;
    }

    function acelerar($velocidade=0)
    {
        $this->define_velocidade($velocidade);
        echo '<br /> ' . $this->nome_modelo . ' esta acelerando a ' . $this->velocidade_ini . 'KM/h.<br />'; 
    }
}

class picape extends carro 
{
    public $peso_carregado = 0;
    public $peso_maximo = 500;
    
    function define_cacamba($peso) {
        if ($peso > $this->peso_maximo)
            echo "Limite de peso $this->nome_modelo: $this->peso_maximo Kg";
        else
            $this->peso_carregado = $peso;
    }

    public function transportar($peso=0)
    {
        $this->define_cacamba($peso);
        echo '<br /> ' . $this->nome_modelo . ' esta carregando ' . $this->peso_carregado . ' kilos.'; 
    }
}

$veiculo = new picape;
$veiculo->nome('S10');
$veiculo->acelerar(350);
echo '<br/>';
$veiculo->transportar(700);

?>