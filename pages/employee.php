<?php

$name = $_GET['name'];
$experience = $_GET['experience'];
$position = $_GET['position'];

if (empty($name) || empty($experience) || empty($position)) {
  echo 'Incorrect query parameters';
  exit;
}

?>

<div>
  <h3><?php echo $name ?></h3>
  <p>Рабочий стаж: <?php echo $experience ?> года</p>
  <p><?php echo $position ?></p>
</div>

<style>
  div {
    padding: 20px;
    border: 2px dashed #e3e3e3;
    width: 400px;
    margin: 50px auto;
  }
</style>