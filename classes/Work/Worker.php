<?php
namespace Classes\Work;

class Finder extends Worker
{
  static public function find($email): mixed
  {
    $worker = null;

    foreach (self::$workers as $key => $value) {
      if ($value['email'] === $email) {
        $worker = $value;
      }
    }

    if (!isset($worker)) {
      echo 'no worker';
      return false;
    }
    return $worker;
  }
}
class Worker
{
  static protected array $workers;

  static public function create(array $worker): void
  {
    self::validateWorker($worker);
    $dateNow = date("Y-m-d H:i:s");
    $worker['register_time'] = $dateNow;
    self::$workers[] = $worker;
  }

  static private function validateWorker(array $worker): bool
  {
    foreach ($worker as $value) {
      if (empty($value)) {
        echo 'Поле пустое';
        return false;
      }
    }
    return true;
  }

  static public function all(): array
  {
    $allWorkers['workers_count'] = count(self::$workers);
    $allWorkers['all_workes'] = self::$workers;
    return $allWorkers;
  }

  static public function save(): void
  {
    $content = ''; // Начальное содержимое файла

    // Перебираем всех работников
    foreach (self::$workers as $worker) {
      // Формируем строку для каждого работника
      $content .= "Name: " . ($worker['name'] ?? 'N/A') . "\n";
      $content .= "Email: " . ($worker['email'] ?? 'N/A') . "\n";
      $content .= "Age: " . ($worker['age'] ?? 'N/A') . "\n";
      $content .= "Profession: " . ($worker['profession'] ?? 'N/A') . "\n";
      $content .= "Registered At: " . ($worker['register_time'] ?? 'N/A') . "\n";
      $content .= "-----------------------------------------------------------------------------------------------\n";
    }

    $filePath = "workers.txt"; // Путь к файлу

    // Сохраняем данные в файл
    if (file_put_contents($filePath, $content, LOCK_EX) === false) {
      echo 'Failed to save data. Please try again.';
      exit;
    }

    echo "Employee data saved successfully!\n";
  }

}