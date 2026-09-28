<?php
class Employee {
    public $name;
    private $salary;
    protected $password;

    public function __construct($name){
        $this->name = $name;
        $this->salary = mt_rand(3000, 12000);
    }

    public function getSalary(){
        return $this->salary;
    }

    public function getPassword($password){
        return $this->password;
    }
    
}   

$employee = new Employee("Marta");
echo $employee->name;
//echo $employee->password; //błąd wyświetla
echo $employee->getSalary();


//4.

//ponieważ private ma za cel zablokowanie dostępność danych i musisz napisac getta żeby sie wyświetlił

class Human{
    public $name;
    public $gender;
    private $age;
    protected $nationality;

    public function __construct($name,$gender,$nationality){
        $this->name = $name;
        $this->gender = $gender;
        $this->nationality = $nationality;
        $this->age = 0;
    }


    public function getAge(){
        return $this->age;
    }
}

$human = new Human("Marta", "Facet","Niemiec");
echo $human->name;
echo $human->gender;
echo $human->nationality;
echo $human->getAge();
