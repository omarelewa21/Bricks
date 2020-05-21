<nav class='navbar navbar-expand-md navbar-dark  sticky-top  nav-menu'>


    <button class='navbar-toggler' data-toggle='collapse' data-target='#collapse-target'>
        <span class='navbar-toggler-icon'></span>
    </button>
    <a class="navbar-brand" href=""><img class="d-block" src="pics/11.png" alt="Heave"></a>
    <span class='navbar-text text-light'>HEAVE TECH</span>

    <div class='collapse navbar-collapse' id='collapse-target'>


        <ul class='navbar-nav mr-auto'>

        </ul>
        <ul class='navbar-nav'>
            <li class='nav-item'>
                <a class=" nav-link text-light " href='#'>Dashboard</a>
            </li>

            <li class='nav-item'>
                <a class=" nav-link text-light " href='#'>Pages</a>
            </li>
            <li class='nav-item'>
                <a class=" nav-link text-light " href='#'>Users</a>
            </li>
            <li class='nav-item'>
                <a class=" nav-link text-light " href='#'>Settings</a>
            </li>
            

        </ul>
        <ul class="nav navbar-nav navbar-right">

            <li class='nav-item dropdown'><a class=' text-light btn' id="debug-btn" href=''> <i class="fas fa-bug"></i></a></li>
            <li class='nav-item dropdown'>

                <a class='nav-link text-light dropdown-toggle' data-toggle='dropdown' data-target='admin-target' href=''><?php echo $user['first'].' '.$user['last']; ?></a>
                <div class='dropdown-menu' aria-labelledby='admin-target'>

                    <a class=" nav-link text-light dropdown-item" href='logout.php'>Log Out</a>
                </div>
            </li>


        </ul>

    </div>
</nav>
