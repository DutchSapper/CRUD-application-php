<?php

    class Article {
        public static function all() {
            $db = new PDO('mysql:host=localhost;dbname=crud_articles;charset=utf8', 'root', '');

            $req = $db->query('SELECT * FROM articles');
            return $req->fetchAll(PDO::FETCH_ASSOC);

        }
    }
?>