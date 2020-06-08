<?php
//Aqui tienes que cambiar el 32 por el ID del grupo que se creo cuando lo registraste, checalo en la base de datos, porque sino lo cambias no va a cargar los 
//Tambien tienes que cambiar los ids por los que se registraron en tu base de datos, sorry >_>
    include 'conn.php';

    $con = OpenCon();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Resultados: Grupo A</h1>
    <form action="guardarPartidos.php" method="POST">
    <table border="solid">
        <tr>
            <th>Partido</th>
            <th>Equipo</th>
            <th>Marcador</th>
            <th>Equipo</th>
            <th>Marcador</th>
        </tr>
        <tr>
            <td>1</td>
            <td>
            <?PHP 
                $equipo1 = "";
                $result = $con->query("SELECT nombre FROM `equipo` WHERE grupo_id = 32 LIMIT 0,1"); //cambiar el 32 por el id de grupo que esta en la tabla
                while ($row = $result->fetch_assoc()) {
                    $equipo1 =  $row["nombre"];
                    echo $equipo1;
                }           
            ?>
            </td>
            <td>
                <input type="text" name="equipo1" id="equipo1">
            </td>
            <td><?PHP 
            $equipo2 = "";
            $result2 = $con->query("SELECT nombre FROM `equipo` WHERE grupo_id = 32 LIMIT 1,1");//cambiar el 32 por el id de grupo que esta en la tabla
            while ($row = $result2->fetch_assoc()) {
                $equipo2 =  $row["nombre"];
                echo $equipo2;
            }           
           ?></td>
            <td> <input type="text" name="equipo2" id="equipo2"></td>
        </tr>
        <tr>
            <td>2</td>
            <td><?PHP 
            $equipo3 = "";
            $result3 = $con->query("SELECT nombre FROM `equipo` WHERE grupo_id = 32 LIMIT 2,1");//cambiar el 32 por el id de grupo que esta en la tabla
            while ($row = $result3->fetch_assoc()) {
                $equipo3 =  $row["nombre"];
                echo $equipo3;
            }           
           ?></td>
            <td>
                <input type="text" name="equipo3" id="equipo3">
            </td>
            <td><?PHP 
            $equipo4 = "";
            $result4 = $con->query("SELECT nombre FROM `equipo` WHERE grupo_id = 32 LIMIT 3,1");//cambiar el 32 por el id de grupo que esta en la tabla
            while ($row = $result4->fetch_assoc()) {
                $equipo4 =  $row["nombre"];
                echo $equipo4;
            }           
           ?></td>
            <td> <input type="text" name="equipo4" id="equipo4"></td>
        </tr>
        <tr>
            <td>3</td>
            <td> <?PHP 
                $equipo1 = "";
                $result = $con->query("SELECT nombre FROM `equipo` WHERE grupo_id = 32 LIMIT 0,1");//cambiar el 32 por el id de grupo que esta en la tabla
                while ($row = $result->fetch_assoc()) {
                    $equipo1 =  $row["nombre"];
                    echo $equipo1;
                }           
            ?></td>
            <td>
                <input type="text" name="equipo5" id="equipo5">
            </td>
            <td><?PHP 
            $equipo3 = "";
            $result3 = $con->query("SELECT nombre FROM `equipo` WHERE grupo_id = 32 LIMIT 2,1");//cambiar el 32 por el id de grupo que esta en la tabla
            while ($row = $result3->fetch_assoc()) {
                $equipo3 =  $row["nombre"];
                echo $equipo3;
            }           
           ?></td>
            <td> <input type="text" name="equipo6" id="equipo6"></td>
        </tr>
        <tr>
            <td>4</td>
            <td><?PHP 
            $equipo2 = "";
            $result2 = $con->query("SELECT nombre FROM `equipo` WHERE grupo_id = 32 LIMIT 1,1");//cambiar el 32 por el id de grupo que esta en la tabla
            while ($row = $result2->fetch_assoc()) {
                $equipo2 =  $row["nombre"];
                echo $equipo2;
            }           
           ?></td>
            <td>
                <input type="text" name="equipo7" id="equipo7">
            </td>
            <td><?PHP 
            $equipo4 = "";
            $result4 = $con->query("SELECT nombre FROM `equipo` WHERE grupo_id = 32 LIMIT 3,1");//cambiar el 32 por el id de grupo que esta en la tabla
            while ($row = $result4->fetch_assoc()) {
                $equipo4 =  $row["nombre"];
                echo $equipo4;
            }           
           ?></td>
            <td> <input type="text" name="equipo8" id="equipo8"></td>
        </tr>
        <tr>
            <td>5</td>
            <td> <?PHP 
                $equipo1 = "";
                $result = $con->query("SELECT nombre FROM `equipo` WHERE grupo_id = 32 LIMIT 0,1");//cambiar el 32 por el id de grupo que esta en la tabla
                while ($row = $result->fetch_assoc()) {
                    $equipo1 =  $row["nombre"];
                    echo $equipo1;
                }           
            ?></td>
            <td>
                <input type="text" name="equipo9" id="equipo9">
            </td>
            <td><?PHP 
            $equipo4 = "";
            $result4 = $con->query("SELECT nombre FROM `equipo` WHERE grupo_id = 32 LIMIT 3,1");//cambiar el 32 por el id de grupo que esta en la tabla
            while ($row = $result4->fetch_assoc()) {
                $equipo4 =  $row["nombre"];
                echo $equipo4;
            }           
           ?></td>
            <td> <input type="text" name="equipo10" id="equipo10"></td>
        </tr>
        <tr>
            <td>6</td>
            <td><?PHP 
            $equipo2 = "";
            $result2 = $con->query("SELECT nombre FROM `equipo` WHERE grupo_id = 32 LIMIT 1,1");//cambiar el 32 por el id de grupo que esta en la tabla
            while ($row = $result2->fetch_assoc()) {
                $equipo2 =  $row["nombre"];
                echo $equipo2;
            }           
           ?></td>
            <td>
                <input type="text" name="equipo11" id="equipo11">
            </td>
            <td><?PHP 
            $equipo3 = "";
            $result3 = $con->query("SELECT nombre FROM `equipo` WHERE grupo_id = 32 LIMIT 2,1");//cambiar el 32 por el id de grupo que esta en la tabla
            while ($row = $result3->fetch_assoc()) {
                $equipo3 =  $row["nombre"];
                echo $equipo3;
            }           
           ?></td>
            <td> <input type="text" name="equipo12" id="equipo12"></td>
        </tr>
    </table>

    <input type="submit" value="registrar" name="partidos">
    <h3><a href="index.php">Regresar</a></h3>
    </form>
</body>
</html>