<?php

class Employee
{
    public string $name;
    public int $age;
    public int $salary;

    public function getName(): string
    {
        return $this->name;
    }

    public function getAge(): int
    {
        return $this->age;
    }

    public function getSalary(): int
    {
        return $this->salary;
    }

    public function checkAge(): bool
    {
        return $this->age > 18;
    }
}

$worker1 = new Employee();
$worker1->name = 'Piter';
$worker1->age = 20;
$worker1->salary = 1000;

$worker2 = new Employee();
$worker2->name = 'Bob';
$worker2->age = 17;
$worker2->salary = 1000;

echo $worker1->getName() . '<br>';
echo $worker1->getAge() . '<br>';
echo $worker1->getSalary() . '<br>';
echo ($worker1->checkAge() ? 'true' : 'false') . '<br>';

echo $worker2->getName() . '<br>';
echo $worker2->getAge() . '<br>';
echo $worker2->getSalary() . '<br>';
echo ($worker2->checkAge() ? 'true' : 'false') . '<br>';

$totalSalary = $worker1->getSalary() + $worker2->getSalary();
echo "Сумма зарплат: $totalSalary" . '<br>';



