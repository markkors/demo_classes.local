<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");


$json = file_get_contents("php://input");
$obj = json_decode($json);



switch ($obj->action) {
    case "select":
        $a = ["waarde_select",$obj->data];
        break;
    case "delete":
        $a = ["waarde_delete",$obj->data];
        break;
    case "insert":
        $a = ["waarde_insert",$obj->data];
        break;

}

echo json_encode($a);


/*
$personen = [];

$persoon1 = new cPersoon("Jan",45,"m","l");
$persoon2 = new cPersoon("Jan",47,"m","k");
$persoon3 = new cPersoon("Jan",48,"m","s");
$persoon4 = new cPersoon("Kees",45,"m","l");

array_push($personen,$persoon1,$persoon2,$persoon3,$persoon4);
http_response_code(200);
echo json_encode($personen);*/




