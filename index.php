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

    $provisionedActivities = array("specs", "mugs", "sausage rolls");
    foreach ($provisionedActivities as $x) {
        if($x == "mugs"){
            $x = "hugs";
        }
        if ($x == "sausage rolls"){
            $x = "";
            print "<p>...why</p>";
        }
            print "<p>$x</p>";
    }
    ?>
</p>
</body>
</html>