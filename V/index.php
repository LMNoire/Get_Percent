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
    
<form method="post" action="../C/form1.action.php" name="form1" id="form1">
  <div class="title">Convertir un pourcentage en nombre</div>

  <div class="firstInput">
    <input name="first" class="input" type="text" placeholder=" " size=3/>
    <label for="first" class="placeholder">% d'un total de</label>
  </div>

  <div class="secondInput">
    <input name="second" class="input" type="text" placeholder=" " size=3/>
    <label for="second" class="placeholder">= quel nombre ?</label>
  </div>

  <button type="text" class="submit">Calculer</button>
</div>
</form>

<form method="post" action="../C/form2.action.php" name="form2" id="form2">
  <div class="title">Convertir un nombre en pourcentage</div>

  <div class="thirdInput">
    <input name="third" class="input" type="text" placeholder=" " size=3/>
    <label for="third" class="placeholder">sur un total de</label>
  </div>

  <div class="fourthInput">
    <input name="fourth" class="input" type="text" placeholder=" " size=3/>
    <label for="fourth" class="placeholder">= quel pourcentage ?</label>
  </div>

  <button type="text" class="submit">Calculer</button>
</div>
</form>

</body>
</html>