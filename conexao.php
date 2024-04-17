<?php

$dsn = "mysql:host=localhost;dbname=bank";
$username = "root";
$password = "";
$pdo = new PDO($dsn, $username, $password);

$stmt = $pdo->query("SELECT * FROM login");
while ($linha = $stmt->fetch(PDO::FETCH_ASSOC)) {
    echo $linha['usuario'] . " - " . $linha['senha'] . "<br>";
}


/*$nome = "Maria";
$email = "maria@example.com";
$idade = 20;

$stmt = $pdo->prepare("INSERT INTO alunos (nome, email, idade) VALUES (:nome, :email, :idade)");
$stmt->bindParam(':nome', $nome);
$stmt->bindParam(':email', $email);
$stmt->bindParam(':idade', $idade);
$stmt->execute();*/