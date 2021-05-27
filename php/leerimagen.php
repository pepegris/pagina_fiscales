<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Document</title>
</head>
<body>




    <table class="table table-bordered table-hover" id="tblData">
        <thead >
          <tr class="table-secondary">
            
            <td>Descripción</td>
            <td>Código</td>
            <td>Precio</td>
            <td>Referencia</td>
            <td>Cantidad</td>
            <td>Accion</td>
          </tr>
        </thead>
        <tbody>

        
        <?php

    require 'includes/conexion.php';

    $sql="SELECT * FROM art WHERE id>=1";

    $resultado=mysqli_query($conn,$sql);

    while ($fila=mysqli_fetch_array($resultado)) {

    $nombre = $fila['art_nombre'];
    $imagen = $fila['art_img'];?>
          <tr>
           
            <td><?php echo $nombre; ?></td>
            <td><img src="../uploads/<?=$imagen?>" alt="" width="80px" ></td>
            <td>Bs.<?php echo $bolivares; ?></td>
            <td><?php echo $campo4; ?></td>
            <td><?php echo $campo5; ?></td>
            <td>
              <a href='edit.php?id=<?php echo $campo1?>' class='btn btn-info'>
                <i class='fas fa-marker'></i>
              </a>
              <a href='delete.php?id=<?php echo $campo1?>' class='btn btn-danger'>
                <i class='far fa-trash-alt'></i>
              </a>
            </td>
          </tr>
          <?php } ?>


        <?php

    
/*           while($rowC=mysqli_fetch_assoc($runC)) { 
            $campo1=$rowC['id'];
            $campo2=$rowC['art_des'];
            $campo3=$rowC['co_art'];
            $campo4=$rowC['ref_art'];
                $total=$campo4*$dolar;
                $bolivares=number_format($total, 2, ',', '.');
            $campo5=$rowC['stock'];
            
              echo "
            <tr>
              <td>".$campo1."</td>
              <td>".$campo2."</td>
                  <td>".$campo3."</td>
                  <td>Bs.".$bolivares."</td>
                  <td>".$campo4."</td>
                  <td>".$campo5."</td>
                  <td>
                  <a href='edit.php?id= $campo1['id']' class='btn btn-secondary'>
                    <i class='fas fa-marker'></i>
                  </a>
                  <a href='delete_task.php?id= $campo1['id']' class='btn btn-danger'>
                    <i class='far fa-trash-alt'></i>
                  </a>
                </td>
              
            </tr>";
            
            
          } */

?>
        

        </tbody>
      </table>


    
</body>
</html>