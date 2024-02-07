<?php

/*Start session and retrieve $_SESSION data from form2.action.php*/
session_start();

$num2 = $_SESSION['num2'];
$int2 = $_SESSION['int2'];
$result2 = $_SESSION['result2'];
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
    <title>Résultats</title>
    <!--CSS stylesheet link-->
    <link href="results.css" rel="Stylesheet"/>
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
<div class="navbar">
	<!-- <a href="#"><img class="english" src="assets/english.png" alt="English flag"></a> -->
    <!--Dark/Day mode button-->
    <button onclick="toggleDarkMode()" class="darkMode" id="darkModeBtn">Dark mode</button>
	<!-- <a href="index.php"><img class="french" src="assets/french.png" alt="French flag"></a> -->
</div>
</div>

<script>
    // Function to toggle dark mode//
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

<div class="topcontainer">
    <!--Display the results-->
    <?php echo "La valeur de ".$num2." sur un total de ".$int2." est égal à <strong>&nbsp" .$result2. "</strong>%"?>

</div>

<div class="botcontainer">
    <!--Link to index-->
    <a href="http://pourcentage.online">Retour à l'accueil</a>
</div>

</body>