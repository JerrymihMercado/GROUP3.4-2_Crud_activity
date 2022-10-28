<?php
    require('connect.php');

    $query = "SELECT * FROM records";
    $results = mysqli_query($connection, $query);

    while($row = mysqli_fetch_array($results)){
        echo "<tr>"
                ."<td>".$row['id']."</td>"
                ."<td>".$row['name']."</td>"
                ."<td>".$row['age']."</td>"
                ."<td>".$row['course']."</td>"
                ."<td>"
                ."<button class='delete btn btn-danger' value='".$row['id']."'>Delete</button>"
                ."</td>"
            ."</tr>";    
    }
?>