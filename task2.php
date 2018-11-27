<?php
class Worker
{
	private $name;
	private $age;
	private $salary;
	public function setName($name)
	{
		$this->name = $name;
	}

	public function getNAme()
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

	public function setSalary($salary)
	{
		$this->salary = $salary;
	}
	public function getSalary()
	{
		return $this->salary;
	}
}

$Ivan = new Worker;
$Vasya = new Worker;

$Ivan->setName("Ivan");
$Ivan->getName();
$Ivan->setAge(25);
$Ivan->setSalary(1000);

$Vasya->setName("Vasya");
$Vasya->getName();
$Vasya->setAge(26);
$Vasya->setSalary(2000);

$summages = $Ivan->getAge() + $Vasya->getAge();
$summsalary = $Ivan->getSalary() + $Vasya->getSalary();

echo "Сумма зарплат Ивана и Васи:" . " $summsalary" . ";" . "<br>";
echo "Сумма возрастов Ивана и Васи:" . " $summages" . ";" . "<br>";

//var_dump($Ivan);
//var_dump($Vasya);