<?php




include 'config.php';
 include 'header.php';


?> 
     



<div class="container">
    
  

    
    
    <h3>المواضيع الرئيسه</h3>
    
    <?php
    if(isset($_GET['id'])   AND    $_GET ['id'] > 0 ){ 
        
        $id = trim(intval(abs($_GET['id']  )));
     
    $posts=mysqli_query($db_connect , "select * from post  where id='$id'");
    if(mysqli_num_rows($posts) > 0){ 
        $post = mysqli_fetch_array($posts);
        echo "
        <div>
        <a href='edit.php?id=$post[id]'>
        <h1> $post[titel]</h1>
        </a>
        
        <p> 
        " .nl2br ( $post['coment'] ) . " 
        </p>
        <p class='text-muted' >
        
        $post[created]
        </p>
        
        </div>
        
        ";} else{
    
        echo " <p class='alert alert-info'> لايوجد بيانات </p>";
        }
    }
    ?>
    
    
      
         </div>
          





          
          
          
 <?php include 'footer.php' ?>  