<h1>Upload Page</h1>

<?php

 if(isset($_SESSION['registered_user'])):?>
     <?php if(!isset($_POST['upp_btn'])):?>
    <form action="index.php?page=2" method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label for="file">File for upload: </label>
            <input type="file" name="file" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary" name="upp_btn">Upload image</button>
    </form>
    <?php else:?>
        <?php
            if($_FILES['file']['error']!=0){
                $error_code=$_FILES['file']['error'];
                echo "<h3><span style='color: red'>Upload error code: $error_code</span></h3>";
            }
            else{
                if(is_uploaded_file($_FILES['file']['tmp_name'])){
                    move_uploaded_file($_FILES['file']['tmp_name'],"images/".$_FILES['file']['name']);
                    echo "<h3><span style='color: green'>Uploaded</span></h3>";
                }
            }
        ?>
    <?php endif;?>
    <?php else:?>
 <?php
     echo "<h3><span style='color: red'>User is not registered!</span></h3>";
?>
     <?php endif;?>
