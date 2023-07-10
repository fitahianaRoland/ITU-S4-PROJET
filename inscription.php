<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Registration or Sign Up form in HTML CSS | CodingLab </title>
    <link rel="stylesheet"  href="<?php echo base_url('assets/css/inscription.css')?>">
   </head>
<body>
  <div class="wrapper">
    <h2>Inscription to my site</h2>
    <form action="<?php echo base_url('Traitement/inscription'); ?>">
      <div class="input-box">
        <input type="text" name="nom" placeholder="Enter your name" required>
      </div>
      <div class="input-box">
        <input type="text" name="email" placeholder="Enter your email" required>
      </div>
      <div class="input-box">
        <input type="password" name="mot_de_passe" placeholder="Create password" required>
      </div>
      <div class="input-box">
        <input type="password" name="mot_de_passe_confirmation" placeholder="Confirm password" required>
      </div>
      <div class="policy">
        <input type="checkbox">
        <h3>I accept all terms & condition</h3>
      </div>
      <div class="input-box button">
        <input type="Submit" value="Register Now">
      </div>
      <div class="text">
        <h3>Already have an account? <a href="<?php echo base_url('Lien/link/login')?>">Login </a></h3>
      </div>
    </form>
  </div>

</body>
</html>
