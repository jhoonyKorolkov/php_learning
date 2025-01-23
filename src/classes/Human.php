<?php

class Human
{
  public $name;
  public $age;
  public $job;
  public $about;
  public $languages;

  public function setHuman($name, $age, $job, $about, $languages): void
  {
    $this->name = $name;
    $this->age = $age;
    $this->job = $job;
    $this->about = $about;
    $this->languages = $languages;
  }


  public function show(): string
  {
    $languages = implode(', ', $this->languages);
    return "
          <div style='font-family: Arial, sans-serif; border: 1px solid #ccc; padding: 10px; margin: 10px;'>
              <h2>Информация о человеке</h2>
              <p><strong>Имя:</strong> {$this->name}</p>
              <p><strong>Возраст:</strong> {$this->age}</p>
              <p><strong>Профессия:</strong> {$this->job}</p>
              <p><strong>Характеристика:</strong> {$this->about}</p>
              <p><strong>Языки:</strong> {$languages}</p>
          </div>
      ";
  }

  public function info(): array
  {
    # code...
    return [
      'name' => $this->name,
      'age' => $this->age,
      'job' => $this->job,
      'about' => $this->about,
      'languages' => $this->languages
    ];
  }
}
