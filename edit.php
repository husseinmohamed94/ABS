<?Php
require 'config.php';
require  'header.php' ;
if(isset($_GET['id'])  AND  $_GET ['id'] > 0 ) {

    $id = trim(intval(abs($_GET['id'])));
    $title = mksafa($_POST['title']);
    $coment= mksafa($_POST['coment']);

    $posts = mysqli_query($db_connect, 'UPDATE post SET titel='".$title."' , coment='".$coment . "'  WHERE  $id = id ');
    if (mysqli_num_rows($posts) > 0) {
        $post = mysqli_fetch_array($posts);

        echo "
<form action='index.php' method='post'>
       <div class='form-group'>
    <input type='text'  name='title' value=' $post[titel]' class='form - control'  placeholder='ادخل العنوان' />
    </div>
    
    <div class=\"form-group\">
    <textarea name='coment'  rows='10' value =' $post[coment]' class='form-control'  placeholder='ادخل المحتوي' ></textarea>
    </div>  
    
     <input type=\"submit\" name=\"submit\" class=\"btn btn-lg btn-primary\"  value=\"اضافه مدونه\" />
</form>

          ";

    }

}
?>        





        
        
    







<?php require 'footer.php' ?>
