<?php
    include('partials/header_navbar.php');
  ?>
<main>

<section class="banner-section d-flex justify-content-center align-items-end">
    <div class="section-overlay"></div>

    <div class="container">
        <div class="row">
  <main>
      <h1>Registrácia</h1>
        <form action="inc/register/insert.php" method="post">
            <input type="text" name="user_name" placeholder="Vaše meno" require><br>
            <input type="email" name="user_email" placeholder="Váš email"><br>
            <input type="password" name="user_password" placeholder="Vaše heslo"><br>
            <input type="submit" value="Zaregistrovať" name="add_user">
        </form><br>
        <p>Už máte účet? <a href="login.php">Prihláste sa</a></p>
        </div>
      </div>
    </section>
</section>
</div>
      </div>
  </main>
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