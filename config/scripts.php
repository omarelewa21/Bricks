<script src="Scripts/scripts.js"></script>
<script src="Scripts/jquery-3.3.1.min.js"></script>
<script src="Scripts/dataTables.min.js"></script>
<script src="Scripts/dataTables.bootstrap4.min.js"></script>
<script src="Scripts/bootstrap.bundle.min.js"></script>
<scrip src="Scripts/bootstrap.min.js"></scrip>

<script src="Scripts/lightslider.js"></script>



<script>
    $(document).ready(function() {
        $('#products-table').DataTable();
    });

    $(document).ready(function() {
        $('#debug-console').hide();
        $('#debug-btn').click(function() {

            $('#debug-console').toggle();
        })


    })

</script>
<script>
$(document).ready(function() {
			$("#content-slider").lightSlider({
                loop:true,
                keyPress:true,
                item:4,
                
                responsive : [
                    {
                        breakpoint:1000,
                        settings:{
                            item:3,
                            
                        }
                    },
            {
                breakpoint:800,
                settings: {
                    item:2,
                    slideMove:1,
                    slideMargin:6,
                  }
            },
            {
                breakpoint:480,
                settings: {
                    item:1,
                    slideMove:1
                  }
            }
        ]
            });
            
		});
</script>
