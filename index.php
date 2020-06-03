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
    <div class="body-container bg-light">
        <?php include(D_TEMPLATE.'/header.php');?>
        <!-- Carousel Container-->
        <?php 
            //if($debug['value'] == 1){include('widgets/debugger.php');}
            if($page['id']==1){
                include(D_TEMPLATE.'/carousel.php');
                include(D_TEMPLATE.'/services_banner.php');
                //include(D_TEMPLATE.'/products_table.php');
                include(D_TEMPLATE.'/short_nav.php');
                include(D_TEMPLATE.'/footer.php');
                
            }elseif($page['id']==2){
                //Test the shop
                
                include(D_TEMPLATE.'/breadcrumb.php');
                include(D_TEMPLATE.'/shop_table.php');
                include(D_TEMPLATE.'/footer.php');
                
            }                  
        ?>
    </div>
</body>

</html>
<?php include('config/scripts.php');?>