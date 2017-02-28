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

    print "<p><b>As a listen council lets us make changes!</b></p>";
    $provisionedActivities = array("specs", "mugs", "sausage rolls");
    foreach ($provisionedActivities as $x) {
        if ($x == "mugs") {
            $x = "hugs";
        }
        if ($x == "sausage rolls") {
            $x = "";
            print "<p>...why</p>";
        }
        print "<p>$x</p>";
    }

    print "<p><b></b>Hello!</b></p>";

    for ($i = 1; $i < 10; $i++) {
        print "<p><b></b>Hello2</b></p>";
        if (0 == $i / 2) {
            echo "<p>Specs</p>";
        }
        print "<p><b></b>Hello3</b></p>";
        if ($i / 3 == 0) {
            echo "<p>Mugs</p>";
        }
        print "<p><b></b>Hello4</b></p>";
        if ($i / 4 == 0) {
            echo "<p>Sausage Rolls</p>";
        }
    }

    ?>
</p>
</body>
</html>