<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
</head>
<body>
    <?php
    $days = array ("Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday");
    $lastElementEng = end($days);
    echo "The Days of the week in English are: ";
    foreach ($days as $day) {
        if ($day == $lastElementEng) {
            echo "$day.";
        } else {
            echo "$day, ";
        }
    }

    echo "<br><br>The Days of the week in French are: ";

    // Reassigning the values of the array
    $days[0] = "Dimanche";
    $days[1] = "Lundi";
    $days[2] = "Mardi";
    $days[3] = "Mercredi";
    $days[4] = "Jeudi";
    $days[5] = "Vendredi";
    $days[6] = "Samedi";
    
    $lastElementFr = end($days);

    echo "The Days of the week in French are: ";
    foreach ($days as $day) {
        if ($day == $lastElementFr) {
            echo "$day.";
        } else {
            echo "$day, ";
        }
    }
    ?>
</body>
</html></head>