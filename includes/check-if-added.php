<?php function check_if_added_to_cart($item_id){
     require 'includes/common.php';
     $user_id=$_SESSION['id'];
     //echo $user_id;
     $check_query="SELECT * FROM users_items WHERE item_id='$item_id' AND user_id ='$user_id' AND status='Added to cart'";
     $check_query_result=mysqli_query($con,$check_query) or die(mysqli_error());
     if(mysqli_num_rows($check_query_result)>=1)
     {
         return 1;
     }
     else
     {
         return 0;
     }
         
     
}
?>
