<html lang="en"> 
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        
        <?php 

            require($_SERVER['DOCUMENT_ROOT'] .'/public/PHP/PathAssignments.php');
            
            //include($directory['php'] .'/ColorPallete.php');

            global $directory;

            foreach($images as $k => $v) {
                echo "<img src=\"" . $v . "\">";
            }

        ?>
            
    </head>

    <body>
    </body>

</html>