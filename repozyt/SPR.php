<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="utf-8">
    <title>Sprawdzian</title>
</head>

<body>
    <form method="POST" action="#">
        <p>Podaj nazwę Bazy danych: <input type="text" name="baza_danych"></p>
        <p>Podaj nazwę tabeli: <input type="text" name="tabela"></p>
        <p>Podaj nazwę kolumny: <input type="text" name="kolumna"></p>
        <p>Podaj Informacje do tabeli: <input type="text" name="rekord"></p>
        <button type="submit">Wyślij dane</button>
    </form>
</body>

</html>

<!-- PHP -->
<?php

@$baza = $_POST['baza_danych'];
@$tabela = $_POST['tabela'];
@$kolumna = $_POST['kolumna'];
@$rekord = $_POST['rekord'];

$conn = mysqli_connect('localhost', 'root', '', '');

mysqli_query($conn, "CREATE DATABASE `$baza`");
mysqli_query($conn, "USE `$baza`");
mysqli_query($conn, "CREATE TABLE $tabela(id int(9), $kolumna varchar(40))");
mysqli_query($conn, "INSERT $tabela VALUES ( '', '$rekord')");
mysqli_close($conn);

?>

<!-- SQL

CREATE DATABASE `$baza`;" -- MUSI BYĆ ZNAK ` PRZED I PO NAZWIE BAZY DANYCH 
mysqli_query($conn, "USE `$baza`;"); -- ZNAK ; NIE JEST WYMAGANY PO ZAPYTANIU SQL

mysqli_query($conn, " {ZAPYTANIE SQL} ");

-->