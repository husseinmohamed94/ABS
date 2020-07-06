<?php include 'config.php' ?>
<?php include 'header.php' ?> 
        
<div class="container">
    
  

    
    
    <h3>المواضيع الرئيسه</h3>
    
    <?php
    
    $posts=mysqli_query($db_connect , "select * from post order by created  desc ");
    if(mysqli_num_rows($posts) > 0){ 
        while($post = mysqli_fetch_array($posts)){
        echo "
        <div>
        <a href='post.php?id=$post[id]'>
        <h1> $post[titel]</h1>
        </a>
        <p>  <a href = 'edit.php ?id=$post[id]>'  class ='btn btn-info'>edit</a></p>
        <p> <a onclick='return confirm('Are you sure you want to delete this entry? ')  href ='delete.php?id=$post[id] ?>' class='btn btn-danger'>delete</a></p>
        <p>
      
        $post[coment]
    
        </p>
        <p class='text-muted' >
        
        $post[created]
        </p>
       
        </div>
        
        ";} 
            }else{
    
        echo " <p class='alert alert-info'> لايوجد بيانات </p>";
        }
		
    ?>
    
 


		
		
         </div>
          

          
          
 <?php include 'footer.php' ?>  