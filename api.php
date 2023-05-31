<?php 
    $con = mysqli_connect("localhost", "root", "", "USUARIOS");
    $response = array();
    if($con){
        $sql = "select * from userspetapp";
        $result = mysqli_query($con,$sql);
        if($result){
            header("Content-Type: JSON");
            $i=0;
            while($row = mysqli_fetch_assoc($result)){
                $response[$i]['userId'] = $row ['userId'];
                $response[$i]['name'] = $row ['name'];
                $response[$i]['lastName'] = $row ['lastName'];
                $response[$i]['age'] = $row ['age'];
                $response[$i]['email'] = $row ['email'];
                $i++;
            }
            echo json_encode($response, JSON_PRETTY_PRINT);
        }
    }
    else{
        echo "Database conection failed";
    }
?>