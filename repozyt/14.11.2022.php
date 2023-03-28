<html>
    <head>
    <title>psycha sitting</title>
    </head>
    <body>
        <?php
        $mysqli = new mysqli("localhost","root","","");
        mysqli_query($mysqli,"CREATE DATABASE `nogger`;");
        mysqli_query($mysqli,"USE `nogger`;");
        mysqli_query($mysqli,"CREATE TABLE tabela1 (id int(6) auto_increment primary key, imie varchar(30), nazwisko varchar(30),telefon int(9));");
        ?>
    </body>
</html>