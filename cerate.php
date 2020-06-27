<?php
function mksafa($data){
$data = trim($data);
$data = strip_tags($data);
$data = htmlspecialchars($data);
$data = addslashes($data);
    
return $data;
    
}



include 'config.php';
 include 'header.php'; 
?> 

<div class="container">
    <?php 
    if(isset($_POST['submit'])){
        if(empty($_POST['title']) OR empty($_POST['coment'])){
           echo "<p class='alert alert-warning'> لايمكنك ترك احد الحقول فارغه</p>";
            
         } else{
    
    $title = mksafa($_POST['title']);
    $coment= mksafa($_POST['coment']);

    $date = date('y-m-d');
    mysqli_query($db_connect , "insert into  post(titel ,coment , created ) values (' $title ','$coment','$date') "  )  ;
          
          echo "<p class='alert alert-success'>  تم الاضافه بنجاح   </p>" ;
      } 
    
    }

    ?>
    
<h1>ضافه مدونه جديده</h1>
<form action="cerate.php" method="post">
    
    <div class="form-group">
    <input type='text' name="title" class="form-control"  placeholder="ادخل العنوان" />
    </div>
    
     
<div class="form-group">
    <textarea name="coment"  rows="10" class="form-control"  placeholder="ادخل المحتوي" ></textarea>
    </div>  
    
 
    <input type="submit" name="submit" class="btn btn-lg btn-primary"  value="اضافه مدونه" />
    
    </form>
    

</div>

         
 <?php include 'footer.php' ?> 