<?php
    include 'dbh.inc.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php
    // create a query
        $sql = "SELECT * FROM passenger";
 
    // querying (run above query in database)
        $result = mysqli_query($conn, $sql);

    //checking (How many rows are)
    $resultCheck = mysqli_num_rows($result);

    // if nuber of results > 0 then

    if($resultCheck > 0) {
        //print the result using while loop
        while($row = mysqli_fetch_array($result)) {
            //print the row
            echo $row['name']."". $row['email']."<br>";
        }
    }

    ?>

</body>
</html>