<!DOCTYPE html>
<html lang="en">
<head>
	<script src="jquery.js" type="text/javascript"></script>
    <script src="bootstrap.js" type="text/javascript"></script>
	
	<script>
	
	function search ( )
	{
		window.location = window.location+document.getElementById('isbn').value;
	}
	
	</script>
	
	<meta charset="utf-8">
	<title>Book Search</title>
    
	<style type="text/css">

	::selection{ background-color: #E13300; color: white; }
	::moz-selection{ background-color: #E13300; color: white; }
	::webkit-selection{ background-color: #E13300; color: white; }

	#isbn {
    border: 5px solid black; 
    -webkit-box-shadow: 
      inset 0 0 8px  rgba(0,0,0,0.1),
            0 0 16px rgba(0,0,0,0.1); 
    -moz-box-shadow: 
      inset 0 0 8px  rgba(0,0,0,20),
            0 0 16px rgba(0,0,0,20); 
    box-shadow: 
      inset 0 0 8px  rgba(0,0,0,0.1),
            0 0 16px rgba(0,0,0,0.1); 
    padding: 15px;
    background: rgba(255,255,255,0.5);
    margin: 0 0 10px 0;
     } 
	body {
		background-color: white;
		
		font: 13px/20px normal Helvetica, Arial, sans-serif;
		color: black;
		
	}

	a {
		color: #003399;
		background-color: transparent;
		font-weight: normal;
	}

	h1 {
		color: white;
		background-color: transparent;
		font-size: 25px;
		font-weight: bold;
		padding: 14px 15px 10px 15px;
		display: inline-block;	
	}

	code {
		font-family: Consolas, Monaco, Courier New, Courier, monospace;
		font-size: 12px;
		background-color: #f9f9f9;
		border: 1px solid #D0D0D0;
		color: #002166;
		display: block;
		margin: 14px 0 14px 0;
		padding: 12px 10px 12px 10px;
	}

	
	
	p.footer{
		text-align: right;
		font-size: 11px;
		border-top: 1px solid #D0D0D0;
		line-height: 32px;
		padding: 0 10px 0 10px;
		margin: 20px 0 0 0;
		background-color:#C6AEC7;
	}
	
	#container{
		text-align:right;
        padding-bottom:20px;
		padding-top:10px;
		border: 5px solid #D0D0D0;
		-webkit-box-shadow: 0 0 8px #D0D0D0;
		background-color:#80BFFF;
	}
  #img
  {
    padding-top:0px;
 }
 #para
 {
  
   padding-bottom:10px;
   margin-left:40px;
   text-shadow: 5px 5px 5px #000000;
   color:#800080;
   font-size:25px;
   line-height:150%;
 }
 #form
 {
   
   text-align:center;
 }
 #submit
 {
   position:relative;
   top:18px;
 }

  #img
 {
   position:relative;
   top:0px;
 }
#hello1
{
  text-align:left;
}
#hello
{
  text-align:right;
}

	</style>
</head>
<body>

<div id="container">
	<h1>Book Search Application</h1>
	<img id="img" src="images/book.png" height="90px" width="120px" align="left" style="margin-left: 10px">
</div>

	<div id="body">
		<p id="para">Hi,this is Snehasis, currently studying at VIT in the Computer Science department<br>who likes to code and play computer games.
		 <br>Known languages are php,c,c++,javascript,css,asp,mysql and basics of python.<br>Github link: <a href="http://github.com/snehasis419">http://github.com/snehasis419</a><br>
          Email:snehasis.saha2010@vit.ac.in		 
		  </p>
</div>
<div id="form">
    <input style="margin: 0 auto;" id="isbn" type="text" name="isbn" placeholder="Enter the ISBN Number of the book you want to search" size="50">&nbsp&nbsp&nbsp&nbsp
    <input id="submit" type="image" name="submit" value="Search" src="images/button.png" height="50px" width="210px" onClick="search()">
    <div>
        <div id="hello">	
		  <img src="images/search1.jpg" width="250px" height="250px" id="img"> 
		   <img src="images/search.jpg" width="250px" height="250px" id="img"> 
		   <img src="images/search2.jpg" width="250px" height="250px" id="img" align="left"> 
		 </div>
        
</div>

	<p class="footer">Created by Snehasis Saha.&nbsp&nbsp&nbspPage rendered in <strong>{elapsed_time}</strong> seconds</p>


</body>
</html>