<?php 
require_once "conexion.php";
$request = 0;
if(isset($_POST['request'])){
	$request = $_POST['request'];
}
if($request == 1){
	$hospitalid = $_POST['hospitalid'];
	$stmt = Conexion::conectar()->prepare("SELECT idcontacto,nombrecontacto FROM contactoshospital WHERE idhospital=:idhospital");
	$stmt->bindValue(':idhospital', (int)$hospitalid, PDO::PARAM_INT);
	$stmt->execute();
	$resultado = $stmt->fetchAll();
	$response = array();
	foreach($resultado as $item){
		$response[] = array(
			"id" => $item['idcontacto'],
			"name" => $item['nombrecontacto']
		);
	}
	echo json_encode($response);
	exit;
}
?>