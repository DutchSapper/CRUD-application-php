<?php
    require_once __DIR__ . '/../models/Article.php';


    class ArticleController {    

        public function index() {
            $articles = Article::all();
            require_once  __DIR__ . '/../views/article/index.php';
        }
    }

 
?>