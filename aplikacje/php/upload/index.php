<!doctype html>
<html lang="en">
<head>
    
<!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>upload</title>
  </head>
  <body>
  
<style>
  
 .custom-file {
  
  position:relative;
  left:300px;
  top:150px;
  width:600px;
 
  }
  
.xHeaders {
 padding:80px 30px 10px 10px;
 background-color:#f5f5f5;
 
 }
  
   
  
</style>
  
   

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	

	<div class="xHeaders">
	</div>
          <div class="custom-file">
		  
			   
			   <form enctype="multipart/form-data" method="POST">
               <input type="file" name="plik" class="custom-file-input" id="customFile">
			    
               <label class="custom-file-label" for="customFile">Choose file</label>
			   <button type="submit" name="wyslij" style="margin-top:20px;height:35px;font-family:Courier New;"  class="btn btn-primary">wyslij plik</button>
			   </form>
			   
			   
			   
<?php 

   
  
function uploads($files,$tmpFiles) {
	
	 
        $move = move_uploaded_file($tmpFiles,$_SERVER['DOCUMENT_ROOT'].'/obrazki/'.$files);
	    switch($move) {
			
		case false:
		echo 'plik nie wysłany poprawnie';
			
		break;
	    default:
		$move;
		
		}
			
			
}
		
}
		
 
    
  
       uploads();	 
  
  

?>


</div>
</html>


















