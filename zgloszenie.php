<?php

    $con = mysqli_connect("localhost", "root", "", "wedkarstwo");

    if($con){

        $lowisko = $_POST["lowisko"];
        $data = $_POST["data"];
        $sedzia = $_POST["sedzia"];

        $sql="INSERT INTO zawody_wedkarskie (id, Karty_wedkarskie_id, Lowisko_id, data_zawodow, sedzia) VALUES (NULL, 0, $lowisko, '$data', '$sedzia')";

        if(mysqli_query($con, $sql)){
            echo "Pomyślnie dodano dane do bazy";
        } else {
            echo "Coś poszło nie tak";
        }

    } else {

        echo "Brak połaczenia";

    }

    mysqli_close($con);

?>