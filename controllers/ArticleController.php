<?php
    require_once __DIR__ . '/../models/Article.php';


    class ArticleController {    

        //  The functions belowe all use the "Article all()" fucntion to require al the data from the database.
        //  They all have there own seperate view in the view folder.

        public function index() {
            $articles = Article::all();
            require_once  __DIR__ . '/../views/article/index.php';
        }

        public function create() {
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $name = ($_POST['name']);
                $price = ($_POST['price']);
                Article::create($name, $price);
                header('Location: index.php');
                exit;
            } else {
                require_once __DIR__ . '/../views/article/create.php';
            }
        }

        public function delete($id) {
                Article::delete($id);
                header('Location: index.php');
                exit;
        }

        public function edit($id) {
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $id = ($_POST['id']);
                $name = ($_POST['name']);
                $price = ($_POST['price']);
                $article = Article::update($id, $name, $price);
                header('Location: index.php');
                exit;
            } else {
                $article = Article::find($id);
                require_once __DIR__ . '/../views/article/edit.php';
            }

        }
        
    }

 
?>