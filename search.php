<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./style.css">
</head>
<body>
    <?php

    $server = "localhost";
    $user = "root";
    $pass = "";
    $dbname = "socer_basee";

    $conn = mysqli_connect($server, $user, $pass, $dbname);

    $input=$_GET["input"];
    $input2=$_GET["input2"];
    $countries = $_GET["countries"];
    $sortBy = $_GET["sortBy"];
    
    if($sortBy == "dataNajn"){
        $sorting = "date DESC";
    }else{
        $sorting = "date ASC";
    }
    
    if($countries == "one"){
        $query = "SELECT * FROM results WHERE home_team='$input' OR away_team='$input' ORDER BY $sorting";
    }elseif($countries == "two"){
        $query = "SELECT * FROM results WHERE (home_team = '$input' AND away_team='$input2') OR (home_team='$input2' AND away_team='$input') ORDER BY $sorting";
    }

    $result = mysqli_query($conn, $query);
    echo"<div class='lista'>";
        while ($row = mysqli_fetch_array($result)) {
        echo '<a class="match" href="./match.php?ID='.$row["ID"].'"> '.$row["date"].' '.$row["home_team"].' '.$row["home_score"].' - '.$row["away_score"].' '.$row["away_team"].' </a><br>';}
    echo"</div>";

    
    ?>
</body>
</html>