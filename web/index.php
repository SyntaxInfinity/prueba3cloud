<?php
$host=getenv("DB_HOST");
$db=getenv("DB_NAME");
$user=getenv("DB_USER");
$pass=getenv("DB_PASSWORD");

try{
    $dsn="mysql:host=$host;dbname=$db;charset=utf8mb4";
    $pdo=new PDO($dsn, $user, $pass, [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    ]);

    $stmt=$pdo->query("SELECT * FROM log");
    $rows=$stmt->fetchAll(PDO::FETCH_ASSOC);

    echo"<h2>TABLA LOG</h2>";
    echo"<table border='1' cellpadding='6'";
    echo"<tr><th>HORA</th><th>ACTIVIDAD</th><th>ESTADO</th></tr>";

    foreach($rows as $r){
        echo"<tr>";
        echo"<td>{$r['hora']}</td>";
        echo"<td>{$r['actividad']}</td>";
        echo"<td>{$r['estado']}</td>";
        echo"</tr>";
    }
    echo"</table>";
}   catch(PDOException $e){
    die("f conexion PDO: ". $e->getMessage());
}