<?php 

if(isset($_POST['salary'])){
    $salary = $_POST['salary'];
    $hra =0.10; 
    $da = 0.90;
    $total = 0;
    if($salary < 1500){
            $total = $salary;
            $thra = $total * $hra;
            $tda = $total * $da;
            $hra = $total * $hra;
            $da = $total * $da;
            $total  += $total +$thra +$tda;
    }else if($salary >= 1500){
        $total = $salary;
        $thra = 500;
        $tda = $total * 0.98;
        $hra = 500;
        $da = $total * 0.98;
        $total  += $total + $thra + $tda;
    }

    echo "TOTAL SALARY INCLUDING EVERYTHING IS ₹".$total . "<br>";
    echo "HRA ₹".$hra. "<br>";
    echo "DA ₹".$da. "<br>";


   
}

?>