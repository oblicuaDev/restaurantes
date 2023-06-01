<?php header('Content-Type: application/json; charset=utf-8');
     include "../includes/sdk_import.php";
     include "../includes/restaurants.php";  $mice = new Restaurants("es");
    

    $type = "";
    $certs = "";
    $zones = "";
    for($i=0;$i<count($_POST['filters']['checkboxes']);$i++)
    {
        if($_POST['filters']['checkboxes'][$i]['filter']=="criterios_venues"){  $type = implode("+",$_POST['filters']['checkboxes'][$i]['value']); };
        if($_POST['filters']['checkboxes'][$i]['filter']=="certificaciones_de_venues"){  $certs = implode("+",$_POST['filters']['checkboxes'][$i]['value']); };
        if($_POST['filters']['checkboxes'][$i]['filter']=="test_zona"){    $zones = implode("+",$_POST['filters']['checkboxes'][$i]['value']); };
    }

    //echo $type."-".$certs."-".$zones;
     $result = $mice->getRestaurants($zones);
    echo json_encode($result);

?>