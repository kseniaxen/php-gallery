<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Gallery</title>
        <link href="css/bootstrap.min.css" rel="stylesheet">
    </head>
    <body>
    <div class="container">
        <div class="row">
        <header class="col-sm-12 col-md-12 col-lg-12">
        
        </header>
        </div>

        <div class="row">
            <?php 
                include_once('pages/menu.php');
                include_once('pages/functions.php');
            ?>
            
        </div>

        <div class="row">
            <section class="col-sm-12 col-md-12 col-lg-12">
                <?php 
                    if(isset($_GET['page']))
                    {
                        $page = $_GET['page'];
                        switch ($page) {
                            case 1:
                                include_once('pages/home.php');
                                break;
                            case 2:
                                include_once('pages/upload.php');
                                break;
                            case 3:
                                include_once('pages/gallery.php');
                                break;
                            case 4:
                                include_once('pages/registration.php');
                                break;
                            default:
                                echo "Not found";
                                break;
                        }
                    }
                    
                ?>
            </section>
        </div>

    </div>

    <script src="js/bootstrap.min.js"></script>
    </body>
</html>