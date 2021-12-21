<?php 
// DB Connection //
include('dbconnect.php');

// Declare variables //
$checkbox1 = null;
$color = null;
$bgcolor = null;

$sql = "SELECT * FROM myformcontrols";
$result = $conn->query($sql); 
$zeile = mysqli_fetch_array($result);

$checkbox1 = $zeile['checkbox1'];
$color = $zeile['color'];
$bgcolor = $zeile['bgcolor'];

// Close //
?>  
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="noindex, nofollow">
    <meta name="description" content="Responsive Layout Design">
    <meta Name="Autor" content="Mario Kabey">
    <title>Responsive Design Vorlage</title>
    <link rel="stylesheet" href="./css/style.css">
</head>
<body 
style="background-color: <?php if ($checkbox1 == 1) { echo $bgcolor; } else { echo "#eee"; } ?>; 
color: <?php if ($checkbox1 == 1) { echo $color; } else { echo "#222"; } ?>;">

    <!-- Header-bereich -->
    <header> 

        <nav class="navigation">

            <div class="logo-brand">
                <a href="index.php">Logo</a>
            </div>

            <div class="toggle-btn" onclick="this.classList.toggle('open-menu')">
                <span></span>
                <span></span>
                <span></span>
            </div>

            <ul class="link-container">
                <li class="link"><a href="index.php">Home</a></li>
                <li class="link active"><a href="about.php">About me</a></li>
                <li class="link"><a href="contact.php">Contact</a></li>

            </ul>
       
        </nav>

    </header>
    <!-- Header-bereich -->

    <!-- section main -->
    <section class="main">

        <!-- Center-Content -->
        <article style="background-color: <?php if ($checkbox1 == 1) { echo "#555"; } else { echo "#fff"; } ?>; 
        color: <?php if ($checkbox1 == 1) { echo $color; } else { echo "#222"; } ?>;">

            <h1>About me</h1>

            <p>
                Für Designer, Schriftsetzer, Layouter, Grafikenthusiasten und 
                alle anderen. Ein Projekt startet und doch es gibt noch keinen 
                Text, allerdings sollte das Layout schon bald präsentiert werden 
                ... was tun? Damit das Projekt gleich starten kann benutze einfach 
                etwas Lorem ipsum - Blind-, Füll-, Dummy-, Nachahmungs-, Platzhaltertext. 
                Generiere einfach soviel Lorem Ipsum Text wie du brauchst, kopiere und füge 
                ihn in dein Layout als vorübergehenden Platzhalter ein. Somit sieht das Projekt 
                ein Stückchen vollständiger aus als zuvor. Viel Spaß dabei.
            </p>


        </article>
        <!-- Center-Content -->

        <!-- aside right -->
        <aside>

            <!-- section-block -->
            <section style="background-color: <?php if ($checkbox1 == 1) { echo "#555"; } else { echo "#fff"; } ?>; 
            color: <?php if ($checkbox1 == 1) { echo $color; } else { echo "#222"; } ?>;">
                <h2>Artikel</h2>
                <marquee scrollamount="5" scrolldelay="2">
                    <p>Ich bin root, ich darf das!</p>
                </marquee>
            </section>
            <!-- section-block -->

            <!-- section-block -->
            <section style="background-color: <?php if ($checkbox1 == 1) { echo "#555"; } else { echo "#fff"; } ?>; 
            color: <?php if ($checkbox1 == 1) { echo $color; } else { echo "#222"; } ?>;">
                <h2>Information</h2>
            </section>
            <!-- section-block -->

            <!-- section-block -->
            <section style="background-color: <?php if ($checkbox1 == 1) { echo "#555"; } else { echo "#fff"; } ?>; 
            color: <?php if ($checkbox1 == 1) { echo $color; } else { echo "#222"; } ?>;">
                <h2>Kategorie</h2>
                <ul>
                    <li>HTML & CSS</li>
                    <li>PHP & MySQL</li>
                    <li>JavaScript</li>
                    <li>Ajax</li>
                </ul>
            </section>
            <!-- section-block -->

        </aside>
        <!-- aside right -->

    </section>
    <!-- section main -->

    <!-- Footer-bereich -->
    <footer>
        <ul>
            <li>&copy; Copyright by mkCoding 2021</li>
            <li><a href="#" title="Datenschutz">Datenschutz</a></li>
        </ul>

        <!-- Scroll Top Button -->
        <button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>

    </footer>
    <!-- Footer-bereich -->
    
    

<script>
// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() { scrollFunction() };
function scrollFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        document.getElementById("myBtn").style.display = "block";
    } else {
        document.getElementById("myBtn").style.display = "none";
    }
}
// When the user clicks on the button, scroll to the top of the document
function topFunction() {
    document.body.scrollTop = 0; // For Safari
    document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
} 
</script>
</body>
</html>