<?php

class Employee
{
    public string $name;
    public int $age;
    public int $salary;
}

$worker1 = new Employee();
$worker1->name = 'john';
$worker1->age = 25;
$worker1->salary = 1000;

$worker2 = new Employee();
$worker2->name = 'eric';
$worker2->age = 26;
$worker2->salary = 2000;

echo $worker1->salary + $worker2->salary . '<br>';
echo $worker1->age + $worker2->age;

