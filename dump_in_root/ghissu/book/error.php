<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>error</title>

	<style type="text/css">

	::selection{ background-color: #E13300; color: white; }
	::moz-selection{ background-color: #E13300; color: white; }
	::webkit-selection{ background-color: #E13300; color: white; }


	body {
		background-color: white;
		
		font: 13px/20px normal Helvetica, Arial, sans-serif;
		color: black;
		
	}

	

	h1 {
		color: white;
		background-color: transparent;
		font-size: 25px;
		font-weight: bold;
		padding: 14px 15px 10px 15px;
		display: inline-block;	
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

 #para
 {
  
   padding-bottom:70px;
   margin-left:40px;
   color:red;
   font-size:25px;
   line-height:150%;
 }


 #hello
 {
    text-align:right;
 }	
#form
{
  text-align:center;
}


	</style>
</head>
<body>

<div id="container">
	<h1>Book Search Application</h1>
	<img id="img" src="images/book.png" height="90px" width="120px" align="left" style="margin-left: 10px">
</div>

	<div id="body">
		<p id="para">Error! Entered ISBN Number Does Not Exist in Database!!!	 
		  </p>
</div>
<div id="form">		   
		   <input id="submit" type="image" name="submit" value="Search" src="images/back.jpg" height="60px" width="250px" onClick="javascript:window.location='http://127.0.0.1:8080/ghissu/book/'">
</div>
        <div id="hello">	
		  <img src="images/search1.jpg" width="250px" height="250px" id="img"> 
		   <img src="images/search.jpg" width="250px" height="250px" id="img">
           <img src="images/search2.jpg" width="250px" height="250px" id="img" align="left"> 
		 </div>
        


	<p class="footer">Created by Snehasis Saha.</p>


</body>
</html>