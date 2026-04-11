<?php
    echo "<div>";
        echo "<h1>Edit article</h1>";
        echo "<form method='post' action='index.php?action=edit&id=" . $article['id'] . "'>";
            echo "<input type='hidden' name='id' value='" . $article['id'] . "'>";
            echo "<label for='name'> Name </label> ";
            echo "<input id='name' name='name' value='" . $article['name'] . "'>";
            echo "<br>";
            echo "<br>";

            echo "<label for='price'> Price </label> ";
            echo "<input id='price' name='price' value='" . $article['price'] . "'>";
            echo "<br>";
            echo "<br>";
            echo "<button>Update article</button>";


        echo "</form>";
    echo "</div>";
?>

