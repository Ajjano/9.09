<?php
if(!isset($_POST['sub_btn'])):?>
<form action="index.php" method="post">
    <div class="form-group">
        <label for="log">Login</label>
        <input type="text" name="log" class="form-control">
    </div>
    <div class="form-group">
        <label for="pas">Login</label>
        <input type="password" name="pas" class="form-control">
    </div>
    <input type="submit" name="sub_btn" class="form-control">
</form>
<?php else:?>
    <?php
        if(login($_POST['log'], $_POST['pas'])){
            echo "<h3><span style='color:green'>You are logged in</span></h3>";
        }
        ?>
<?php endif;?>
