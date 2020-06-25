<nav class='navbar navbar-expand-md navbar-dark  sticky-top  nav-menu'>
<!--
<?php if($debug['value']==1){?>
   <button class='btn btn-danger' id="debug-btn"><i class="fas fa-bug"></i></button> 
   <?php } ?>*/ -->
   
    <button class='navbar-toggler' data-toggle='collapse' data-target='#collapse-target'>
        <span class='navbar-toggler-icon'></span>
    </button>
    <a class="navbar-brand" href=""><img class="d-block" src="pics/11.png" alt="Heave"></a>
        <span class='navbar-text text-light'>HEAVE TECH</span>
    <div class='collapse navbar-collapse' id='collapse-target'>
        <ul class='navbar-nav mr-auto'>

        </ul>

        <form class="form-inline my-2 my-lg-0" action="" method="get" name="basicsearch">
            <input class="form-control mr-sm-2" name="searchbar"  type="search" placeholder="🔍 Keyword / Part Number" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>

        <ul class='navbar-nav mr-auto'>

        </ul>

        <ul class='navbar-nav'>
            <li class='nav-item'>
                <a class=" nav-link text-light "  href='?page=1'>HOME</a>
            </li>
            <li class='nav-item dropdown'>
                <a class='nav-link text-light dropdown-toggle' data-toggle='dropdown' data-target='shop-target' href=''>SHOP
                    
                </a>
                <div class='dropdown-menu' aria-labelledby='shop-target'>
                    <a class='dropdown-item text-light' href=''>BUY</a>
                    <a class='dropdown-item text-light' href=''>Sell</a>
                </div>
            </li>
            <li class='nav-item dropdown'>
                <a class='nav-link text-light dropdown-toggle' data-toggle='dropdown' data-target='services-target' href=''>SERVICES
                    
                </a>
                <div class='dropdown-menu' aria-labelledby='services-target'>
                    <a class='dropdown-item text-light' href=''>Repair</a>
                    <a class='dropdown-item text-light' href=''>Field Services</a>
                    <a class='dropdown-item text-light' href=''>Custom Solution</a>
                    <a class='dropdown-item text-light' href=''>System Management</a>
                </div>
            </li>
            <li class='nav-item'>
                <a class=" nav-link text-light "href='?page=2'>ABOUT US</a>
            </li>
        </ul>

    </div>
    
</nav>
