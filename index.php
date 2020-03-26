<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Web 3</title>
    <style media="screen">
        #form {
            max-width: 450px;
            margin: 2em auto;
        }
    </style>
</head>
<body>
    <form id="form" method="post" action="send.php">
        <!-- Имя -->
        <div class="form-group">
          <label for="nameInput">Имя</label>
          <input type="text" class="form-control" name="name" id="nameInput" placeholder="Ваше имя">
        </div>
        <!-- Email -->
      <div class="form-group">
        <label for="emailInput">Email</label>
        <input type="email" class="form-control" name="email" id="emailInput" placeholder="name@example.com">
      </div>
      <!-- Год рождения -->
      <div class="form-group">
        <label for="yearInput">Год рождения</label>
        <select class="form-control" name="age" id="yearInput">
            <?php
                for ($i = 2013; $i >= 1950; $i--) {
                    echo "<option value='$i'>".$i."</option>";
                }
            ?>
        </select>
      </div>
      <!-- Пол -->
        <label>Пол</label>
        <div class="form-group">
            <div class="custom-control custom-radio custom-control-inline">
              <input type="radio" id="maleRadio" name="sex" class="custom-control-input" value="male" checked>
              <label class="custom-control-label" for="maleRadio">Мужской</label>
            </div>
            <div class="custom-control custom-radio custom-control-inline">
              <input type="radio" id="femaleRadio" name="sex" class="custom-control-input" value="female">
              <label class="custom-control-label" for="femaleRadio">Женский</label>
            </div>
        </div>
      <!-- Количество конечностей -->
      <label>Количество конечностей</label>
      <div class="form-group">
          <div class="custom-control custom-radio custom-control-inline">
              <input type="radio" id="limb4" name="limb" class="custom-control-input" value="4" checked>
              <label class="custom-control-label" for="limb4">4</label>
            </div>
            <div class="custom-control custom-radio custom-control-inline">
              <input type="radio" id="limb6" name="limb" class="custom-control-input" value="6">
              <label class="custom-control-label" for="limb6">6</label>
            </div>
            <div class="custom-control custom-radio custom-control-inline">
              <input type="radio" id="limb8" name="limb" class="custom-control-input" value="8">
              <label class="custom-control-label" for="limb8">8</label>
            </div>
      </div>
      <!-- Сверхспособности -->
      <div class="form-group">
        <label for="superInput">Сверхспособности</label>
        <select multiple class="form-control" size="3" id="superInput" name="super[]">
          <option value="levit" selected>Левитация</option>
          <option value="teleport">Телепортация</option>
          <option value="walk">Хождение сквозь стены</option>
        </select>
      </div>
      <!-- Биография -->
      <div class="form-group">
        <label for="exampleFormControlTextarea1">Биография</label>
        <textarea class="form-control" id="bioInput" name="bio" rows="3" placeholder="Напишите немного о себе"></textarea>
      </div>
      <!-- Чекбокс -->
      <div class="custom-control custom-checkbox mr-sm-2">
        <input type="checkbox" class="custom-control-input" id="checkbox" name="check" checked>
        <label class="custom-control-label" for="checkbox">С контрактом ознакомлен</label>
      </div>
      <!-- Кнопка -->
      <button type="submit" class="btn btn-primary mt-3">Отправить</button>
    </form>
</body>
</html>
