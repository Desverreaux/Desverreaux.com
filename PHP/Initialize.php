<html lang="en"> 
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        
        <?php 

            $inDevelopment = True;

            define("PRIVATE_PATH", dirname(__FILE__));
            define("PROJECT_PATH", dirname(__DIR__));

            include(PRIVATE_PATH .'/ColorPallete.php');
            include(PRIVATE_PATH .'/AssetsAliasing.php');

            
            ?>
            
            <?php if ($inDevelopment): ?>

                <link rel="stylesheet" href="../CSS/_GLOBAL.css">
                <link rel="stylesheet" href="../Dependent/node_modules/bootstrap/dist/css/bootstrap.css">
                <link rel="stylesheet" href="../Dependent/node_modules/bootstrap/dist/css/bootstrap.css.map">


                <script src="..\node_modules\jquery\dist\jquery.js"></script>
                <script src="..\node_modules\bootstrap\dist\js\bootstrap.bundle.js"></script>
                <script src="..\node_modules\popper.js\dist\umd\popper.js"></script>

            <?php else: ?>
                
                <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

                <script src="../JavaScript/bezier-easing.js"></script>
                <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
                <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
                <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
                        
            <?php endif; ?>

    </head>

    <body>
    </body>

</html>