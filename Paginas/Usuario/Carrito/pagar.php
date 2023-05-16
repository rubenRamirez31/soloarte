<?php  session_start();
include("../../../Conection/cn.php");


$idUsu = $_SESSION["usuario"];
//insertamos el pedido

if(isset($_SESSION['carrito'])){
    $carrito_mio=$_SESSION['carrito'];
    // $_SESSION['carrito']=$carrito_mio;
    }


            if(isset($_SESSION['carrito'])){
            $total=0;
            for($i=0;$i<=count($carrito_mio)-1;$i ++){
                if(isset($carrito_mio[$i])){
                if($carrito_mio[$i]!=NULL){
        
                    $cantidad = $carrito_mio[$i]['cantidad'];
                    $articulo = $carrito_mio[$i]['titulo'];
                    $precio = $carrito_mio[$i]['precio'];
                    $total_precio = $precio * $cantidad;
                    $estado = "Falta metodo pago";

                    $sql = "insert into pedidos (cantidad,articulo,precio,total,estado,id_usuario)                           
                    values(?,?,?,?,?,?)";
                    $cmd = $db->prepare($sql);
                    $res = $cmd->execute([$cantidad,$articulo,$precio,$total_precio,$estado,$idUsu]);

                   // $sql_actualizar = "UPDATE productos
                     //  SET cantidad = cantidad - ?
                       //WHERE nombre = ?";
                    //$cmd_actualizar = $db->prepare($sql_actualizar);
                     //$res_actualizar = $cmd_actualizar->execute([$cantidad, $id_producto]);

                    
           
            }
            }
            }
            }


       
            if(isset($_SESSION['carrito'])){
            $total=0;
            for($i=0;$i<=count($carrito_mio)-1;$i ++){
                if(isset($carrito_mio[$i])){
            if($carrito_mio[$i]!=NULL){ 
            $total=$total + ($carrito_mio[$i]['precio'] * $carrito_mio[$i]['cantidad']);
            }
            }}}
            if(!isset($total)){$total = '0';}else{ $total = $total;}
            //echo $total; 


        

unset( $_SESSION["carrito"] ); 

header("Location: ../Productos.php");
