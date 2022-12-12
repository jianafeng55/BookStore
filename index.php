<?php
require("main.php");

if (isset($_SESSION['email'])) {
  header('location: products.php');
}

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Welcome</title>
        <!-- Bootstrap Core CSS -->
        <link href="bootstrap.css" rel="stylesheet">
        <!-- Custom CSS -->
        <link href="style.css" rel="stylesheet">
        <!-- jQuery -->
        <script src="jquery.js"></script>
        <!-- Bootstrap Core JavaScript -->
        <script src="bootstrap.min.js"></script>
    </head>
    <body style="padding-top: 50px;">
        <?php
        include 'header.php';
        ?>

        <div id="content">
            <!--Slider Start -->

	  <div id="myCarousel" class="carousel slide" data-ride="carousel">
		
      <!-- Indicators -->
		  
      <ol class="carousel-indicators">
	    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
			  <li data-target="#myCarousel" data-slide-to="1"></li>
			  <li data-target="#myCarousel" data-slide-to="2"></li>
	    </ol>
		  
      <div class="carousel-inner" role="listbox">
			  
        <div class="item active">
				  <img class="first-slide" src="img/front_1.jpg" alt="First slide" style="height:660px;width:1800px;">
				  <div class="container">
					  <div class="carousel-caption">
						  <h1><strong>Welcome to the World's Largest Book Store</strong></h1>
					  </div>
				  </div>
			  </div>
			  
        <div class="item">
				  <img class="second-slide" src="img/front_2.jpg" alt="Second slide" style="height:660px;width:1800px;">
				  <div class="container">
					  <div class="carousel-caption">
						  <h1><b>Now product is right at your finger tip</b></h1>
					  </div>
				  </div>
			  </div>
			
        <div class="item">
				  <img class="third-slide" src="img/front_3.jpg" alt="Third slide" style="height:660px;width:1800px;">
				  <div class="container">
					  <div class="carousel-caption">
						  <h1><b>We have large varieties of books & magazines</b></h1>
					  </div>
				  </div>
			  </div>
		  
      </div>

		  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
	
		  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
	
	  </div>

	  <!--Slider End -->
            <div style="text-align: center;margin-top: 40px">
            	<h1 style="color: #1A0900">Our Products</h1>
            </div>

            <!--Item categories listing-->
            <div class="container">
                <div class="row text-center" id="item_list">
                    <div class="col-sm-4">
                        <a href="products.php#cameras" >
                            <div class="thumbnail">
                                <img src="img/new_s_1.png" alt="Books Image">
                                <div class="caption">
                                    <h3 style="color: #1A0900">Books</h3>
                                    <p style="color: #1A0900">Trade | Science, Technical & Medical | Law</p>
                                </div>
                            </div> 
                        </a>
                    </div>

                    <div class="col-sm-4">
                        <a href="products.php#watches" >
                            <div class="thumbnail">
                                <img src="img/s_4" alt="Thin Paper Products Image">
                                <div class="caption">
                                    <h3 style="color: #1A0900">Religion & Dictionary</h3>
                                    <p style="color: #1A0900">Bible & Religious | Dictionaries | Directories</p>
                                </div>
                            </div> 
                        </a>
                    </div>

                    <div class="col-sm-4">
                        <a href="products.php#shirts" >
                            <div class="thumbnail">
                                <img src="img/new_s_222" alt="Magazines Image">
                                <div class="caption">
                                    <h3 style="color: #1A0900">Magazines</h3>
                                    <p style="color: #1A0900">Vistara | Mercedes | India Today</p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            
            <!--Item categories listing end-->
        </div>
        
        <!--Footer-->
        <!-- <?php
        ?> -->
        <!--Footer end-->
   
    </body> 
</html>