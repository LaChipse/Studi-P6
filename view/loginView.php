<!DOCTYPE html>
<html style="height: 100%">

<?php
  require('head.php');
?>
<body style="height: 100vh">

<?php
  require('../view/header.php');
?>

  <main class="container form-signin h-75 w-50 mt-5" style="margin: auto">
    <form action="../controller/connexion.php" method="post" name="login">
      <h1 class="mb-5 fw-normal text-center">Connexion</h1>

      <div class="form-floating">
        <input type="email" class="form-control mb-4" id="floatingInput" name="mail" placeholder="name@example.com" required>
        <label for="floatingInput">Email address</label>
      </div>
      <div class="form-floating">
        <input type="password" class="form-control mb-4" id="floatingPassword" name="password" placeholder="Password" required>
        <label for="floatingPassword">Password</label>
      </div>

      <div>
        <button class="btn btn-primary mb-3" type="submit">Sign in</button>
      </div>

      <?php if (isset($_SESSION['user']) &&  $_SESSION['user'] == FALSE) { ?>
        <p class="errorMessage" style="color: red; font-size: 18px"><?php echo "Le nom d'utilisateur ou le mot de passe est incorrect."; ?></p>
      <?php } ?>

    </form>
  </main>
<?php
  require('../view/footer.php');
?>

</body>

</html>