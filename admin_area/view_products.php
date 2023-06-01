
<h3 class="text-center text-success">All Products</h3>
<table class="table table-bordered mt-5">
    <thead class="bg-info">
        <tr>
            <th>Product ID</th>
            <th>Product Title</th>
            <th>Product Image</th>
            <th>Product Price</th>
            <th>Total Sold</th>
            <th>Status</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
    </thead>
    <tbody class="bg-secondary text-light">
        <?php 
            $get_products = "SELECT * FROM `products`";
            $result = mysqli_query($con, $get_products);
            while($row = mysqli_fetch_assoc($result)){
                $product_id = $row['product_id'];
                $product_title = $row['product_title'];
                $product_image = $row['product_image'];
                $product_price = $row['product_price'];
                $status = $row['status'];
                echo "<tr class='text-center'>
                <td>1</td>
                <td>Mango</td>
                <td>Img</td>
                <td>444</td>
                <td>0</td>
                <td>true</td>
                <td><a href='' class='text-light'><i class='fa-solid fa-pen-to-square'></i></a></td>
                <td><a href='' class='text-light'><i class='fa-solid fa-trash'></i></a></td>
            </tr>";
            }
        ?>
        
    </tbody>
</table>

