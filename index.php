<?php
    include 'controllers/controller.php';

    $controller = new Controller($pdo);


    $action = isset($_GET['action']) ? $_GET['action'] : 'index';
    $id = isset($_GET['id']) ? $_GET['id'] : null;

    if ($action == 'show' && $id) {
        $controller->show($id);
    } else {
        $controller->index();
    }
?>
