<script src="Scripts/scripts.js"></script>
<script src="Scripts/jquery-3.3.1.min.js"></script>
<script src="Scripts/dataTables.min.js"></script>
<script src="Scripts/dataTables.bootstrap4.min.js"></script>
<script src="Scripts/bootstrap.bundle.min.js"></script>
<scrip src="Scripts/bootstrap.min.js"></scrip>



<script>
    
    $(document).ready(function() {
    $('#products-table').DataTable();
} );

    $(document).ready(function(){
        $('#debug-console').hide();
          $('#debug-btn').click(function(){
                                
            $('#debug-console').toggle();                    
                                })

         
    })
</script>