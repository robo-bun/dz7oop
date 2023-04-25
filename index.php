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
