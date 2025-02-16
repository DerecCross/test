<?php

class User
{
    public string $name;
    public int $age;

    // Метод для изменения имени юзера:
    public function setAge($age)
    {
        if ($age > 17) {
            $this->age = 0;
        } else {
            $this->age = $age;
        }
    }
}

$user = new User;
$user->name = 'john';
$user->age = 25;

echo $user->age . '<br>';

$user->setAge(17);
echo $user->age . '<br>';
