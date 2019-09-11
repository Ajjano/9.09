<?php
if(isset($_POST['exit'])){
    session_destroy();
    echo '<script>window.location="index.php?page=1";</script>';
}
?>

<ul class="nav nav-pills">
    <li role="presentation" class="active"><a href="index.php?page=1">Home</a></li>
    <li role="presentation"><a href="index.php?page=2">Upload</a></li>
    <li role="presentation"><a href="index.php?page=3">Gallery</a></li>
    <li role="presentation"><a href="index.php?page=4">Registration</a></li>
    <li>
        <form action="#" method="post">
            <input type="submit" class="button_exit" name="exit" value="Exit">
        </form></li>
</ul>