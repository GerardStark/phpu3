<?PHP
include "conn.php";

function getGrupos()
{
    $conn = OpenCon();
    $query = "SELECT p.ud, p.nombre FROM grupo p";
    $result = $conn->query($query);
        while ($row = $result->fetch_assoc()) {
            $nombre = $row["nombre"];
            $id = $row["ud"];
            echo "<option value='$id'>$nombre</option>";
        }           
    
}
?>