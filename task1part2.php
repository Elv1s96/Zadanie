<?php
class Worker
{
    public $name;
    public $age;
    public $salary;
    private function checkAge($age)
    {
        echo ($this->age<=100 && $this->age>=1) ?
            $this->age :  "Не подходящий возраст";
    }

    public function setAge($age)
    {
        $this->age = $age;
        $this->checkAge($this->age);
    }
}

$Ivan = new Worker;
$Ivan->setAge(100);
