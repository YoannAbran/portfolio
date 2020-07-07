<?php
include "header.php";
include "headwhite.php";
?>

<div class="bodyblack text-light">
  <div class="d-flex">

  <div class="container col-6">
    <img src="img/article.jpg" alt="">
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
  </div>

<div class="container d-flex flex-column justify-content-between col-6">


  <div class="container d-flex flex-column">
    <form id = "mailform" class="" action="" method="post">
    <div>
      <label for="">Email</label>
      <input class="" type = "email">
    </div>
    <div class="">
      <textarea rows="4" cols="50" name="comment" form="mailform">
        Entrer votre texte ...</textarea>
    </div>
  <div class="">
    <button type="submit" class="btn btn-primary">Envoyer</button>
  </div>

    </form>
  </div>
  <div class="">
    <p>Coordonnées</p>
  </div>
  </div>
  </div>
</div>


<?php
include "footerwhite.php";
include "footer.php";


 ?>
