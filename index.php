<?php   
    error_reporting(E_ALL);
    ini_set('display_errors', 1);

    require_once 'controllers/ArticleController.php';
    
    $action = $_GET['action'] ?? 'index';
    $controller = new ArticleController();

    $id = $_GET['id'] ?? null;
    switch ($action){
        case 'index':
            $controller->index();
            break;
        case 'create':
            $controller->create();
            break;
        case 'delete':
            $controller->delete($id);
            break;
        case 'edit':
            $controller->edit($id);
            break;
    }
?>