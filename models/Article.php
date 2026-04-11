<?php

    class Article {
        //  getConnection() makes connection with the database and provides the connection for the other methodes.
        private static function getConnection() {
            return new PDO('mysql:host=localhost;dbname=crud_articles;charset=utf8', 'root', '');
        }

        //  all() makes connetion with the database and returns all the data.
        public static function all() {
            $db = self::getConnection();

            $req = $db->query('SELECT * FROM articles');
            return $req->fetchAll(PDO::FETCH_ASSOC);
        }

        //  create() makes connection with the database and creates a new article with a "name" and "price", the "id" is provided by the database.
        public static function create($name, $price) {
            $db = self::getConnection();

            $stmt = $db->prepare('INSERT INTO articles (name, price) VALUES (?, ?)');
            $stmt->execute([$name, $price]);
        }

        // delete($id) deletes the row of data with the coronsponding id giving bij the controller.
        public static function delete($id) {
            $db = self::getConnection();

            $del = $db->prepare('DELETE FROM articles WHERE id=?');
            $del->execute([$id]);
        }

        // find($id) will select a single row of data from the selected id.
        public static function find($id) {
            $db = self::getConnection();
            $id = (int) $id;

            $find = $db->prepare('SELECT * FROM articles WHERE id=?');
            $find->execute([$id]);
            return $find->fetch(PDO::FETCH_ASSOC);
        }

        // update() will update the new data into the database;
        public static function update($id, $name, $price){
            $db = self::getConnection();

            $upd = $db->prepare('UPDATE articles SET name=?, price=? WHERE id=?');
            $upd->execute([$name, $price, $id]); 

        }

    }
?>