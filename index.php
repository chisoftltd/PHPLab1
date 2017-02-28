<!DOCTYPE html>
<html>
<head>
</head>
<body>
<p>
    <?php
    $provisionedActivities = array("specs", "mugs", "sausage rolls");
    foreach ($provisionedActivities as $x) {
        print "<p>$x</p>";
    }
    ?>
</p>
</body>
</html>