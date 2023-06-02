<?php 
    if(isset($_GET['edit_products'])){
        $edit_id = $_GET['edit_products'];
        
        $get_data = "SELECT * FROM `products` WHERE product_id = $edit_id";
        $result = mysqli_query($con, $get_data);
        $row = mysqli_fetch_assoc($result);
        $product_title = $row['product_title'];
        $product_description = $row['product_description'];
        $product_keywords = $row['product_keywords'];
        $category_id = $row['category_id'];
        $product_image = $row['product_image'];
        $product_price = $row['product_price'];

        $select_category = "SELECT * FROM `categories` WHERE category_id = $category_id";
        $result_category = mysqli_query($con, $select_category);
        $row_category = mysqli_fetch_assoc($result_category);
        $category_title = $row_category['category_title'];
    }
?>

<div class="container mt-5">
    <h1 class="text-center">Edit Product</h1>
    <form action="" method="post" enctype="multipart/form-data">
        <div class="form-outline w-50 m-auto mb-4">
            <label for="product_title" class="form-label">Product Title</label>
            <input type="text" name="product_title" id="product_title" value="<?php echo $product_title ?>" class="form-control" required>
        </div>

        <div class="form-outline w-50 m-auto mb-4">
            <label for="product_description" class="form-label">Product Description</label>
            <input type="text" name="product_description" id="product_description" value="<?php echo $product_description ?>" class="form-control" required>
        </div>

        <div class="form-outline w-50 m-auto mb-4">
            <label for="product_keywords" class="form-label">Product Keywords</label>
            <input type="text" name="product_keywords" id="product_keywords" value="<?php echo $product_keywords ?>" class="form-control" required>
        </div>

        <div class="form-outline w-50 m-auto mb-4">
        <label for="product_categories" class="form-label">Product Categories</label>
            <select name="product_category" class="form-select">
                <option value="<?php echo $category_title ?>"><?php echo $category_title ?></option>
                <?php
                    $select_category_all = "SELECT * FROM `categories`";
                    $result_category_all = mysqli_query($con, $select_category_all);
                    while($row_category_all = mysqli_fetch_assoc($result_category_all)){
                        $category_title = $row_category_all['category_title'];
                        $category_id = $row_category_all['category_id'];
                        echo "<option value='$category_id'>$category_title</option>";
                    };
                ?>
            </select>
        </div>

        <div class="form-outline w-50 m-auto mb-4">
            <label for="product_image" class="form-label">Product Image</label>
            <div class="d-flex">
                <input type="file" name="product_image" id="product_image" class="form-control w-90 m-auto" required>
                <img src="./product_images/<?php echo $product_image ?>" alt="" class="product_image"/>
            </div>
        </div>

        <div class="form-outline w-50 m-auto mb-4">
            <label for="product_price" class="form-label">Product Price</label>
            <input type="text" name="product_price" id="product_price" value="<?php echo $product_price ?>" class="form-control" required>
        </div>

        <div class="form-outline w-50 m-auto mb-4">
            <input type="submit" name="edit_products" id="edit_products" value="Update Product" class="btn btn-info px-3 mb-3">
        </div>
    </form>
</div>

<?php
    if(isset($_POST['edit_products'])){
        $product_title = $_POST['product_title'];
        $product_description = $_POST['product_description'];
        $product_keywords = $_POST['product_keywords'];
        $product_category = $_POST['product_category'];
        $product_price = $_POST['product_price'];

        $product_image = $_FILES['product_image']['name'];
        $temp_image = $_FILES['product_image']['tmp_name'];
        

        if($product_title == '' or $product_description == '' or $product_keywords == '' or $product_category == '' or $product_image == '' or $product_price == ''){
            echo "<script>alert('Please fill all field!')</script>";
        }else{
            move_uploaded_file($temp_image, "./product_images/$product_image");
            $update_product = "UPDATE `products` SET product_title = '$product_title', product_description = '$product_description', product_keywords = '$product_keywords', category_id = '$product_category', product_image = '$product_image', product_price = '$product_price', date = NOW() WHERE product_id = $edit_id";
            $result_update = mysqli_query($con, $update_product);
            if($result_update){
                echo "<script>alert('Product updated successfully!')</script>";
                echo "<script>window.open('./insert_product.php', '_self')</script>";
            }
        }
    }
?>