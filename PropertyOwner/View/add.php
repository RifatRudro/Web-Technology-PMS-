<?php 
$title = "Add Product";

require_once('header.php');

require_once('../controller/product.php');
?>
 </nav>
 <div class="container" style="text-align: center;">
     
        <form method="post" action="../controller/addcheck.php" enctype="multipart/form-data">

        <div class="illustration" ></div>
            <div class="mb-3">
                <h4 class="text-center bg-dark text-white">Add Product</h4>
            </div>
            <div class="mb-3" >  <span class="text-dark">Name: </span><input class="form-control" type="text" value="" name="productName"></div>
            <div class="mb-3"><span class="text-dark">Description:</span><textarea class="form-control" type="text" value="" name="description"></textarea></div>
            <div class="mb-3"><span class="text-dark">Category:</span><input class="form-control" type="text" value="" name="category"></div>
            <div class="mb-3"><span class="text-dark">Price:</span><input class="form-control" type="text" value="" name="price"></div>
           
            <div class="mb-3">

                <span>Image </span>

                <img src="../view/assets/img/meeting.jpg" id="previewImg" width="150px">
                <input class="btn btn-success" type="file" name="file" id="file" onchange="document.getElementById('previewImg').src = window.URL.createObjectURL(this.files[0])">

            </div>
            
            <div class="mb-1">
                
            <button class="btn btn-success d-block w-100" type="submit" name="submit">Add Product</button></div>

        </form>
 </div>
      

