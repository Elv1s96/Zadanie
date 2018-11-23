<?php
    class User

    {
        protected $name;
        protected $age;

        public function setName($name)
        {

            $this->name = $name;

        }
        public function getName()
        {

            return $this->name;

        }
        public function setAge($age)
        {

            $this->age = $age;

        }
        public function getAge()
        {

            return $this->age;

        }
      
    }
    class Worker extends User
    {

        private $salary;
        public function getSalary()
        {

            return $this->salary;

        }
        public function setSalary($salary)
        {

            $this->salary = $salary;

        }


    }
    class Student extends User
    {

        private $stipend;
        private $class;
        public function getStipend()
        {

            return $this->stipend;

        }

        public function setStipend($stipend)
        {

            $this->stipend = $stipend;

        }

        public function getClass()
        {

            return $this->class;

        }

        public function setClass($class)
        {

            $this->class = $class;

        }

    }
    //Почему не видит класс task3\Worker?
    class Driver extends task3\Worker
    {
        
        private $drivexp;
        private $drivecat;

        public function __construct($drivexp,$drivecat)
        {

            $this->drivexp = $drivexp;
            $this->drivecat = $drivecat;

        }

        
    }
$Ivan = new Worker;
$Ivan->setName("Ivan");
$Ivan->setAge(25);
$Ivan->setSalary(1000);

$Vasya = new Worker;
$Vasya->setName("Vasya");
$Vasya->setAge(26);
$Vasya->setSalary(2000);

$SummSalary = $Ivan->getSalary() + $Vasya->getSalary();
echo "Сумма Зарплат Ивана и Васи: " . "$SummSalary";
   

   

?>