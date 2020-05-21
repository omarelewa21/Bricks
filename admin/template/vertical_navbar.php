
    <div class="vertical-menu pull-left fixed-top ">

    <a class="pull-left " id="home" href="index.html" data-toggle="tooltip" title="Home" data-placement="auto"><i class="fas fa-home"></i> </a>
    <a class="pull-left " href="#" data-toggle="tooltip" title="Shop" data-placement="auto"><i class="fas fa-shopping-cart"></i> </a>


    <div id="myNav" class="overlay">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>

    <div class="overlay-content row justify-content-center" id="container">

            <div class="form-container sign-up-container">
                <form action="#">

                    <h1>Create Account</h1>
                    <div class="social-container">
                        <a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
                        <a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                    <span>or use your email for registration</span>
                    <input type="text" placeholder="User Name" />
                    
                    <input type="email" placeholder="Email" />
                    <input type="password" placeholder="Password" />
                    <button>Sign Up</button>
                </form>
            </div>
            <div class="form-container sign-in-container">
                <form action="#">

                    <h1>Sign in</h1>
                    <div class="social-container">
                        <a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
                        <a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                    <span>or use your account</span>
                    <input type="email" placeholder="Email" />
                    <input type="password" placeholder="Password" />
                    <a href="#">Forgot your password?</a>
                    <button>Sign In</button>
                </form>
            </div>
            <div class="overlay-container">
                <div class="overlay-1">
                    <div class="overlay-panel overlay-left">
                        <h1>Welcome Back!</h1>
                        <p>To keep connected with us please login with your personal info</p>
                        <button class="ghost" id="signIn">Sign In</button>
                    </div>
                    <div class="overlay-panel overlay-right">

                        <h1>Hello, Friend!</h1>
                        <p>Enter your personal details and start journey with us</p>
                        <button class="ghost" id="signUp">Sign Up</button>
                    </div>
                </div>
            </div>


        </div>
    </div>
    <div id="search-nav" class="overlay">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>

        <div class="overlay-content overlay-search row justify-content-center">



            <div class="col">

                <form class="shearch-form">
                    <div class="row">

                        <h1 id="search-tag">First Engineering Solution Platform</h1>
                    </div>
                    <div class="row">

                        <h2 id="search-tag">Search and find anything you need</h2>
                    </div>
                    <div class=" row no-gutters align-items-center">

                        <div class="btn-group">
                            <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-angle-down"> Keyword</i>
                            </button>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">Part Number</a>
                                <a class="dropdown-item" href="#">Manufacturer Part</a>
                                <a class="dropdown-item" href="#">Category</a>
                                <a class="dropdown-item" href="#">Manufacture</a>

                            </div>
                        </div>
                        <div class="col">
                            <input class="form-control form-control-lg form-control-borderless" type="search" placeholder="Search Products Here">
                        </div>

                        <div class="col-auto">
                            <button class="btn btn-lg btn-info" type="submit">Find</button>
                        </div>

                    </div>
                </form>
            </div>




        </div>
    </div>
    <a class="pull-left " onclick="openNav()" href="#"><i class="fas fa-user"<?php if($_SESSION['username']){echo 'style="color:lightgreen;"';}?> data-toggle="tooltip" title='User' data-placement="auto"></i> </a>
    <a href="#" class="pull-left" onclick="openSearch()"><i class="fas fa-search" data-toggle="tooltip" title="Search" data-placement="auto"></i></a>
    <a href="" class="pull-left"><i class="fas fa-phone" data-toggle="tooltip" title="Contact Us" data-placement="auto"></i></a>
    <a href="" class="pull-left"><i class="fas fa-map-marked-alt" data-toggle="tooltip" title="Location" data-placement="auto"></i></a>
    <a href="" class="pull-left vertical-text">Heave Tech</a>
    <a href="" class="pull-left" id="hide"><i class="fab fa-facebook"></i></a>
    <a href="" class="pull-left" id="hide"><i class="fab fa-twitter"></i></a>
    <a href="" class="pull-left" id="hide"><i class="fab fa-instagram"></i></a>
    <a href="" class="pull-left" id="hide"><i class="fab fa-youtube"></i></a>

</div>

