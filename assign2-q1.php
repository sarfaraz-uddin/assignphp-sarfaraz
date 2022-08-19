<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>assignment 2 q-1</title>
</head>
<body>
    <?php
        function evaluate($name,$attendance,$hygiene,$rating)
        {
            if($attendance < 80 or $hygiene < 50 or $rating < 2)
            {
                echo "$name, You are fired from the Rojan Krina Passal!";
            }
            else{
                echo "$name, Not fired for now";
            }
        }
        evaluate("kushal karki",20,70,3);
       
    ?>
</body>
</html>