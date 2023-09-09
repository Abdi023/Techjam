<!DOCTYPE html>
<html>
<head>
    <title>Getallenbewerking</title>
</head>
<body>
    <ul>
        <?php
        // Loop van 33 tot 543
        for ($i = 33; $i <= 543; $i++) {
            echo '<li>';
            // Controleer of het getal even is
            if ($i % 2 == 0) {
                // Maak het getal vetgedrukt
                echo '<strong>';
            }

            // Controleer of het deelbaar is door 5 en/of 9
            if ($i % 5 == 0 && $i % 9 == 0) {
                echo 'Web';
            } elseif ($i % 5 == 0) {
                echo 'Software';
            } elseif ($i % 9 == 0) {
                echo 'Developer';
            } else {
                // Als het niet deelbaar is door 5 of 9, toon het getal
                echo $i;
            }

            // Sluit de vetgedrukte opmaak indien nodig
            if ($i % 2 == 0) {
                echo '</strong>';
            }
            echo '</li>';
        }
        ?>
    </ul>
</body>
</html>

Dit script begint met een HTML-pagina waarin de resultaten worden weergegeven in een genummerde lijst. 
Het PHP-gedeelte genereert de getallen van 33 tot 543, 
past de opmaak aan volgens de voorwaarden en voegt de juiste tekst toe in plaats van het getal.
Als het getal even is, wordt het vetgedrukt gemaakt. Als het getal deelbaar is door 5, 
wordt "Software" weergegeven, en als het deelbaar is door 9, wordt "Developer" 
weergegeven. Als het zowel deelbaar is door 5 als door 9, wordt "Web" weergegeven.
Alle andere getallen worden ongewijzigd weergegeven.