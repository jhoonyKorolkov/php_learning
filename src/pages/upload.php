<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_FILES['files'])) {
  $uploadDir = '../uploads/';
  $files = $_FILES['files'];

  if (!is_dir($uploadDir)) {
    mkdir($uploadDir, 0777, true);
  }

  foreach ($files['name'] as $index => $originalName) {
    if ($files['error'][$index] !== UPLOAD_ERR_OK) {
      echo "Ошибка загрузки файла: $originalName, код ошибки: " . $files['error'][$index] . "<br>";
      continue;
    }

    $allowedTypes = ['image/jpeg', 'image/png'];
    if (!in_array($files['type'][$index], $allowedTypes)) {
      echo "Недопустимый тип файла: $originalName<br>";
      continue;
    }

    $maxFileSize = 1 * 1024 * 1024; // 1 МБ
    if ($files['size'][$index] > $maxFileSize) {
      echo "Файл превышает максимальный размер $maxFileSize: $originalName<br>";
      continue;
    }

    $fileName = uniqid() . '-' . basename($originalName);
    $uploadFile = $uploadDir . $fileName;

    if (move_uploaded_file($files['tmp_name'][$index], $uploadFile)) {
      echo "Файл успешно загружен: $fileName<br>";
    } else {
      echo "Не удалось загрузить файл: $originalName<br>";
    }
  }
} else {
  echo "Форма ещё не была отправлена. Загрузите файлы через форму.";
}
?>

<form action="upload.php" method="post" enctype="multipart/form-data">
  <label for="files">Выберите файлы:</label>
  <input type="file" name="files[]" id="files" multiple>
  <button type="submit">Загрузить</button>
</form>