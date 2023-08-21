<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Output Badwords</title>
</head>
<body>
    <?php
        $stringaOriginale = $_GET['paragraph'];
        $badword = $_GET['badword'];

        $stringaCensurata = str_replace($badword, '***', $stringaOriginale);

        echo $stringaOriginale;
        echo '<br>';
        echo strlen($stringaOriginale);
        echo '<br>';
        echo $stringaCensurata;
        echo '<br>';
        echo strlen($stringaCensurata);
        

    ?>
</body>
</html>