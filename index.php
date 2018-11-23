<?php
 class Worker

 {

     public $name;
     public $age;
     public $salary;
    
 }

    $Ivan = new Worker;
    $Ivan->name = "Ivan";

    $Vasya = new Worker;
    $Vasya->name = "Vasya";

    $summsalary = $Vasya->salary = 1000 + $Ivan->salary = 2000;
    $summages = $Vasya->age = 26 + $Ivan->age =25;
    
    echo "Сумма зарплат Ивана и Васи:" . " $summsalary" . ";" . "<br>";
    echo "Сумма возрастов Ивана и Васи:" . " $summages" . ";" . "<br>";
?>

