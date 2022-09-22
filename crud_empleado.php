<?php
     
     if( !empty($_POST) ){
   
     //print_r( $_POST );
       // echo "<hr/>";
        $txt_id = utf8_decode($_POST["txt_id"]);
        $txt_carnet = utf8_decode($_POST["txt_carnet"]);
        $txt_nombres = utf8_decode($_POST["txt_nombres"]);
        $txt_apellidos = utf8_decode($_POST["txt_apellidos"]);
        $txt_direccion = utf8_decode($_POST["txt_direccion"]);
        $txt_telefono = utf8_decode($_POST["txt_telefono"]);
        $txt_email = utf8_decode($_POST["txt_email"]);
        $txt_fn = utf8_decode($_POST["txt_fn"]);
        $drop_genero = utf8_decode($_POST["drop_genero"]);
      include("datos_conexion.php");
        $db_conexion = mysqli_connect($db_host,$db_usr,$db_pass,$db_nombre);
        $sql ="";
        if(isset($_POST['btn_agregar'])  ){
          $sql = "INSERT INTO estudiantes(carnet,nombres,apellidos,direccion,telefono,email,fecha_nacimiento,genero) VALUES ('". $txt_carnet ."','". $txt_nombres ."','". $txt_apellidos ."','". $txt_direccion ."','". $txt_telefono ."','". $txt_email ."','". $txt_fn ."',B'". $drop_genero ."');";
        }
        if( isset($_POST['btn_modificar'])  ){
          $sql = "";
        }
        if( isset($_POST['btn_eliminar'])  ){
          $sql = "";
        }
         
          if ($db_conexion->query($sql)===true){
            $db_conexion->close();
           
            header('Location: /empresa_2022');
            //header('Location: index.php');
           
          }else{
            $db_conexion->close();
          
          }

      }
     
    
      
      ?>