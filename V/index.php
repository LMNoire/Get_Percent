<?php
?>

<!DOCTYPE html>
<html>
<!--HTML header start-->
<head>
    <meta charset="utf-8"/>
	<!--Title-->
    <title>Calculer un pourcentage</title>
    <!--CSS stylesheet link-->
    <link href="index.css" rel="Stylesheet"/>
</head>

<!--HTML body start-->
<body>

<!--Convert a percentage into a number-->
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
</form><br>

<!--Convert a number into a percentage-->
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
</form><br>

<!--Increase percentage-->
<form method="post" action="../C/form3.action.php" name="form3" id="form3">
  <div class="title">Augmentation</div>

  <div class="fifthInput">
    <input name="fifth" class="input" type="text" placeholder=" " size=3/>
    <label for="fifth" class="placeholder">plus</label>
  </div>

  <div class="sixthInput">
    <input name="sixth" class="input" type="text" placeholder=" " size=3/>
    <label for="sixth" class="placeholder">% = quel nombre ?</label>
  </div>

  <button type="text" class="submit">Calculer</button>
</div>
</form><br>

<!--Decrease percentage-->
<form method="post" action="../C/form4.action.php" name="form4" id="form4">
  <div class="title">Réduction</div>

  <div class="sevenInput">
    <input name="seven" class="input" type="text" placeholder=" " size=3/>
    <label for="seven" class="placeholder">moins</label>
  </div>

  <div class="eightInput">
    <input name="eight" class="input" type="text" placeholder=" " size=3/>
    <label for="eight" class="placeholder">% = quel nombre ?</label>
  </div>

  <button type="text" class="submit">Calculer</button>
</div>
</form><br>

<!--Variations-->
<form method="post" action="../C/form5.action.php" name="form5" id="form5">
  <div class="title">Variation</div>

  <div class="nineInput">
 	<label for="nine" class="placeholder">Le taux d'évolution entre </label>
    <input name="nine" class="input" type="text" placeholder=" " size=3/> et
  </div>

  <div class="tenInput">
    <input name="ten" class="input" type="text" placeholder=" " size=3/>
    <label for="ten" class="placeholder"> = quel pourcentage ?</label>
  </div>

  <button type="text" class="submit">Calculer</button>
</div>
</form>

</body>
</html>