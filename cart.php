<?php
include 'header.php';
?>
   
   <div id="navbar" class="navbar navbar-default"><!-- navbar navbar-default Begin -->
       
       <div class="container"><!-- container Begin -->
           
           <div class="navbar-header"><!-- navbar-header Begin -->
               
               <a href="index.php" class="navbar-brand home"><!-- navbar-brand home Begin -->

                   <img src="images/logo.png" alt="Codebook Logo" class="hidden-xs">
                   <img src="images/logo.png" alt="Codebook Logo Mobile" class="visible-xs">

               </a><!-- navbar-brand home Finish -->
               
               <button class="navbar-toggle" data-toggle="collapse" data-target="#navigation">
                   
                   <span class="sr-only">Toggle Navigation</span>
                   
                   <i class="fa fa-align-justify"></i>
                   
               </button>
               
               <button class="navbar-toggle" data-toggle="collapse" data-target="#search">
                   
                   <span class="sr-only">Toggle Search</span>
                   
                   <i class="fa fa-search"></i>
                   
               </button>
               
           </div><!-- navbar-header Finish -->
           
           <div class="navbar-collapse collapse" id="navigation"><!-- navbar-collapse collapse Begin -->
               
               <div class="padding-nav"><!-- padding-nav Begin -->
                   
                   <ul class="nav navbar-nav left"><!-- nav navbar-nav left Begin -->
                       
                       <li>
                           <a href="index.php">Home</a>
                       </li>
                       <li>
                           <a href="shop.php">Shop</a>
                       </li>
                       <li>
                           <a href="customer/my_account.php">My Account</a>
                       </li>
                       <li class="active">
                           <a href="cart.php">Shopping Cart</a>
                       </li>
                       <li>
                           <a href="contact.php">Contact Us</a>
                       </li>
                       
                   </ul><!-- nav navbar-nav left Finish -->
                   
               </div><!-- padding-nav Finish -->
               
               <a href="cart.php" class="btn navbar-btn btn-primary right"><!-- btn navbar-btn btn-primary Begin -->
                   
                   <i class="fa fa-shopping-cart"></i>
                   
                   <span>4 Items In Your Cart</span>
                   
               </a><!-- btn navbar-btn btn-primary Finish -->
               
               <div class="navbar-collapse collapse right"><!-- navbar-collapse collapse right Begin -->
                   
                   <button class="btn btn-primary navbar-btn" type="button" data-toggle="collapse" data-target="#search"><!-- btn btn-primary navbar-btn Begin -->
                       
                       <span class="sr-only">Toggle Search</span>
                       
                       <i class="fa fa-search"></i>
                       
                   </button><!-- btn btn-primary navbar-btn Finish -->
                   
               </div><!-- navbar-collapse collapse right Finish -->
               
               <div class="collapse clearfix" id="search"><!-- collapse clearfix Begin -->
                   
                   <form method="get" action="results.php" class="navbar-form"><!-- navbar-form Begin -->
                       
                       <div class="input-group"><!-- input-group Begin -->
                           
                           <input type="text" class="form-control" placeholder="Search" name="user_query" required>
                           
                           <span class="input-group-btn"><!-- input-group-btn Begin -->
                           
                           <button type="submit" name="search" value="Search" class="btn btn-primary"><!-- btn btn-primary Begin -->
                               
                               <i class="fa fa-search"></i>
                               
                           </button><!-- btn btn-primary Finish -->
                           
                           </span><!-- input-group-btn Finish -->
                           
                       </div><!-- input-group Finish -->
                       
                   </form><!-- navbar-form Finish -->
                   
               </div><!-- collapse clearfix Finish -->
               
           </div><!-- navbar-collapse collapse Finish -->
           
       </div><!-- container Finish -->
       
   </div><!-- navbar navbar-default Finish -->
   
   <div id="content"><!-- #content Begin -->
       <div class="container"><!-- container Begin -->
           <div class="col-md-12"><!-- col-md-12 Begin -->
               
               <ul class="breadcrumb"><!-- breadcrumb Begin -->
                   <li>
                       <a href="index.php">Home</a>
                   </li>
                   <li>
                       Cart
                   </li>
               </ul><!-- breadcrumb Finish -->
               
           </div><!-- col-md-12 Finish -->
           
           <div id="cart" class="col-md-9"><!-- col-md-9 Begin -->
               
               <div class="box"><!-- box Begin -->
                   
                   <form action="cart.php" method="post" enctype="multipart/form-data"><!-- form Begin -->
                       
                       <h1>Shopping Cart</h1>
                       <p class="text-muted">You currently have 3 item(s) in your cart</p>
                       
                       <div class="table-responsive"><!-- table-responsive Begin -->
                           
                           <table class="table"><!-- table Begin -->
                               
                               <thead><!-- thead Begin -->
                                   
                                   <tr><!-- tr Begin -->
                                       
                                       <th colspan="2">Product</th>
                                       <th>Quantity</th>
                                       <th>Unit Price</th>
                                       <th>Type</th>
                                       <th colspan="1">Delete</th>
                                       <th colspan="2">Sub-Total</th>
                                       
                                   </tr><!-- tr Finish -->
                                   
                               </thead><!-- thead Finish -->
                               
                               <tbody><!-- tbody Begin -->
                                   
                                   <tr><!-- tr Begin -->
                                       
                                       <td>
                                           
                                           <img class="img-responsive" src="images/Book_img/php7.png" alt="Product 1">
                                           
                                       </td>
                                       
                                       <td>
                                           
                                           <a href="#">PHP 7</a>
                                           
                                       </td>
                                       
                                       <td>
                                          
                                           1
                                           
                                       </td>
                                       
                                       <td>
                                           150tk
                                           
                                       </td>
                                       
                                       <td>
                                           
                                           Paperback
                                           
                                       </td>
                                       
                                       <td>
                                           
                                           <input type="checkbox" name="remove[]">
                                           
                                       </td>
                                       
                                       <td>
                                           
                                           150tk
                                           
                                       </td>
                                       
                                   </tr><!-- tr Finish -->
                                   
                               </tbody><!-- tbody Finish -->
                               
                               <tbody><!-- tbody Begin -->
                                   
                                   <tr><!-- tr Begin -->
                                       
                                       <td>
                                           
                                           <img class="img-responsive" src="images/Book_img/javascript2.png" alt="Product 3">
                                           
                                       </td>
                                       
                                       <td>
                                           
                                           <a href="#">JAVASCRIPT</a>
                                           
                                       </td>
                                       
                                       <td>
                                          
                                           1
                                           
                                       </td>
                                       
                                       <td>
                                           
                                           250tk
                                           
                                       </td>
                                       
                                       <td>
                                           
                                           Paperback
                                           
                                       </td>
                                       
                                       <td>
                                           
                                           <input type="checkbox" name="remove[]">
                                           
                                       </td>
                                       
                                       <td>
                                           
                                           250tk
                                           
                                       </td>
                                       
                                   </tr><!-- tr Finish -->
                                   
                               </tbody><!-- tbody Finish -->
                               
                               <tbody><!-- tbody Begin -->
                                   
                                   <tr><!-- tr Begin -->
                                       
                                       <td>
                                           
                                           <img class="img-responsive" src="images/Book_img/java.png" alt="Product 6">
                                           
                                       </td>
                                       
                                       <td>
                                           
                                           <a href="#">JAVA</a>
                                           
                                       </td>
                                       
                                       <td>
                                          
                                           2
                                           
                                       </td>
                                       
                                       <td>
                                           
                                           300tk
                                           
                                       </td>
                                       
                                       <td>
                                           
                                           Paperback
                                           
                                       </td>
                                       
                                       <td>
                                           
                                           <input type="checkbox" name="remove[]">
                                           
                                       </td>
                                       
                                       <td>
                                           
                                           600tk
                                           
                                       </td>
                                       
                                   </tr><!-- tr Finish -->
                                   
                               </tbody><!-- tbody Finish -->
                               <tbody><!-- tbody Begin -->

                               <tr><!-- tr Begin -->

                                   <td>

                                       <img class="img-responsive-cart" src="images/Book_img/52problem.png" alt="Product 6">

                                   </td>

                                   <td>

                                       <a href="#">52 Problem Solving</a>

                                   </td>

                                   <td>

                                       1

                                   </td>

                                   <td>

                                       200tk

                                   </td>

                                   <td>

                                       Paperback

                                   </td>

                                   <td>

                                       <input type="checkbox" name="remove[]">

                                   </td>

                                   <td>

                                       200tk

                                   </td>

                               </tr><!-- tr Finish -->

                               </tbody><!-- tbody Finish -->
                               
                               <tfoot><!-- tfoot Begin -->
                                   
                                   <tr><!-- tr Begin -->
                                       
                                       <th colspan="6">Total</th>
                                       <th colspan="1">1200tk</th>
                                       
                                   </tr><!-- tr Finish -->
                                   
                               </tfoot><!-- tfoot Finish -->
                               
                           </table><!-- table Finish -->
                           
                       </div><!-- table-responsive Finish -->
                       
                       <div class="box-footer"><!-- box-footer Begin -->
                           
                           <div class="pull-left"><!-- pull-left Begin -->
                               
                               <a href="index.php" class="btn btn-default"><!-- btn btn-default Begin -->
                                   
                                   <i class="fa fa-chevron-left"></i> Continue Shopping
                                   
                               </a><!-- btn btn-default Finish -->
                               
                           </div><!-- pull-left Finish -->
                           
                           <div class="pull-right"><!-- pull-right Begin -->
                               
                               <button type="submit" name="update" value="Update Cart" class="btn btn-default"><!-- btn btn-default Begin -->
                                   
                                   <i class="fa fa-refresh"></i> Update Cart
                                   
                               </button><!-- btn btn-default Finish -->
                               
                               <a href="checkout.php" class="btn btn-primary">
                                   
                                   Proceed Checkout <i class="fa fa-chevron-right"></i>
                                   
                               </a>
                               
                           </div><!-- pull-right Finish -->
                           
                       </div><!-- box-footer Finish -->
                       
                   </form><!-- form Finish -->
                   
               </div><!-- box Finish -->
               
               <div id="row same-heigh-row"><!-- #row same-heigh-row Begin -->
                   <div class="col-md-3 col-sm-6"><!-- col-md-3 col-sm-6 Begin -->
                       <div class="box same-height headline"><!-- box same-height headline Begin -->
                           <h3 class="text-center">Products You Maybe Like</h3>
                       </div><!-- box same-height headline Finish -->
                   </div><!-- col-md-3 col-sm-6 Finish -->
                   
                   <div class="col-md-3 col-sm-6 center-responsive"><!-- col-md-3 col-sm-6 center-responsive Begin -->
                       <div class="product same-height"><!-- product same-height Begin -->
                           <a href="details.php">
                               <img class="img-responsive" src="images/Book_img/python.png" alt="Product 6">
                            </a>
                            
                            <div class="text"><!-- text Begin -->
                                <h3><a href="details.php">Python</a></h3>
                                
                                <p class="price">330tk</p>
                                
                            </div><!-- text Finish -->
                            
                        </div><!-- product same-height Finish -->
                   </div><!-- col-md-3 col-sm-6 center-responsive Finish -->
                   
                   <div class="col-md-3 col-sm-6 center-responsive"><!-- col-md-3 col-sm-6 center-responsive Begin -->
                       <div class="product same-height"><!-- product same-height Begin -->
                           <a href="details.php">
                               <img class="img-responsive" src="images/Book_img/html5.png" alt="Product 6">
                            </a>
                            
                            <div class="text"><!-- text Begin -->
                                <h3><a href="details.php">Html5</a></h3>
                                
                                <p class="price">350tk</p>
                                
                            </div><!-- text Finish -->
                            
                        </div><!-- product same-height Finish -->
                   </div><!-- col-md-3 col-sm-6 center-responsive Finish -->
                   
                   <div class="col-md-3 col-sm-6 center-responsive"><!-- col-md-3 col-sm-6 center-responsive Begin -->
                       <div class="product same-height"><!-- product same-height Begin -->
                           <a href="details.php">
                               <img class="img-responsive" src="images/Book_img/javascript.png" alt="Product 6">
                            </a>
                            
                            <div class="text"><!-- text Begin -->
                                <h3><a href="details.php">Javascript & Jquery</a></h3>
                                
                                <p class="price">320tk</p>
                                
                            </div><!-- text Finish -->
                            
                        </div><!-- product same-height Finish -->
                   </div><!-- col-md-3 col-sm-6 center-responsive Finish -->
                   
               </div><!-- #row same-heigh-row Finish -->
               
           </div><!-- col-md-9 Finish -->
           
           <div class="col-md-3"><!-- col-md-3 Begin -->
               
               <div id="order-summary" class="box"><!-- box Begin -->
                   
                   <div class="box-header"><!-- box-header Begin -->
                       
                       <h3>Order Summary</h3>
                       
                   </div><!-- box-header Finish -->
                   
                   <p class="text-muted"><!-- text-muted Begin -->
                       
                       Shipping and additional costs are calculated based on value you have entered
                       
                   </p><!-- text-muted Finish -->
                   
                   <div class="table-responsive"><!-- table-responsive Begin -->
                       
                       <table class="table"><!-- table Begin -->
                           
                           <tbody><!-- tbody Begin -->
                               
                               <tr><!-- tr Begin -->
                                   
                                   <td> Order Sub-Total </td>
                                   <th> 1200tk </th>
                                   
                               </tr><!-- tr Finish -->
                               
                               <tr><!-- tr Begin -->
                                   
                                   <td> Shipping and Handling </td>
                                   <td> 0tk </td>
                                   
                               </tr><!-- tr Finish -->
                               
                               <tr><!-- tr Begin -->
                                   
                                   <td> Tax </td>
                                   <th> 0tk </th>
                                   
                               </tr><!-- tr Finish -->
                               
                               <tr class="total"><!-- tr Begin -->
                                   
                                   <td> Total </td>
                                   <th> 1200tk </th>
                                   
                               </tr><!-- tr Finish -->
                               
                           </tbody><!-- tbody Finish -->
                           
                       </table><!-- table Finish -->
                       
                   </div><!-- table-responsive Finish -->
                   
               </div><!-- box Finish -->
               
           </div><!-- col-md-3 Finish -->
           
       </div><!-- container Finish -->
   </div><!-- #content Finish -->
   
   <?php 
    
    include("footer.php");
    
    ?>
    
    <script src="js/jquery-331.min.js"></script>
    <script src="js/bootstrap-337.min.js"></script>
    
    
</body>
</html>