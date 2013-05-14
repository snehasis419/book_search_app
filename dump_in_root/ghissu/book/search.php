<html>
<head>
<title>
Search Results
</title>
<link rel="stylesheet" type="text/css" href="bootstrap.css">
<style>
#table
{
  padding:15px;
 
}
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
  #img
  {
    padding-top:0px;
 }


 #submit
 {
   position:relative;
   top:18px;
 }



</style>  
</head>
<body>
<?php
include 'xss_encode.php';
$db_type = "mysql";
$hostname = "localhost";
$username = "root";
$password = "";
$db = "ghissu";
$dbh = new PDO ( "$db_type:host=$hostname;dbname=$db", $username, $password );
$err_no = 0;  
$query = "SELECT * FROM `crossword_data` WHERE `isbn`=:isbn;";
$stmt = $dbh->prepare ( $query );
$stmt->bindParam ( ":isbn", $_GET['isbn'] );
$stmt->execute();
$rslt = $stmt->fetch(PDO::FETCH_ASSOC);
if($rslt==false)
{
  header("Location:error.php");
}  
$id=$rslt['id'];
$id=xss_encode($id,0)[1];
$title=xss_encode($rslt['title'],0)[1];
$author=xss_encode($rslt['author'],0)[1];
$publisher=xss_encode($rslt['publisher'],0)[1];
$isbn=xss_encode($rslt['isbn'],0)[1];
$ean=xss_encode($rslt['ean'],0)[1];
$binding=xss_encode($rslt['binding'],0)[1];
$numberofpages=xss_encode($rslt['numberofpages'],0)[1];
$image=xss_encode($rslt['image'],0)[1];
$language=xss_encode($rslt['language'],0)[1];
$description=xss_encode($rslt['description'],0)[1];
$category=xss_encode($rslt['category'],0)[1];
?>
<div id="container">
	<div class="row-fluid">
		<div class="span1">
			<img id="img" src="images/book.png" height="90px" width="120px" align="left" style="margin-left: 10px">
		</div>
		
		<div class="span11 text-right">
			<h1>Book Search Application</h1>
		</div>
	</div>
</div>
<h2 style="margin-left:10px"><u>Book Details:-</u></h2>
<div id="table">
<table border="1px" class="table table-bordered">
<tr>
<th colspan="1" style="width: 0px;">IMAGE</th>
<th>ID</th>
<th colspan="2">TITLE</th>
</tr>
<tr>
<td rowspan="7" colspan="1"><img src="<?php echo $image; ?>"></td>
<td><?php echo $id;?></td>
<td colspan="2"><?php echo $title; ?></td>
</tr>
<tr>
<th>AUTHOR</th>
<th>ISBN</th>
<th>EAN</th>
</tr>
<tr>
<td><?php echo $author; ?></td>
<td><?php echo $isbn; ?></td>
<td><?php echo $ean; ?></td>
</tr>
<tr>
<th>BINDING</th>
<th>NUMBER_OF_PAGES</th>
<th>LANGUAGE</th>
</tr>
<tr>
<td><?php echo $binding; ?></td>
<td><?php echo $numberofpages; ?></td>
<td><?php echo $language; ?></td>
</tr>
<tr>
<th colspan="2">PUBLISHER</th>
<th>CATEGORY</th>
</tr>
<tr>
<td colspan="2"><?php echo $publisher; ?></td>
<td><?php echo $category; ?></td>
</tr>
<tr>
<th colspan="4">DESCRIPTION</th>
</tr>
<tr>
<td colspan="4"><?php echo $description; ?></td>
</tr>
<tr>
</th>
</table>
</div>
<button onClick="javascript:window.location='http://127.0.0.1:8080/ghissu/book/'" style="border:none;background:none"><img src="images/back.jpg" height="60px" width="250px"></button>
<p class="footer">Created by Snehasis Saha.</p>
</body>
</html>