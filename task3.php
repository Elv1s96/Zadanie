<?php
namespace task3;

    class Worker

    {
        private $name;
        private $salary;
        public $check;

        public function __construct($name,$salary)
        {
            $this->name = $name;
            $this->salary = $salary;
        }

        public function __set($age,$value)
        {
            if($age =="age"){
                $b = $this->salary;
                $a = $value * $b;
                echo "Произведение возраста и зарплаты; " . "$a";
            }
            else{
                echo "Такого поля не существует";
            }
          //$age == "age" ?  $value : "Такого поля нет";                  
        }

        public function getName()
        {
            return $this->name;
        }

        public function getSalary()
        {
            return $this->salary;
        }
    }
    $Dima = new Worker("Dima",1000);
    $Dima->age = 5;

   
   
   
  
    


?>