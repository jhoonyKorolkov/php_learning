<a href="/">шапка</a>

<?php
require_once __DIR__ . "/vendor/autoload.php";

echo "sas";

use Classes\Work\Finder;
use Classes\Work\Worker;

use Classes\Tearch\Human;
use Classes\Tearch\Lesson;

use Classes\Geometry\Rectangle;

use Classes\Money\Student;
use Classes\Money\User;

//--------------------------------------------------------

// $human = new Human();

// $human->setHuman('yasha', '35', 'backend', 'loh', ['en', 'rus']);

// $html = $human->show();

// $arr = $human->info();

// echo ($html);

// print_r($arr);

//--------------------------------------------------------

//--------------------------------------------------------

// $lesson = new Lesson(
//   'Математика',
//   'Урок по алгебре',
//   '2025-01-30',
//   90, // 90 минут
//   'Решение задач по уравнениям',
//   'Иван Иванов'
// );

// // Получение информации об уроке
// print_r($lesson->info());

// // Обновление даты начала урока
// $lesson->updateStart('2025-02-01');

// // Проверка изменений
// print_r($lesson->info());

//--------------------------------------------------------

// Worker::create([
//     "name" => "Ivan Ivanov",
//     "email" => "ivan@localhost",
//     "age" => 27,
//     "profession" => "SEO",
// ]);

// Worker::create([
//     "name" => "Roman Romanov",
//     "email" => "roman@localhost",
//     "age" => 32,
//     "profession" => "Web-developer",
// ]);

// print_r(Worker::all());
// print_r(Finder::find("roman@localhost"));

// Worker::save();

//--------------------------------------------------------

// $rectangle = new Rectangle(100, 200);
// echo "Площадь прямоугольника: " . $rectangle->getArea() . PHP_EOL;

//--------------------------------------------------------

$student = new Student('loh', 9000);

$student->increaseRevenue(100);