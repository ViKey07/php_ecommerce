<?php
    if(isset($_GET['edit_account'])){
        $user_session_name = $_SESSION['username'];
        $select_query = "SELECT * FROM `user_table` WHERE username = '$user_session_name'";
        $result_query = mysqli_query($con, $select_query);
        $row_fetch = mysqli_fetch_assoc($result_query);
        $user_id = $row_fetch['user_id'];
        $username = $row_fetch['username'];
        $user_email = $row_fetch['user_email'];
        $user_address = $row_fetch['user_address'];
        $user_mobile = $row_fetch['user_mobile'];
        
    }
        if(isset($_POST['user_update'])){
            $update_id = $user_id;
            $username = $_POST['username'];
            $user_email = $_POST['user_email'];
            $user_address = $_POST['user_address'];
            $user_mobile = $_POST['user_mobile'];


            $update_data = "UPDATE `user_table` SET username = '$username', user_email = '$user_email', user_address = '$user_address', user_mobile = '$user_mobile' WHERE user_id = $update_id";
            $result_query_update = mysqli_query($con, $update_data);
            if($result_query_update){
                echo "<script>alert('Data updated successfully!')</script>";
                echo "<script>window.open('logout.php', '_self')</script>";
            }
        }
    
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit account</title>
</head>
<body>
    <h3 class="text-center text-success mb-4">Edit Account '$user_mobile'</h3>
    <form action="" method="post">
        <div class="form-outline mb-4">
            <input type="text" name="username"  class="form-control w-50 m-auto" value="<?php echo $username ?>">
        </div>

        <div class="form-outline mb-4">
            <input type="email" name="user_email" class="form-control w-50 m-auto" value="<?php echo $user_email ?>">
        </div>

        <div class="form-outline mb-4">
            <input type="text" name="user_address" class="form-control w-50 m-auto" value="<?php echo $user_address ?>">
        </div>

        <div class="form-outline mb-4">
            <input type="text" name="user_mobile" class="form-control w-50 m-auto" value="<?php echo $user_mobile ?>">
        </div>

        <input type="submit" name="user_update" value="update" class="bg-info py-2 px-3 border-0">
    </form>

</body>
</html>


