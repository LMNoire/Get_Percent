<?php

?>

<!DOCTYPE html>

<html>
<head>
    <meta charset="utf-8"/>
    <title>Calculer un pourcentage</title>
    <!--CSS stylesheet link-->
    <link href="index.css" rel="Stylesheet"/>
</head>

<body>
    
<form method="post" action="../C/#.action.php" name="form" id="form1">
  <div class="title">Convertir un pourcentage en nombre</div>

  <div class="input-container ic1">
    <input name="name" class="input" type="text" placeholder=" " size=3/>
    <label for="name" class="placeholder">% d'un total de</label>
  </div>

  <div class="input-container ic2">
    <input name="firstname" class="input" type="text" placeholder=" " size=3/>
    <label for="firstname" class="placeholder">= quel nombre ?</label>
  </div>

  <button type="text" class="submit">Calculer</button>
</div>
</form>

<form method="post" action="../C/#.action.php" name="form" id="form1">
  <div class="title">Convertir un nombre en pourcentage</div>

  <div class="input-container ic1">
    <input name="name" class="input" type="text" placeholder=" " size=3/>
    <label for="name" class="placeholder">sur un total de</label>
  </div>

  <div class="input-container ic2">
    <input name="firstname" class="input" type="text" placeholder=" " size=3/>
    <label for="firstname" class="placeholder">= quel pourcentage ?</label>
  </div>

  <button type="text" class="submit">Calculer</button>
</div>
</form>

</body>
</html>