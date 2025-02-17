<?php
namespace Classes\Tearch;
class Lesson
{
  public string $title;
  public string $description;
  public string $start; // Дата лучше как строка (можно использовать DateTime для работы с датой)
  public int $time; // Время в минутах
  public string $work; // Описание практической работы
  public string $teacher; // Имя преподавателя

  // Конструктор класса
  public function __construct(string $title, string $description, string $start, int $time, string $work, string $teacher)
  {
    $this->title = $title;
    $this->description = $description;
    $this->start = $start;
    $this->time = $time;
    $this->work = $work;
    $this->teacher = $teacher;
  }

  // Метод для перевода минут в часы
  public function hours(): float
  {
    return $this->time / 60;
  }

  // Метод для получения информации о уроке
  public function info(): array
  {
    return [
      'title' => $this->title,
      'description' => $this->description,
      'start' => $this->start,
      'time' => $this->hours(), // Используем метод hours() для получения времени в часах
      'work' => $this->work,
      'teacher' => $this->teacher,
    ];
  }

  // Метод для обновления даты начала урока
  public function updateStart(string $date): void
  {
    $this->start = $date;
  }
}