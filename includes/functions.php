<?php
    //server side
    // php import statement
    //include("connect.php"); //commented out bc of index.php

    $result = [];

    //these functions are for index.php
    function getAllProj($conn) {
        $query = "SELECT * FROM tbl_minicars";

        $runQuery = $conn->query($query);

        while($row = $runQuery->fetchAll(PDO::FETCH_ASSOC)) {
            $result[] = $row;
        }
        //encoding echo into JSON for js (HAS TO BE DONE FOR JS)
        echo(json_encode($result));
    }

    function getSingleProj($conn, $ID) {
        $query = "SELECT * FROM tbl_minicars WHERE ID=" . $ID . "";

        $runQuery = $conn->query($query);

        while($row = $runQuery->fetchAll(PDO::FETCH_ASSOC)) {
            $result[] = $row;
        }
       
        echo(json_encode($result));
    }
    