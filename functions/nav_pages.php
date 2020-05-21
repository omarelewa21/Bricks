<?php 
    function breadcrumb_nav($db_connect,$page_id){
        $q = 'SELECT * FROM pages';
        $r = mysqli_query( $db_connect, $q );
        while($nav =  mysqli_fetch_assoc( $r )){?>
        <?php
        if($page_id>=$nav['id']){ ?>
        <li class="breadcrumb-item "><a href="?page=<?php echo $nav['id']; ?>"><?php echo $nav['title']; ?></a></li>
       
        <?php }
        
        



}


}


?>
