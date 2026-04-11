<?php
    echo "<div>";
        echo "<h1>Add a new article</h1>";
        echo "<form method='post' action='index.php?action=create'>";
            echo "<label for='name'> Name </label> \t";
            echo "<input id='name' name='name' type='text' >";
            echo "<br>";
            echo "<br>";

            echo "<label for='price'> Price </label> \t";
            echo "<input id='price' name='price' type='text' placeholder='0.00'>";
            echo "<br>";
            echo "<br>";
            echo "<button>Add article</button>";


        echo "</form>";
    echo "</div>";

?>

