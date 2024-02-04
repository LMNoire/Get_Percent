<?php
?>

<!DOCTYPE html>
<html>
<!--HTML header start-->
<head>
    <meta charset="utf-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!--SEO-->
	<meta name="keywords" content="percentage calculation, math, tutorial, calculation guide">
    <meta name="description" content="Calculate a percentage easily with our tools.">
	<!--Title-->
    <title>Calculer un pourcentage</title>
    <!--CSS stylesheet link-->
    <link href="index.css" rel="Stylesheet"/>
    <!--Fonts-->
	<link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
</head>

<!--HTML body start-->
<body>

<!--Title div-->
<div class="h1">
	<h1>CALCULER UN POURCENTAGE</h1>
	<!--Horizontal line-->
	<div class="horizontal-line"></div>
	<!--Langages-->
	<div class="header">
	<!-- <a href="#"><img class="english" src="assets/english.png" alt="English flag"></a>
	<a href="index.php"><img class="french" src="assets/french.png" alt="French flag"></a> -->
    <!--Dark/Day mode button-->
    <button onclick="toggleDarkMode()" class="darkMode" id="darkModeBtn">Dark mode</button>
	</div>
</div>
</div>

<script>
    //Function to toggle dark mode//
    function toggleDarkMode() {
        var element = document.body;
        var button = document.getElementById('darkModeBtn');
    //Toggle dark mode class on body//
        element.classList.toggle("dark-mode");
    //Toggle button text based on dark mode status//
        if (element.classList.contains("dark-mode")) {
            button.textContent = "Day mode";
    		//Save dark mode preference to localStorage//
        	localStorage.setItem('darkModeEnabled', 'true');
    } else {
            button.textContent = "Dark mode";
            //Remove dark mode preference from localStorage//
            localStorage.removeItem('darkModeEnabled');
        }
    }
    //Check if dark mode preference exists in localStorage and apply it//
    document.addEventListener('DOMContentLoaded', (event) => {
        const isDarkModeEnabled = localStorage.getItem('darkModeEnabled');
        const bodyElement = document.body;
        const darkModeButton = document.getElementById('darkModeBtn');
        if (isDarkModeEnabled === 'true') {
            bodyElement.classList.add('dark-mode');
            darkModeButton.textContent = 'Day mode';
        } else {
            bodyElement.classList.remove('dark-mode');
            darkModeButton.textContent = 'Dark mode';
        }
    });
</script>

<!--Wrap the two first div-->
<div class="topcontainer">
<!--Convert a percentage into a number-->
<div class="container1">
<form method="post" action="C/form1.action.php" name="form1" id="form1">
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
</form>
</div>

<!--Convert a number into a percentage-->
<div class="container2">
<form method="post" action="C/form2.action.php" name="form2" id="form2">
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
</form>
</div>
</div>

<!--Wrap the three other div-->
<div class="botcontainer">
<!--Increase percentage-->
<div class="container3">
<form method="post" action="C/form3.action.php" name="form3" id="form3">
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
</form>
</div>

<!--Decrease percentage-->
<div class="container4">
<form method="post" action="C/form4.action.php" name="form4" id="form4">
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
</form>
</div>

<!--Variations-->
<div class="container5">
<form method="post" action="C/form5.action.php" name="form5" id="form5">
  	<div class="title">Variation</div>

	<div class="nineInput">
		<label for="nine" class="placeholder">La variation entre </label>
		<input name="nine" class="input" type="text" placeholder=" " size=3/> et
	</div>

	<div class="tenInput">
		<input name="ten" class="input" type="text" placeholder=" " size=3/>
		<label for="ten" class="placeholder"> = quel pourcentage ?</label>
	</div>

	<button type="text" class="submit">Calculer</button>
</form>
</div>
</div>

</body>
</html>