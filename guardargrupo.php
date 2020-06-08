<?php
include 'conn.php';

function insertarGrupos(){
    $conn = OpenCon();
    $sqlQuery = "INSERT INTO grupo (nombre) VALUES ('".$_POST["NombrGrp"]."') ";
    if($conn->query($sqlQuery) === true)
    {
        $grupo = $_POST["NombrGrp"];
        $equipos = array
        (
            "Equipo1" => $_POST["Equipo1"],
            "Equipo2" => $_POST["Equipo2"],
            "Equipo3" => $_POST["Equipo3"],
            "Equipo4" => $_POST["Equipo4"]
        );
        insertarEquipos($equipos, $grupo);
    }
    else
    {
        echo "Error: <br>" . $conn->error;
    }    
    $conn->close();  
}

function insertarEquipos($equipos, $grupo)
{
    $conn = OpenCon();
    $query3 = "SELECT ud from grupo WHERE nombre like '%".$grupo."%'";
        $result = $conn->query($query3);
        while ($row = $result->fetch_assoc()) {
            $groupid = $row["ud"];
        }
    foreach ($equipos as $key) {
        
        $sqlQuery = "INSERT INTO equipo (nombre, grupo_id) VALUES ('".$key."',".$groupid.")";
        $conn->query($sqlQuery);
        
        
    
    }
    $conn->close();
    header("Location: http://localhost/phpu3/index.php");
    exit();
    
}

if(isset($_POST['submit']))
{
    insertarGrupos();
} 
?>

