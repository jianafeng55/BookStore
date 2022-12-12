<?php
function check_if_added_to_cart($item_id) {
    $user_id = $_SESSION['user_id']; //We'll get the user_id from the session
	$con = mysqli_connect("127.0.0.1", "root", "QQqq199500", "jianafeng")or die($mysqli_error($con));   
    $query = "SELECT * FROM orders WHERE item_id='$item_id' AND user_id ='$user_id' and status='Added to cart'";
    $result = mysqli_query($con, $query) or die(mysqli_error($con));
    if (mysqli_num_rows($result) >= 1) {
        return 1;
    } else {
        return 0;
    }
}
?>