<?php

$db = new PDO('mysql:host=localhost; dbname=mydatabase', 'root');
$table = "clients1";
try {
    $db = new PDO('mysql:host=localhost; dbname=mydatabase', 'root');

    //$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo 'Подключение к базе данных' . "\n";
    $sql = $db->prepare ('update clients1 set age=45 where id=3');
    $sql->execute();
    $data = $sql->fetchALL(PDO::FETCH_ASSOC);
    echo 'Изменить возраст на 45 для клиента номер 3' . "\n";
    print_r($data);

    $db = null;

} catch (PDOException $err) {
    echo "Ошибка: не удается подключиться: " . $err->getMessage();
}


$db = new PDO('mysql:host=localhost; dbname=mydatabase', 'root');
$table = "clients1";
try {
    $db = new PDO('mysql:host=localhost; dbname=mydatabase', 'root');

    //$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo 'Подключение к базе данных' . "\n";
    $sql = $db->prepare('update clients1 set first_name = "Denis" where id=1');
    $sql->execute();
    $data = $sql->fetchALL(PDO::FETCH_ASSOC);

    echo 'Изменит имя клиенту с номером 1' . "\n";
    print_r($data);

    $db = null;

} catch (PDOException $err) {
    echo "Ошибка: не удается подключиться: " . $err->getMessage();
}


$db = new PDO('mysql:host=localhost; dbname=mydatabase', 'root');
$table = "clients1";
try {
    $db = new PDO('mysql:host=localhost; dbname=mydatabase', 'root');

    //$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo 'Подключение к базе данных' . "\n";
    $sql = $db->prepare('update clients1 set is_active=0 where id=4 ');
    $sql->execute();
    $data = $sql->fetchALL(PDO::FETCH_ASSOC);
    echo 'Деактивировать клиента номер 4 ' . "\n";
    print_r($data);

    $db = null;

} catch (PDOException $err) {
    echo "Ошибка: не удается подключиться: " . $err->getMessage();
}


$db = new PDO('mysql:host=localhost; dbname=mydatabase', 'root');
$table = "clients1";
try {
    $db = new PDO('mysql:host=localhost; dbname=mydatabase', 'root');

    //$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo 'Подключение к базе данных' . "\n";
    $sql = $db->prepare('delete from clients1 where is_active = 0');
    $sql->execute();
    $data = $sql->fetchALL(PDO::FETCH_ASSOC);
    echo 'Удалить всех неактивных клиентов' . "\n";
    print_r($data);

    $db = null;

} catch (PDOException $err) {
    echo "Ошибка: не удается подключиться: " . $err->getMessage();
}

$db = new PDO('mysql:host=localhost; dbname=mydatabase', 'root');
$table = "clients1";
try {
    $db = new PDO('mysql:host=localhost; dbname=mydatabase', 'root');

    //$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo 'Подключение к базе данных' . "\n";
    $sql = $db->prepare('truncate clients1');
    $sql->execute();
    $data = $sql->fetchALL(PDO::FETCH_ASSOC);
    $sql = $db->prepare('SELECT * FROM clients1');
    $sql->execute();
    $data = $sql->fetchAll();
    echo 'Удалить всех неактивных клиентов' . "\n";
    print_r($data);

    $db = null;

} catch (PDOException $err) {
    echo "Ошибка: не удается подключиться: " . $err->getMessage();
}