<?php

function category_main( $db_connect ) {

    $q = 'SELECT * FROM mainCat';
    $r = mysqli_query( $db_connect, $q );?>
    <h5 id="categories-banner">All Categories</h5>
    <?php
    while( $main = mysqli_fetch_assoc( $r ) ) {

        $tableName = strtolower( $main['name'] );

        $q1 = 'SELECT * FROM '.$tableName;
        $r1 = mysqli_query( $db_connect, $q1 );
        ?>

    <tr style="width:33%; float:left;padding-top:5px;">

        <td style="border:0px;">
            <div>
                <h3 style=""><?php echo $main['name'];?></h3>
                <ul style="padding-left:10px;"><?php while( $sub = mysqli_fetch_assoc( $r1 ) ) {
            ?>

                    <li><a href=''><?php echo $sub['name'];?></a></li>
                    <?php }
            ?></ul>
            </div>
        </td>
    </tr>



    <?php

        }?>

<?php    }
    ?>
