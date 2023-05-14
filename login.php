
<?php
    include('partials/header_navbar.php');
  ?>
 <main>

<section class="banner-section d-flex justify-content-center align-items-end">
    <div class="section-overlay"></div>

    <div class="container">
        <div class="row">
<main> 
          <h1>Prihlásenie</h1>
          <form action="inc/login/login.php" method="post">
            <input type="email" name="user_email" placeholder="Váš email"><br>
            <input type="password" name="user_password" placeholder="Vaše heslo"><br>
            <input type="submit" value="Prihlásiť sa" name="log_user">
          </form>
          <br>
          <p>Nemáte účet? <a href="register.php">Zaregistrujte sa</a></p>
        </div>
    </div>
    </section>
    </div>
    </div>
  </main>
  </section>

  <?php
    include('partials/footer.php');
  ?>
   <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/jquery.backstretch.min.js"></script>
        <script src="js/counter.js"></script>
        <script src="js/countdown.js"></script>
        <script src="js/init.js"></script>
        <script src="js/modernizr.js"></script>
        <script src="js/animated-headline.js"></script>
        <script src="js/custom.js"></script>