// 1. Создать класс "Студент", у которого есть поля "имя", "фамилия", "возраст", "курс".

1.1 Конструктор класса, который принимает значения для всех полей и устанавливает их соответствующим образом.
1.2 Методы для получения значений полей (геттеры)
1.3 Методы для установки значений полей (сеттеры)
1.4 Методы для вывода информации о студенте
1.5 Вывести всю информацию


class Student {

    private $name;
    private $secondName;
    private $age;
    private $course;


    public function __construct($name, $secondName, $age, $course) {
        $this->name = $name;
        $this->secondName = $secondName;
        $this->age = $age;
        $this->course = $course;
    }

    public function getName() {
        return $this->name;
    }

    public function getSecondName() {
        return $this->secondName;
    }

    public function getAge() {
        return $this->age;
    }

    public function getCourse() {
        return $this->course;
    }

    public function setName($name) {
        $this->name = $name;
    }

    public function setSecondName($secondName) {
        $this->secondName = $secondName;
    }

    public function setAge($age) {
        $this->age = $age;
    }

    public function setCourse($course) {
        $this->course = $course;
    }
}

$student = new Student('Tatiana', 'Beliaeva', '30', 'WD-10onl');

echo $student->getName() . "\n";
echo $student->getSecondName() . "\n";
echo $student->getAge() . "\n";
echo $student->getCourse() . "\n";




// 2. Создать класс "Автомобиль", у которого есть поля "марка", "модель", "цвет", "год выпуска"

2.1 Конструктор класса, который принимает значения для всех полей и устанавливает их соответствующим образом.
2.2 Методы для получения значений полей (геттеры)
2.3 Методы для установки значений полей (сеттеры)
2.4 Методы для вывода информации об автомобиле


class Car {

    private $brand;
    private $model;
    private $color;
    private $year;


    public function __construct($brand, $model, $color, $year) {
        $this->brand = $brand;
        $this->model = $model;
        $this->color = $color;
        $this->year = $year;
    }

    public function getBrand() {
        return $this->brand;
    }

    public function getModel() {
        return $this->model;
    }

    public function getColor() {
        return $this->color;
    }

    public function getYear() {
        return $this->year;
    }

    public function setBrand($brand) {
        $this->brand = $brand;
    }

    public function setModel($model) {
        $this->model = $model;
    }

    public function setColor($color) {
        $this->color = $color;
    }

    public function setYear($year) {
        $this->year = $year;
    }
}

$car1 = new Car('BMW', 'M8', 'black', '2022');

//echo $car1->getBrand() . "\n";
//echo $car1->getModel() . "\n";
//echo $car1->getColor() . "\n";
//echo $car1->getYear() . "\n";




// 3. Создать класс "Круг", у которого есть поле "радиус".

3.1 Конструктор класса, который принимает значение радиуса и устанавливает его соответствующим образом.
3.4 Метод для вычисления площади круга - calculateArea()


class Circle {

    public $radius;

    public function __construct($radius)
    {
        $this->radius = $radius;
    }

    public function calculateArea()
    {
        return pow($this->radius, 2) * 3.14;
    }
}

$circle = new Circle('5');

echo $circle->calculateArea();




// 4. Создать класс "Человек", у которого есть поля "имя", "возраст", "пол".
Написать методы для работы с этими полями:

4.1 Конструктор класса, который принимает значения для всех полей и устанавливает их соответствующим образом.
4.2 Метод для проверки, является ли человек совершеннолетним - isAdult(), который возвращает true, если возраст человека больше или равен 18, и false в противном случае.


class Person {

    private $name;
    private $age;
    private $gender;


    public function __construct($name, $age, $gender) {
        $this->name = $name;
        $this->age = $age;
        $this->gender = $gender;
    }

    public function getName() {
        return $this->name;
    }

    public function getAge() {
        return $this->age;
    }

    public function isAdult() {
        if ($this->age >= 18) {
            return 'he/she is Adult';
        } else {
            return 'he/she is Underage';
        }
    }

    public function getGender() {
        return $this->gender;
    }
}

$person = new Person('Ivan', '15', 'man');

echo $person->getName() . "\n";
echo "({$person->getGender()})" . "\n";
echo $person->getAge() . "\n" . "- ";
echo $person->isAdult() . "\n";
