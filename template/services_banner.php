 <style>
     .services-container {

         position: relative;
         left: 0px;
         
         /*margin-top: 40px;*/
         
         /* border: solid 3px darkcyan;*/


     }
     .services-container .row{
         justify-content: center;
     }

     .services-container a {
         text-decoration: none;
         color: darkcyan;
     }

      .services-item{
           display: block;
           justify-content: center;
           text-align: center;
           padding: 20px;
          margin: 20px;
          background-color: #eeeeee;
          
           font-family: 'Roboto Mono';
     }.services-item:hover{
         background-color: aliceblue;
         
  
        box-shadow: 5px 5px 5px 5px #888888;
     }
       .services-item i{
           width: 100;
           padding: 10px;
           color:darkcyan;
       }
       .services-item h3{
           width: 100;
           font-size: 0.9em;
       }
       .services-item p{
           width: 100;
           padding: 10px;
           text-align: center;
           font-size: 0.8em;
           color: darkcyan;
       }
       

        
      
     .services-container h2 {
         background: darkcyan;
         color: #fff;
         width: 200px;
         font-size: 24px;
         padding: 5px;
         height: 40px;
         margin-top: 20px;
         margin-bottom: 20px;
         font-family: serif;
     }

     .services-container h2::after {
         content: '';
         border-top: solid 40px darkcyan;
         border-right: solid 40px transparent;
         position: relative;
         left: 70px;
         top: 36px;
     }

 </style>

 <div class="container services-container">
     <h2>Our Services</h2>
     <div class="row">
        <div class="col-lg-3 col-xs-12 services-item">
            <a href=""><i class="fas fa-shopping-cart fa-2x"></i>
            <h3>Buy</h3>
            <p>We are using safe payments</p>
            </a>
         </div>
         <div class="col-lg-3 col-xs-12 services-item">
            <a href=""><i class="fas fa-dollar-sign fa-2x"></i>
            <h3>Sell</h3>
            <p>We are using safe payments</p>
            </a>
         </div>
         <div class="col-lg-3 col-xs-12 services-item">
            <a href=""><i class="fas fa-cogs fa-2x"></i>
            <h3>Repair</h3>
            <p>We are using safe payments</p>
            </a>
         </div>
     </div>
        <div class="row">
        <div class="col-lg-3 col-xs-12 services-item">
            <a href=""><i class="fas fa-user-cog fa-2x"></i>
            <h3>Field Services</h3>
            <p>We are using safe payments</p>
            </a>
         </div>
         <div class="col-lg-3 col-xs-12 services-item">
            <a href=""><i class="fas fa-database fa-2x"></i>
            <h3>Custom Solutions</h3>
            <p>We are using safe payments</p>
            </a>
         </div>
         <div class="col-lg-3 col-xs-12 services-item">
            <a href=""><i class="fas fa-cloud fa-2x"></i>
            <h3>System Management</h3>
            <p>We are using safe payments</p>
            </a>
         </div>
     </div>
        
     </div>

