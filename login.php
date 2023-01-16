<?php 
  session_start();
  if(isset($_SESSION['unique_id'])){
    header("location: users.php");
  }
?>

<?php include_once "header.php"; ?>
<body>
  <div class="wrapper">
    <section class="form login">
      <header>Мессенджер</header>
      <form action="#" method="POST" enctype="multipart/form-data" autocomplete="off">
        <div class="error-text"></div>
        <div class="field input">
          <label>Почта</label>
          <input type="text" name="Почта" placeholder="Введите почту" required>
        </div>
        <div class="field input">
          <label>Пароль</label>
          <input type="password" name="Пароль" placeholder="Введите пароль" required>
          <i class="fas fa-eye"></i>
        </div>
        <div class="field button">
          <input type="submit" name="submit" value="Войти">
        </div>
      </form>
      <div class="link">Нету аккаунта? <a href="index.php">Зарегистрируйтсь</a></div>
    </section>
  </div>
  
  <script src="javascript/pass-show-hide.js"></script>
  <script src="javascript/login.js"></script>

</body>
</html>
