<body>


<head>
    <h1>Calculatrice</h1>
</head>

<form action="index.php" method="post">

<label for="num1"></label>
<input type="numero" id="num1" name="num1" placeholder="numéro 1">

<label for="ope-select">Operation:</label>

<select name="operation" id="ope-select">
  <option value="">--choose an option--</option>
  <option value="addition" name="add">+</option>
  <option value="soustraction" name="soustraction">-</option>
  <option value="division" name="division">/</option>
  <option value="multiplication" name="multi">*</option>

</select>


<label for="num2"></label>
<input type="numero" id="num2" name="num2" placeholder="numéro 2">

<button type="submit">=</button>
</form>
</body>





<?php


class operation {

        private $addition;
        private $soustraction;
        private $division;
        private $multiplication;


    public function addition($num1,$num2){
        $resAd=$num1+$num2;
        printf($num1 ." + " .$num2." = " .$resAd);


    }

    public function soustraction($num1,$num2){
        $resSous= $num1-$num2;
        printf($num1 ." - " .$num2." = " .$resSous);
    }

    public function division($num1,$num2){

        if($num2 == 0){
            printf("impossible de diviser par 0");
        }else{
            printf($num1 ." / " .$num2." = " .$num1/$num2);
        }

}

    public function multiplication($num1,$num2){
        $resMulti=$num1*$num2;
        printf($num1 ." * " .$num2." = " .$resMulti);
    }   
}


$operation=$_POST["operation"];

$op= NEW operation();
$num1=$_POST["num1"];
$num2=$_POST["num2"];


if($operation == "addition"){
    $op->addition($num1,$num2);
}
elseif($operation == "soustraction"){
    $op->soustraction($num1,$num2);
}
elseif($operation == "division"){
    $op->division($num1,$num2);
}
elseif($operation == "multiplication"){
    $op->multiplication($num1,$num2);
}
   





/*
$num1=$_POST["num1"];
$num2=$_POST["num2"];

 print_r($_POST);

function setPair(int $num1,$num2){
    while($num1<=$num2){

        if($num1%2==0){ // pair
            printf($num1." ");
            
           }
    $num1++;
    
    }
}

setPair($num1,$num2);
*/

?>
