<?php
require_once '../models/Article.php';

class ArticleController {
    public function index() {
        $articles = Article::getAll();
        require_once '../views/index.php';
    }

    // Voeg hier andere methoden toe: create(), store(), edit(), update(), delete()
    create()

    store()
    
    edit()

    update()

    delete()
    
}
?>