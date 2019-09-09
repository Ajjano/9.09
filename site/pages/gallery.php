<h1>Gallery Page</h1>
<div class="row">
    <?php
        $path='images/';
        $dir=opendir($path);
        $ar=[];
        while(($file=readdir($dir)) !=null){
            $full_name=$path.$file;
            if($file!='.'&&$file!='..'){
                echo "<div class='col-md-4'><img class='img-responsive thumbnail img-rounded' src='images/$file' alt='picture'></div>";
            }
        }
    ?>
</div>