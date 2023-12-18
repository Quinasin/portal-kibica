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
    
    $matchID = $_GET["ID"];

    $server = "localhost";
    $user = "root";
    $pass = "";
    $dbname = "socer_basee";

    $conn = mysqli_connect($server, $user, $pass, $dbname);
    
    $query = "SELECT * FROM results WHERE ID='$matchID'";
    $result = mysqli_query($conn, $query);
    $row = mysqli_fetch_array($result);

    $query2 = "SELECT * FROM goalscorers WHERE date ='".$row['date']."' AND home_team = '".$row['home_team']."' AND away_team = '".$row['away_team']."'";
    $result2 = mysqli_query($conn, $query2);

    echo'<h1 id="matchTitle"> '.$row["date"].' '.$row["home_team"].' '.$row["home_score"].' - '.$row["away_score"].' '.$row["away_team"].'</h1>';

    while ($row2 = mysqli_fetch_array($result2)) {
        if ($row2['team'] == $row['home_team']) {
            echo '<p class="homeScore">'.$row2['minute'].' '.$row2['scorer'].'</p><br>';
        } else if ($row2['team'] == $row['away_team']) {
            echo '<p class="awayScore">'.$row2['minute'].' '.$row2['scorer'].'</p><br>';
        }}
    
    echo '<br style = "line-height:10">miejsce gry: '.$row["city"].', '.$row["country"].'<br>';
    echo 'turniej: '.$row["tournament"];
?>
    
</body>
</html>