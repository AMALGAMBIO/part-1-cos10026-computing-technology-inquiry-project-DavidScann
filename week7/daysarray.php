<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
</head>
<body>
    <?php
    $days = array ("Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday");
    $lastElement = end($days);
    echo "The Days of the week in English are: ";
    foreach ($days as $day) {
        if ($day == $lastElement) {
            echo "$day.";
        } else {
            echo "$day, ";
        }
    }
    ?>
</body>
</html></head>