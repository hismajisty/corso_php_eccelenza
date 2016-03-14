
<?php
//print "giovannniiii";
//
$variable=10;
//if($variable===10.0){
//    echo"qqqqq";
//
//
//}elseif(true){
//    echo"wwwww";
//}else {
//    echo"eeeee";
//}

//for($i=0; $i<10; $i++){
//    echo "riga ".$i."\n";
//}

$array= [44,22,46];

foreach($array as $chiave => $riga){
    echo $chiave." ".$riga."<br />";
}

echo $array[2];


function somma ($valore1, $valore2){
    return $valore1+$valore2;
}
echo somma(10,20);


class Animale{

    protected $nome = "";

    /**
     * @return mixed
     */
    public function getSpecie()
    {
        return $this->specie;
    }

    /**
     * @param mixed $specie
     */
    public function setSpecie($specie)
    {
        $this->specie = $specie;
    }

    /**
     * @return string
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * @param string $nome
     */
    public function setNome($nome)
    {
        $this->nome = $nome;
    }
    public $specie;
    public function presentazione(){
        return "io sono ".$this->getNome()."della razza".$this->getSpecie();
    }
}

//iewobfiwvgewb

$cane= new Animale();
$cane->setNome("pluto");
$cane->setSpecie("cane");
echo $cane->presentazione();

//$string2= $varaible/2;
//echo $varaible."sdsdds";