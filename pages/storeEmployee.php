<style>
  div {
    padding: 20px;
    border: 2px dashed #e3e3e3;
    width: 400px;
    margin: 50px auto;
  }

  input,
  button,
  select {
    display: block;
    width: 100%;
  }
</style>

</table>

<div>
  <form action="" method="post">
    <p>Имя сотрудника</p>
    <input type="text" name="name">
    <p>Рабочий стаж (в годах)</p>
    <input type="number" name="exp">
    <p>Отдел</p>
    <select name="work">
      <option value="Разработка">Разработка</option>
      <option value="Маркетинг">Маркетинг</option>
      <option value="Отдел продаж">Отдел продаж</option>
    </select> <br>
    <button type="submit">Сохранить</button>
  </form>
</div>

<?php
// Получение данных из формы
$name = trim($_POST['name'] ?? '');
$exp = trim($_POST['exp'] ?? '');
$work = trim($_POST['work'] ?? '');

// Проверка данных
if (empty($name) || empty($exp) || empty($work)) {
  echo 'Incorrect query parameters';
  exit;
}

// Экранирование данных
$name = htmlspecialchars($name, ENT_QUOTES, 'UTF-8');
$exp = htmlspecialchars($exp, ENT_QUOTES, 'UTF-8');
$work = htmlspecialchars($work, ENT_QUOTES, 'UTF-8');

// Формат данных для записи
$content = "Name: $name\nExp: $exp\nWork: $work\n---\n";

// Путь к файлу
$filePath = "staff.list";

// Запись данных в файл
if (file_put_contents($filePath, $content, FILE_APPEND | LOCK_EX) === false) {
  echo 'Failed to save data. Please try again.';
  exit;
}

echo 'Employee data saved successfully!';
?>