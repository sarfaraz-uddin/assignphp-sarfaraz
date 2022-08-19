<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>assignment 2 q-2</title>
</head>
<body>
    <?php
        function evaluate($name,$attendance,$hygiene,$rating)
        {
            if(($attendance < 80 and $hygiene < 50) or ($hygiene < 50 and $rating < 2))
            {
                echo "$name, You are fired";
            }
            else{
                echo "$name, Not fired for now";
            }
        }
        evaluate("kushal karki",20,70,3);
    
    ?>
</body>
</html>