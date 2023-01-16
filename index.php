<?php 
  session_start();
  if(isset($_SESSION['unique_id'])){
    header("location: users.php");
  }
?>

<?php include_once "header.php"; ?>
<body>
  <div class="wrapper">
    <section class="form signup">
      <header>Мессенджер</header>
      <form action="#" method="POST" enctype="multipart/form-data" autocomplete="off">
        <div class="error-text"></div>
        <div class="name-details">
          <div class="field input">
            <label>Имя</label>
            <input type="text" name="Имя" placeholder="Введите имя" required>
          </div>
          <div class="field input">
            <label>Фамилия</label>
            <input type="text" name="Фамилия" placeholder="Введите фамилию" required>
          </div>
        </div>
        <div class="field input">
          <label>Почта</label>
          <input type="text" name="email" placeholder="Введите почту" required>
        </div>
        <div class="field input">
          <label>Пароль</label>
          <input type="password" name="password" placeholder="Введите пароль" required>
          <i class="fas fa-eye"></i>
        </div>
        <div class="field image">
          <label>Выберите аватар</label>
          <input type="file" name="image" accept="image/x-png,image/gif,image/jpeg,image/jpg" required>
        </div>
        <div class="field button">
          <input type="submit" name="submit" value="Зарегистрируйтесь">
        </div>
      </form>
      <div class="link">Уже зарегистрировались? <a href="login.php">Войдите</a></div>
    </section>
  </div>

  <script src="javascript/pass-show-hide.js"></script>
  <script src="javascript/signup.js"></script>

</body>
</html>
