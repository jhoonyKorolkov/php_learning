<?php
// Очистка имени
if (isset($_POST['clear'])) {
  setcookie('name', '', time() - 3600, '/');
  header('Location: cookies.php');
  exit();
}

// Сохранение имени
if (isset($_POST['name'])) {
  setcookie('name', htmlspecialchars($_POST['name']), time() + 3600, '/');
  header('Location: cookies.php');
  exit();
}

$name = $_COOKIE['name'] ?? null;
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Куки</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
  <main>
    <div class="container">
      <?php if ($name): ?>
        <h1 class="display-1 mt-5">Привет, <?= $name ?>!</h1>
        <form method="post">
          <button type="submit" name="clear" class="btn btn-danger">Очистить</button>
        </form>
      <?php else: ?>
        <h1 class="display-1 mt-5">Как тебя зовут?</h1>
        <form method="post">
          <div class="mb-3">
            <label for="name" class="form-label">Ваше имя</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Иван" required>
          </div>
          <button type="submit" class="btn btn-primary">Сказать</button>
        </form>
      <?php endif; ?>
    </div>
  </main>
</body>

</html>