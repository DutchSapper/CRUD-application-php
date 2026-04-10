<?php
    echo "<h1>Articles</h1>";
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
            echo "</tr>";

        }

    echo "</table";
?>