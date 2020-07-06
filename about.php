<?php
include "header.php";
include "headwhite.php";
?>

<div class="text-light"id="bodyabout">
  <div class="d-flex">

  <div class="">
    <img src="img/article.jpg" alt="">
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
  </div>

<div class="d-flex flex-column">


  <div class="form-group">

    <form id = "mailform" class="" action="" method="post">
    <label for="">Email</label>
    <input class="" type = "email" >
    <textarea rows="4" cols="50" name="comment" form="mailform">
Entrer votre texte ...</textarea>
    <button type="submit" class="btn btn-primary">Envoyer</button>
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
