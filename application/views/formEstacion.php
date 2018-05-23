<!DOCTYPE html>
<html lang="en-US">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
    <title><?php echo $title; ?></title>

<body>

                <table class="table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>estacion</th>
                            <th>descripcion</th>
                            <th>latitud</th>
                            <th>altitud</th>
                        </tr>
                    </thead>
                    <tbody id="userData">
                        <?php if(!empty($estaciones)){ 
                            foreach($estaciones as $estaciones){ ?>
                            <tr>
                                <td><?php echo $estaciones['id']; ?></td>
                                <td><?php echo $estaciones['estacion']; ?></td>
                            </tr>
                            <?php }
                        }?>
                    
                    </tbody>
                </table>
    <br>
    <br>
    
    <a href="<?php echo site_url('formularioEstaciones')?>">Actualizar Estacion</a> 
     <a href="<?php echo site_url('formularioEstaciones')?>">Eliminar Estacion</a> 
     
</body>
</html>


/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

