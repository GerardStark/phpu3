<html>
<head> 

</head>
<body>
    <h1>Crear grupos</h1>
    <div>   
        <form action="guardargrupo.php" method="POST">
            <div>
                Nombre del grupo:
                <input type="text" name="NombrGrp" id="NombrGrp">
            </div>
            <ul id="EquiposTlb">
                <li>
                    Equipo 1:
                    <input type="text" name="Equipo1" id="Equipo1">              
                </li>
                <li>
                    Equipo 2:
                    <input type="text" name="Equipo2" id="Equipo2">
                </li>
                <li>
                    Equipo 3:
                    <input type="text" name="Equipo3" id="Equipo3">
                </li>
                <li>
                    Equipo 4:
                    <input type="text" name="Equipo4" id="Equipo4">
                </li>
            </ul>
            <input type="submit" value="Registrar" name="submit">
        </form>
        <h3><a href="index.php">Regresar</a></h3>
    </div>
</body>

</html>