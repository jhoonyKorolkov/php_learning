<?php

class Lesson
{
  public string $title;
  public string $descroption;
  public int $start;
  public int $time;

  public string $work;

  public string $teacher;

  public function __construct(string $title, string $descroption, int $start, int $time, string $work, string $teacher)
  {
    $this->title = $title;
    $this->descroption = $descroption;
    $this->start = $start;
    $this->time = $time;
    $this->work = $work;
    $this->teacher = $teacher;
  }

  public function hours(): float|int
  {
    return $this->time / 60;
  }


}
