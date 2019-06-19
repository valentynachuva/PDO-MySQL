<?php
$db = new PDO('mysql:host=localhost; dbname=mydatabase', 'root');
$table = "clients1";
try {
    $db = new PDO('mysql:host=localhost; dbname=mydatabase', 'root');

    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo 'Подключение к базе данных' . "\n";
    $sql = $db->prepare('SELECT * FROM clients1');
    $sql->execute();
    $data = $sql->fetchALL(PDO::FETCH_ASSOC);
    echo 'Все пользователи в теблице'. "\n" ;
    print_r($data);

    $db = null;

}
catch(PDOException $err) {
    echo "Ошибка: не удается подключиться: " . $err->getMessage();
}

?>

<?php
$db = new PDO('mysql:host=localhost; dbname=mydatabase', 'root');
$table = "clients1";
try {
    $db = new PDO('mysql:host=localhost; dbname=mydatabase', 'root');

    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo 'Подключение к базе данных' . "\n";
    $sql = $db->prepare('SELECT * FROM clients1 WHERE is_active = 1');
    $sql->execute();
    $data = $sql->fetchALL(PDO::FETCH_ASSOC);
    echo 'Список активных пользователей'. "\n" ;
    print_r($data);

    $db = null;

}
catch(PDOException $err) {
    echo "Ошибка: не удается подключиться: " . $err->getMessage();
}

?>
<?php

$db = new PDO('mysql:host=localhost; dbname=mydatabase', 'root');
$table = "clients1";
try {
    $db = new PDO('mysql:host=localhost; dbname=mydatabase', 'root');

    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo 'Подключение к базе данных' . "\n";
    $sql = $db->prepare('SELECT * FROM clients1 WHERE age>= 30');
    $sql->execute();
    $data = $sql->fetchAll(PDO::FETCH_ASSOC);
    echo 'Пользователей больше или равно 30 ' . "\n" ;
    print_r( $data);

    $db = null;

}
catch(PDOException $err) {
    echo "Ошибка: не удается подключиться: " . $err->getMessage();
}
?>
<?php

$db = new PDO('mysql:host=localhost; dbname=mydatabase', 'root');
$table = "clients1";
try {
    $db = new PDO('mysql:host=localhost; dbname=mydatabase', 'root');

    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo 'Подключение к базе данных' . "\n";
    $sql = $db->prepare('SELECT * from clients1 WHERE first_name LIKE "V%"');
    $sql->execute();
    $data = $sql->fetchALL(PDO::FETCH_ASSOC);
    echo 'Список клиентов имя которых начинается на В (Вася, Владимир)' . "\n" ;
    print_r( $data);

    $db = null;

}
catch(PDOException $err) {
    echo "Ошибка: не удается подключиться: " . $err->getMessage();

}
?>
<?php

$db = new PDO('mysql:host=localhost; dbname=mydatabase', 'root');
$table = "clients1";
try {
    $db = new PDO('mysql:host=localhost; dbname=mydatabase', 'root');

    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo 'Подключение к базе данных' . "\n";
    $sql = $db->prepare('SELECT count(*) as count FROM	clients1');
    $sql->execute();
    $data = $sql->fetchALL(PDO::FETCH_ASSOC);
    echo 'Всего пользователей' . "\n" ;
    print_r( $data);

    $db = null;

}
catch(PDOException $err) {
    echo "Ошибка: не удается подключиться: " . $err->getMessage();

}
?>
<?php


$db = new PDO('mysql:host=localhost; dbname=mydatabase', 'root');
$table = "clients1";
try {
    $db = new PDO('mysql:host=localhost; dbname=mydatabase', 'root');

    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo 'Подключение к базе данных' . "\n";
    $sql = $db->prepare(' select * from clients1 where age=(select max(age) from clients1)');
    $sql->execute();
    $data = $sql->fetchALL(PDO::FETCH_ASSOC);
    echo 'Самого старого (по возрасту клиента)' . "\n";
    print_r($data);

    $db = null;

} catch (PDOException $err) {
    echo "Ошибка: не удается подключиться: " . $err->getMessage();

}
?>
<?php


$db = new PDO('mysql:host=localhost; dbname=mydatabase', 'root');
$table = "clients1";
try {
    $db = new PDO('mysql:host=localhost; dbname=mydatabase', 'root');

    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo 'Подключение к базе данных' . "\n";
    $sql = $db->prepare(' SELECT first_name, Max(age) FROM clients1 GROUP BY first_name HAVING MAX(age)>40');
    $sql->execute();
    $data = $sql->fetchALL(PDO::FETCH_ASSOC);
    echo 'Самого старого (по возрасту клиента)' . "\n";
    print_r($data);

    $db = null;

} catch (PDOException $err) {
    echo "Ошибка: не удается подключиться: " . $err->getMessage();

}
?>

<?php


$db = new PDO('mysql:host=localhost; dbname=mydatabase', 'root');
$table = "clients1";
try {
    $db = new PDO('mysql:host=localhost; dbname=mydatabase', 'root');

    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo 'Подключение к базе данных' . "\n";
    $sql = $db->prepare(' SELECT * FROM clients1 order by age asc');
    $sql->execute();
    $data = $sql->fetchALL(PDO::FETCH_ASSOC);
    echo 'Получить и отсортировать всех клиентов по возрасту' . "\n";
    print_r($data);

    $db = null;

} catch (PDOException $err) {
    echo "Ошибка: не удается подключиться: " . $err->getMessage();

}
?>


<?php


$db = new PDO('mysql:host=localhost; dbname=mydatabase', 'root');
$table = "clients1";
try {
    $db = new PDO('mysql:host=localhost; dbname=mydatabase', 'root');

    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo 'Подключение к базе данных' . "\n";
    $sql = $db->prepare('select count(*) from clients1  where is_active=1 and age>25');
    $sql->execute();
    $data = $sql->fetchALL(PDO::FETCH_ASSOC);
    echo 'Посчтать сколько у вас активных клиентов старше 25' . "\n";
    print_r($data);

    $db = null;

} catch (PDOException $err) {
    echo "Ошибка: не удается подключиться: " . $err->getMessage();

}
?>