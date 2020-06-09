<style>
    .short-nav{
        padding: 0px;
    }
    #content-slider {
        height: 250px;
        margin-bottom: 20px;
        margin-top: 20px;


    }

    ul {
        list-style: none outside none;
        padding-left: 0;

    }

    .demo .item {
        margin-bottom: 0px;
    }

    .content-slider li {
        
        text-align: center;
        
        color: #FFF;
        margin-bottom: 20px;
        
    }

    .content-slider li:hover {
        border: solid 2px #888888;
        
    }

    .content-slider img {
        height: 100%;
        width: 100%;
    }
  

    .content-slider h3 {
        margin: 0;
        padding: 70px 0;

    }

    .demo {
        width: 100%;
        height: 100%;
    }

    .conttt {
        position: relative;
        top: 0px;
    }

    .sale {
        position: absolute;
        top: 0%;
        left: 0%;
        margin-left: 0px;
        background-color: gold;
        color: darkblue;
        font-family: serif;
        font-size: 0.9em;
        padding: 4px;
        border-radius: 0px 0px 50px 0px;


    }

    .price {
        position: absolute;
        top: 91%;
        width: 60px;
        left: calc(100% - 60px);
        
        margin-left: 0px;
        padding: 6px;
        font-size: 0.9em;
        background-color: lightgray;
        font-family: serif;
        color: black;
    }

</style>



<div class="container-fluid short-nav">
    <div class="row row-content ">
        <div class="col-12">
            <ul class="nav nav-tabs tapped-nav">
                <li class="nav-item">
                    <a href="#on-sale" role="tab" data-toggle="tab" class="nav-link active">On Sale </a>
                </li>
                <li class="nav-item">
                    <a href="#new-arrival" role="tab" data-toggle="tab" class="nav-link ">New Arrival</a>
                </li>
                <li class="nav-item">
                    <a href="#top-categories" role="tab" data-toggle="tab" class="nav-link ">Top Categories</a>
                </li>
                <li class="nav-item">
                    <a href="#top-brands" role="tab" data-toggle="tab" class="nav-link ">Top Brands</a>
                </li>
                <li class="nav-item">
                    <a href="#best-sellers" role="tab" data-toggle="tab" class="nav-link ">Best Selllers</a>
                </li>

            </ul>
            <div class="tab-content">
                <div role="tabpanel" class=" demo tab-pane fade show active" id="on-sale">

                    <div class="item">
                        <ul id="content-slider" class="content-slider ">
                            <li>

                                <div class="conttt">
                                    <a href=""><img class="card-img-top" src="pics/p1.jpg" alt=""></a>
                                    <span class="sale">10% OFF</span>
                                    <span class="price">20.0 $</span>
                                </div>

                            </li>
                             <li>

                                <div class="conttt">
                                    <a href=""><img class="card-img-top" src="pics/p5.jpg" alt=""></a>
                                    <span class="sale">20% OFF</span>
                                    <span class="price">20.0 $</span>
                                </div>

                            </li>
                             <li>

                                <div class="conttt">
                                    <a href=""><img class="card-img-top" src="pics/p3.jpeg" alt=""></a>
                                    <span class="sale">40% OFF</span>
                                    <span class="price">20.0 $</span>
                                </div>

                            </li>
                             <li>

                                 <div class="conttt">
                                     <a href=""><img class="card-img-top" src="pics/p1.jpg" alt=""></a>
                                     <span class="sale">15% OFF</span>
                                     <span class="price">20.0 $</span>
                                 </div>

                             </li>
                             <li>

                                <div class="conttt">
                                    <a href=""><img class="card-img-top" src="pics/p1.jpg" alt=""></a>
                                    <span class="sale">18% OFF</span>
                                    <span class="price">20.0 $</span>
                                </div>

                            </li>
                             <li>

                                <div class="conttt">
                                    <a href=""><img class="card-img-top" src="pics/p1.jpg" alt=""></a>
                                    <span class="sale">10% OFF</span>
                                    <span class="price">20.0 $</span>
                                </div>

                            </li>
                           
                        </ul>
                    </div>

                </div>



            </div>
            
        </div>
    </div>
</div>

