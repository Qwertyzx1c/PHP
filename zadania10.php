<?php

class Prostokat{
    public $a;
    public $b;

    public function area($a, $b){
        return $a * $b;
    }
    public function perimiter($a, $b){
        echo "<br>";
        return ($a + $b) * 2;
    }
}
$prostokat = new Prostokat();
echo $prostokat->area(12, 20);
echo $prostokat->area(12, 20);






class Person {
    public $name;
    public $age;

    public function __construct($name, $age) {
        $this->name = $name;
        $this->age = $age;
        echo "Tworzę człowieka $name, i lat $age\n";
        echo "<br>";
    }
    

    public function greet($name, $age) {
        echo "<br>";
        return "Cześć $name, lat $age";
        
    }
    public function setAge($age) {
        echo "<br>";
        return "$age";
        
    }
    public function isAdult($age) {
        echo "<br>";
        if ($age >= 18){
            return "True";
        }
        elseif ($age < 18){
            return "False";
        }
    }
    public static function square($x){
        echo "<br>";
        return $x * $x;
    }
}

$person = new Person("Paweł", 213777777777);
echo $person->name;
echo $person->greet("Jamnik", 1234567890);
echo $person->setAge(mt_rand(1, 100));
echo $person->isAdult(mt_rand(1, 100));
echo Person::square(mt_rand(1, 100));
echo "<br>";
echo "<br>";

class Circle {
    public function area($a , $b){
        return $a * $b ** 2;
        echo "<br>";
    }

}

$calc = new Circle();
echo $calc->area(3.14, 7);
