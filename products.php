<?php
require("main.php");
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Products</title>
        <link href="bootstrap.css" rel="stylesheet">
        <link href="style.css" rel="stylesheet">
        <script src="jquery.js"></script>
        <script src="bootstrap.min.js"></script>
    </head>
    <!-- w_1_books.png -->
    <body>
        <?php
        include 'header.php';
        include 'check_if_added.php';
        ?>
        <div class="container" id="content">
            <!-- Jumbotron Header -->
            <div class="jumbotron home-spacer" id="products-jumbotron" style="background-image: url(img/welcome_banner.jpg)">
                <h1 style="text-align: center;color: white;">Welcome to our Store!</h1>
            </div>
            <hr>

            <div class="row text-center" id="cameras">
                <div class="col-md-3 col-sm-6 home-feature">
                    <div class="thumbnail">
                        <img src="img/w_1_books.png" alt="books">
                        <div class="caption">
                            <h3>Political Biography</h3>
                            <p>Price: &#36 180.00 </p>
                            <p>Rating: 4.8/5.0 </p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-block" style="background-color: #1A0900;color: white">Buy Now</a></p>
                                <?php
                            } else {
                                //We have created a function to check whether this particular product is added to cart or not.
                                if (check_if_added_to_cart(1)) { //This is same as if(check_if_added_to_cart != 0)
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else {
                                    ?>
                                    <a href="cart-add.php?id=1" name="add" value="add" class="btn btn-block" style="background-color: #1A0900;color: white">Add to cart</a>
                                    <?php
                                }
                            }
                            ?>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6 home-feature">
                    <div class="thumbnail">
                        <img src="img/s_1.png" alt="books">
                        <div class="caption">
                            <h3>Dr Kalam Life</h3>
                            <p>Price: &#36 120.00 </p>
                            <p>Rating: 4.8/5.0 </p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-block" style="background-color: #1A0900;color: white">Buy Now</a></p>
                                <?php
                            } else {
                                //We have created a function to check whether this particular product is added to cart or not.
                                if (check_if_added_to_cart(2)) { //This is same as if(check_if_added_to_cart != 0)
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else {
                                    ?>
                                    <a href="cart-add.php?id=2" name="add" value="add" class="btn btn-block" style="background-color: #1A0900;color: white">Add to cart</a>
                                    <?php
                                }
                            }
                            ?>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6 home-feature">
                    <div class="thumbnail">
                        <img src="img/s_2.png" alt="books">
                        <div class="caption">
                            <h3>Dan Brown Origin</h3>
                            <p>Price: &#36 150.00</p>
                            <p>Rating: 4.7/5.0 </p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-block" style="background-color: #1A0900;color: white">Buy Now</a></p>
                                <?php
                            } else {
                                //We have created a function to check whether this particular product is added to cart or not.
                                if (check_if_added_to_cart(3)) { //This is same as if(check_if_added_to_cart != 0)
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else {
                                    ?>
                                    <a href="cart-add.php?id=3" name="add" value="add" class="btn btn-block" style="background-color: #1A0900;color: white">Add to cart</a>
                                    <?php
                                }
                            }
                            ?>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6 home-feature">
                    <div class="thumbnail">
                        <img src="img/s_3.png" alt="books">
                        <div class="caption">
                            <h3>Fairy Tales</h3>
                            <p>Price: &#36 200.00</p>
                            <p>Rating: 4.6/5.0 </p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-block" style="background-color: #1A0900;color: white">Buy Now</a></p>
                                <?php
                            } else {
                                //We have created a function to check whether this particular product is added to cart or not.
                                if (check_if_added_to_cart(4)) { //This is same as if(check_if_added_to_cart != 0)
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else {
                                    ?>
                                    <a href="cart-add.php?id=4" name="add" value="add" class="btn btn-block" style="background-color: #1A0900;color: white">Add to cart</a>
                                    <?php
                                }
                            }
                            ?>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row text-center" id="watches">
                <div class="col-md-3 col-sm-6 home-feature">
                    <div class="thumbnail">
                        <img src="img/w_2_thinPaperProducts.png" alt="thinPaperProducts">
                        <div class="caption">
                            <h3>Bible</h3>
                            <p>Price: &#36 75.00 </p>
                            <p>Rating: 4.5/5.0 </p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-block" style="background-color: #1A0900;color: white">Buy Now</a></p>
                                <?php
                            } else {
                                //We have created a function to check whether this particular product is added to cart or not.
                                if (check_if_added_to_cart(5)) { //This is same as if(check_if_added_to_cart != 0)
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else {
                                    ?>
                                    <a href="cart-add.php?id=5" name="add" value="add" class="btn btn-block" style="background-color: #1A0900;color: white">Add to cart</a>
                                    <?php
                                }
                            }
                            ?>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6 home-feature">
                    <div class="thumbnail">
                        <img src="img/s_4.png" alt="thinPaperProducts">
                        <div class="caption">
                            <h3>Bhagwat Gita</h3>
                            <p>Price: &#36 85.00 </p>
                            <p>Rating: 4.4/5.0 </p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-block" style="background-color: #1A0900;color: white">Buy Now</a></p>
                                <?php
                            } else {
                                //We have created a function to check whether this particular product is added to cart or not.
                                if (check_if_added_to_cart(6)) { //This is same as if(check_if_added_to_cart != 0)
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else {
                                    ?>
                                    <a href="cart-add.php?id=6" name="add" value="add" class="btn btn-block" style="background-color: #1A0900;color: white">Add to cart</a>
                                    <?php
                                }
                            }
                            ?>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6 home-feature">
                    <div class="thumbnail">
                        <img src="img/s_5.png" alt="thinPaperProducts">
                        <div class="caption">
                            <h3>German Dictionary</h3>
                            <p>Price: &#36 220.00 </p>
                            <p>Rating: 4.3/5.0 </p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-block" style="background-color: #1A0900;color: white">Buy Now</a></p>
                                <?php
                            } else {
                                //We have created a function to check whether this particular product is added to cart or not.
                                if (check_if_added_to_cart(7)) { //This is same as if(check_if_added_to_cart != 0)
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else {
                                    ?>
                                    <a href="cart-add.php?id=7" name="add" value="add" class="btn btn-block" style="background-color: #1A0900;color: white">Add to cart</a>
                                    <?php
                                }
                            }
                            ?>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6 home-feature">
                    <div class="thumbnail">
                        <img src="img/s_6.png" alt="thinPaperProducts">
                        <div class="caption">
                            <h3>French Dictionary</h3>
                            <p>Price: &#36 230.00 </p>
                            <p>Rating: 4.2/5.0 </p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-block" style="background-color: #1A0900;color: white">Buy Now</a></p>
                                <?php
                            } else {
                                //We have created a function to check whether this particular product is added to cart or not.
                                if (check_if_added_to_cart(8)) { //This is same as if(check_if_added_to_cart != 0)
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else {
                                    ?>
                                    <a href="cart-add.php?id=8" name="add" value="add" class="btn btn-block" style="background-color: #1A0900;color: white">Add to cart</a>
                                    <?php
                                }
                            }
                            ?>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row text-center" id="shirts">
                <div class="col-md-3 col-sm-6 home-feature">
                    <div class="thumbnail">
                        <img src="img/w_3_magazines.png" alt="magazines">
                        <div class="caption">
                            <h3>Mercedes</h3>
                            <p>Price: &#36 80.00 </p>
                            <p>Rating: 4.1/5.0 </p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-block" style="background-color: #1A0900;color: white">Buy Now</a></p>
                                <?php
                            } else {
                                //We have created a function to check whether this particular product is added to cart or not.
                                if (check_if_added_to_cart(9)) { //This is same as if(check_if_added_to_cart != 0)
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else {
                                    ?>
                                    <a href="cart-add.php?id=9" name="add" value="add" class="btn btn-block" style="background-color: #1A0900;color: white">Add to cart</a>
                                    <?php
                                }
                            }
                            ?>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6 home-feature">
                    <div class="thumbnail">
                        <img src="img/s_7.png" alt="magazines">
                        <div class="caption">
                            <h3>Vistara</h3>
                            <p>Price: &#36 100.00</p>
                            <p>Rating: 4.0/5.0 </p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-block" style="background-color: #1A0900;color: white">Buy Now</a></p>
                                <?php
                            } else {
                                //We have created a function to check whether this particular product is added to cart or not.
                                if (check_if_added_to_cart(10)) { //This is same as if(check_if_added_to_cart != 0)
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else {
                                    ?>
                                    <a href="cart-add.php?id=10" name="add" value="add" class="btn btn-block" style="background-color: #1A0900;color: white">Add to cart</a>
                                    <?php
                                }
                            }
                            ?>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6 home-feature">
                    <div class="thumbnail">
                        <img src="img/s_8.png" alt="magazines">
                        <div class="caption">
                            <h3>Airports</h3>
                            <p>Price: &#36 150.00</p>
                            <p>Rating: 3.9/5.0 </p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-block" style="background-color: #1A0900;color: white">Buy Now</a></p>
                                <?php
                            } else {
                                //We have created a function to check whether this particular product is added to cart or not.
                                if (check_if_added_to_cart(11)) { //This is same as if(check_if_added_to_cart != 0)
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else {
                                    ?>
                                    <a href="cart-add.php?id=11" name="add" value="add" class="btn btn-block" style="background-color: #1A0900;color: white">Add to cart</a>
                                    <?php
                                }
                            }
                            ?>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6 home-feature">
                    <div class="thumbnail">
                        <img src="img/s_9.png" alt="magazines">
                        <div class="caption">
                            <h3>Compass</h3>
                            <p>Price &#36 130.00</p>
                            <p>Rating: 3.8/5.0 </p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-block" style="background-color: #1A0900;color: white">Buy Now</a></p>
                                <?php
                            } else {
                                //We have created a function to check whether this particular product is added to cart or not.
                                if (check_if_added_to_cart(12)) { //This is same as if(check_if_added_to_cart != 0)
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else {
                                    ?>
                                    <a href="cart-add.php?id=12" name="add" value="add" class="btn btn-block" style="background-color: #1A0900;color: white">Add to cart</a>
                                    <?php
                                }
                            }
                            ?>
                            </a>
                        </div>
                    </div>
                </div>

            </div>
            <hr>
        </div>
    </body>

</html>
