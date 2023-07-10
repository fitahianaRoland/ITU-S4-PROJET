<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcom to my site</title>
    <link rel="stylesheet"  href="<?php echo base_url('assets/css/inscription.css')?>">
   </head>
<body>
  <div class="wrapper">
    <h2>Login</h2>
    <form action="<?php echo base_url('Traitement/login'); ?>">
      <div class="input-box">
        <input type="text" name="email" placeholder="Enter your email" required>
      </div>
      <div class="input-box">
        <input type="password" name="mot_de_pass" placeholder="Enter your password" required>
      </div>
      <div class="input-box button">
        <input type="Submit" value="Log in">
      </div>
      <div class="text">
        <h3>want to subscribe? <a href="<?php echo base_url('Lien/link/inscription')?>">s'inscrire </a></h3>
      </div>
    </form>
  </div>

</body>
</html>
