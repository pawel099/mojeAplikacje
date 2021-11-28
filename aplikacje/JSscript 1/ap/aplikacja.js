  
  var start = 0;
  var x = 1;
  var y = 500;
  var t= 50;
  
    
  function dane() {
	  
   document.getElementById('push').style.left=x+"px";
   x++;
  
   if (start==0)  {
		x++;
  }
		 
	  if (x>y) {
	  
	  y--;
	  
	 document.getElementById('push').style.left=y+"px";
	 
	}
	  
	   if (y<1)  {
		  
		  y = 1;  
	}
	
	   if (y>250)  {
	  
	 t++;
	  
	  document.getElementById('push').style.top=t+"px"; 
	  
	  }
	
	  setTimeout("dane();",12); 
 }	 
 
		 
	 
	
 
 var index =0;	
 
 function rotateImage() {
	 
	 
 var tablica = new Array("../images/kat.jpg","../images/wielkanoc.gif");
	     
 document.images.src = tablica[index];
 index++;
		  
		   
  if (index>=tablica.length) {
			  
  index = 0;
		 
  }
	 
    setTimeout("rotateImage();",1000); 
 
}

 
 
