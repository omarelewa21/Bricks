<?php
$row = 1;
$ind = 0;
$a = array();

if ( ( $handle = fopen( 'test.csv', 'r' ) ) !== FALSE ) {
    while ( ( $data = fgetcsv( $handle, 1000, ',' ) ) !== FALSE ) {
        $num = count( $data );
        //echo "<p> $num fields in line $row: <br /></p>\n";
        $row++;
        for ( $c = 0; $c < $num; $c++ ) {
            array_push( $a, $data[$c] );
        }
        echo <<<_END
        <div class = 'container-fluid'>
        <div class = 'row'>
        <div class = 'col'><img src = '$a[$ind]'></div>
        </div>
        </div>
        _END;
        $ind++;
    }
    fclose( $handle );
}
?>
