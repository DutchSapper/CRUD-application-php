<?php
    echo "<h1>List of Articles</h1>";
    echo "<a href='index.php?action=create'>Add new article</a>";
    echo "<br>";
    echo "<br>";
    echo "<table>";
    
        echo "<tr>";
            echo "<th> Id </th>";
            echo "<th> Name </th>";
            echo "<th> Price </th>";
        echo "</tr>";

        foreach ($articles as $article) {
            echo "<tr>";
            echo "<td>" . $article['id'] . "</td>";
            echo "<td>" . $article['name'] . "</td>";
            echo "<td>" . $article['price'] . "</td>";
            echo "<td>" . "<a href='index.php?action=edit&id=" . $article['id'] . "'>Edit</a>" . "</td>";
            echo "<td>" . "<a href='index.php?action=delete&id=" . $article['id'] . "'>Delete</a>" . "</td>";
            echo "</tr>";

        }

    echo "</table";
?>