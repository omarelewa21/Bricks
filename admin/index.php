<?php 
session_start();
if(!isset($_SESSION['username'])){
    header('Location: login.php');
}

?>



<?php include('config/setup.php'); ?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <?php include('config/css.php'); ?>
    <?php include('config/fonts.php'); ?>


    <title><?php echo $page['title'].' | '.$site_title; ?></title>


</head>

<body>

    <?php include(D_TEMPLATE.'/vertical_navbar.php');?>
    <div class="body-container ">
        <?php include(D_TEMPLATE.'/header.php');?>
        <!-- Carousel Container-->
        <?php 
            //if($debug['value'] == 1){include('widgets/debugger.php');}
            if($page['id']==1){?>


        <?php    
                
            }elseif($page['id']==2){
                //Test the shop
                include(D_TEMPLATE.'/breadcrumb.php');
                include(D_TEMPLATE.'/shop_table.php');
                include(D_TEMPLATE.'/footer.php');
                
            }
        

        
        ?>


        <div class="container-fluid">
            <div class="row">

                <!-- Vertical navbar -->
                <div class="vertical-nav" id="sidebar">




                    <ul class="nav flex-column bg-white mb-0">
                        <li class="nav-item">
                            <a class="nav-link" href="#">Link 1</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Link 2</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Link 3</a>
                        </li>
                    </ul>




                </div>
                <!-- End vertical navbar -->


                <!-- Page content holder -->
                <div class="page-content p-5" id="content">
                    
                </div>
                <!-- End demo content -->
            </div>

        </div>


    </div>




</body>

</html>
<?php include('config/scripts.php');?>
