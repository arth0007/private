<?php



foreach ((array) $_POST['remove'] as $remove_id) {
    $delete_item = "delete from vendor_account where item_id='$remove_id'";
    $run_delete = mysqli_query($con, $delete_item);
    if ($run_delete){
        echo "<h3> was deleted successfully</h3>";
    }
}


?>