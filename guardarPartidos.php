<?PHP
include 'conn.php';
//Aqui tienes que cambiar el 32 por el ID del grupo que se creo cuando lo registraste, checalo en la base de datos, porque sino lo cambias no va a cargar los 
//Tambien tienes que cambiar los ids por los que se registraron en tu base de datos, sorry >_>
if(isset($_POST['partidos']))
{
    $con = OpenCon();
    $equipo1 = $_POST["equipo1"];
    $equipo2 = $_POST["equipo2"];
    $equipo3 = $_POST["equipo3"];
    $equipo4 = $_POST["equipo4"];
    $equipo5 = $_POST["equipo5"];
    $equipo6 = $_POST["equipo6"];
    $equipo7 = $_POST["equipo7"];
    $equipo8 = $_POST["equipo8"];
    $equipo9 = $_POST["equipo9"];
    $equipo10 = $_POST["equipo10"];
    $equipo11 = $_POST["equipo11"];
    $equipo12 = $_POST["equipo12"];
    $query = "INSERT INTO partidos (grupo_id,equipo_1,equipo_2,score_1,score2) 
            VALUES(32,96,97,".$equipo1.",".$equipo2."), 
            (32,98,99,".$equipo3.",".$equipo4."), 
            (32,96,98,".$equipo5.",".$equipo6."),
            (32,97,99,".$equipo7.",".$equipo8."),
            (32,96,99,".$equipo9.",".$equipo10."),
            (32,97,98,".$equipo11.",".$equipo12.")";
             
    $result = $con->query($query);
    if($result === true){
        $con->close();
        header("Location: http://localhost/phpu3/index.php");
        exit();
    }
    else
    {
        echo "Error: <br>" . $con->error;
    } 
} 
?>