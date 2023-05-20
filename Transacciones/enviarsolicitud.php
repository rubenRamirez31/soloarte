<!-- En este archivo se insertan los datos de los productos -->
<?php

//Esta condicion es para validar que cuando entre a la pagina, indique si se esta haciendo
//un metodo post y si no es asi nos regresara al index, esto para poder proteger 
// el archivo
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    require '../Conection/cn.php';
    session_start();

    $p1 = $db->real_escape_string($_POST['p1']);
    $p2 = $db->real_escape_string($_POST['p2']);
    $p3 = $db->real_escape_string($_POST['p3']);
    $p4 = $db->real_escape_string($_POST['p4']);
    $p5 = $db->real_escape_string($_POST['p5']);
    $idu = $_SESSION['usuario'];
    $fecha = date("Y-m-d");
    $estado = 'Enviada';


    $fileTmpNames = $_FILES['imagenes']['tmp_name'];


    for ($i = 0; $i < count($fileTmpNames); $i++) {
        $fileTmpName = $fileTmpNames[$i];
        $imagenes = file_get_contents($fileTmpName);

        $sql = "insert into imgSolocitudes (id_usuario,imagenS) values (?,?)";
        $cmd = $db->prepare($sql);
        $res = $cmd->execute([$idu, $imagenes]);
    }

    $query1 = "INSERT INTO solicitudes (p1,p2,p3,p4,p5,id_usuario,fecha,estado)
VALUES('$p1','$p2','$p3','$p4','$p5',$idu,'$fecha','$estado')";

    if ($db->query($query1)) {
        header('Location: /soloarte/Paginas/Usuario/PerfilUsuario.php?resul=4');
    } else {
        header('Location: /soloarte/Paginas/Usuario/PerfilUsuario.php?resul=5');
    }
} else {
    header('Location: /soloarte');
}
