<link rel="stylesheet" href="Styles/header.css">

<nav class='navbar navbar-expand-md nav-menu'>
    <div class="main-hearder">

        <div class="navbar-brand">
            <a class="logo-img" href="">
                <img class="d-block" src="pics/Heave_logo.jpg" alt="Heave">
            </a>
            <span cass='navbar-text text-light'>HEAVE TECH</span>
        </div>

        <div>
            <form class="form-inline header-form" action="" method="get" name="basicsearch">
                <input class="form-control header-searchbar" name="searchbar"  type="search" placeholder="🔍 Keyword / Part Number" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
        </div>

        <div>
            <i class="fas fa-user-circle"></i>
            <div class="log-register">
                <span class="log-in">Log in</span>
                <span class="register">Register</span>
            </div>
            <div class="my-acc">
                <span class="my-account">My Account</span>
            </div>

        </div>

        <div>
            <i class="fas fa-shopping-cart"></i>
            <span class="item-num">0 item</span>
            <span class="money-sum">0 EGP</span>
        </div>

    </div>



    <div class="sub-header">
        <ul class='navbar-nav mr-auto' >
            <li class='nav-item'>
                <a class=" nav-link text-light "  href='?page=1'>Home</a>
            </li>
            <li class='nav-item dropdown'>
                <a class='nav-link text-light dropdown-toggle' data-toggle='dropdown' data-target='shop-target' href=''>Shop</a>
                <div class='dropdown-menu' aria-labelledby='shop-target'>
                    <a class='dropdown-item text-light' href=''>Buy</a>
                    <a class='dropdown-item text-light' href=''>Sell</a>
                </div>
            </li>

            <li class='nav-item dropdown'>
                <a class='nav-link text-light dropdown-toggle' data-toggle='dropdown' data-target='services-target' href=''>Services
                    
                </a>
                <div class='dropdown-menu' aria-labelledby='services-target'>
                    <a class='dropdown-item text-light' href=''>Repair</a>
                    <a class='dropdown-item text-light' href=''>Field Services</a>
                    <a class='dropdown-item text-light' href=''>Custom Solution</a>
                    <a class='dropdown-item text-light' href=''>System Management</a>
                </div>
            </li>

            <li class='nav-item'>
                <a class=" nav-link text-light "href='?page=2'>About Us</a>
            </li>

        </ul>

    </div>

</nav>