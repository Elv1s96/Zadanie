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
           
            //Почему не работает return?
          echo $age == "age" ?  $value : 1;
          

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
  //$Dima->age = 25;
  //$value = $Dima->getSalary() * $Dima->agfdse = 25;
  //echo $value;
      //$a = $Dima->getName();
     // echo $a;
   $Dima->age = 43;
   
  
    


?>