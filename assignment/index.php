<!doctype html>
<!-- 
    Jay Verma
	Q12027103
	
	Home page
	
	All images used are royalty free, downloaded from: https://www.pexels.com 
-->
<html lang="en">
<head>
  <!-- Ensures the document is using the correct char set --> 
  <meta charset="utf-8">
  <meta name="description" content="TripsWiki">
  
  <!-- Using viewport in case of use on a mobile device -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <title>TripsWiki</title>
  
  <!-- Link to css/stylesheet -->
  <link rel="stylesheet" href="css/stylesheet.css?v=1.0">
  
  <!-- favicon image for tab -->
  <link rel="icon" type="images/favicon.jpeg" href="images/favicon.jpeg">

    
  <!--[if lt IE 9]>
  <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->

  </head>

<body>    
<div id="wrapper">

<div class="row">
	<div class="col-12">
		<div id="header">
			<a href="index.php"><h1>TripsWiki</h1></a>
				<ul id="navlinks">
					<li><a href="index.php" id="active">Home</a></li>
					<li><a href="login.php">Login/Register</a></li>
				</ul>
		</div> <!-- [END]#header -->
	</div> <!--[END]#col-12 -->
</div> <!--[END]#row -->

<div class="row">
	<div class="col-3">
		<div class="leftDiv">
			<h2 id="h2">About</h2>
			<form id="addForm" method="post">
			<fieldset>
				<legend id="addFormLegend"> Add a new place of interest </legend>
					<br/>
					<label class="addFormLabel">Name</label>
					<br/>
						<input type="text" name="addFormName">
					<br/>
					<label class="addFormLabel">Type</label>
					<br/>
						<select name="addFormType">
							<option value="hotel">Hotel</option>
							<option value="city">City</option>
							<option value="site">Historical Site</option>
							<option value="bar">Bar</option>
							<option value="restaurant">Restaurant</option>
							<option value="beach">Beach</option>
							<option value="mountain">Mountain</option>
							<option value="other">Other</option>
						</select>	
					<br/>
					<label class="addFormLabel">Description</label>
					<br/>
						<input type="text" name="addFormDesc">
						
						<label class="addFormLabel">Rating</label>
						<br/>
						<input type="radio" class="addFormRating" name="addFormRatingName" value="1">
							<label class="addFormRatingLabel"> 1 </label>
						<input type="radio" class="addFormRating" name="addFormRatingName" value="2">
							<label class="addFormRatingLabel"> 2 </label>
						<input type="radio" class="addFormRating" name="addFormRatingName" value="3">
							<label class="addFormRatingLabel"> 3 </label>
						<input type="radio" class="addFormRating" name="addFormRatingName" value="4">
							<label class="addFormRatingLabel"> 4 </label>
						<input type="radio" class="addFormRating" name="addFormRatingName" value="5">
							<label class="addFormRatingLabel"> 5 </label>
			</fieldset>
				<input type="submit" value="Add">
			</form>
			<form id="searchForm" method="post">
			<fieldset>
				<legend id="searchFormLegend"> Search for a place of interest </legend>
					<br/>
						<input type="text" name="searchFormName">
					<br/>
					<br/>
						<input type="submit" value="Search">
			</fieldset>
			</form>
				<p id="aboutText">TripsWiki is a site which aims to help people out with planning their holiday. It contains information about places of interest, such as hotels, cities, historical sites, bars, restaurants, beaches, mountains, ski resorts, and anywhere else that people might want to visit while they are on holiday.</p>
			<div class="row">
				<div id="buttonDiv">
					<img src="images/search.png" class="switch" alt="Search" onClick="search()">
						<label class="btnLabel">Search</label>
					<img src="images/add.png" class="switch" alt ="Add a new review" onClick="add()">					
						<label class="btnLabel">Add a new review</label>
				</div><!--[END]#buttonDiv -->
			</div><!--[END]#row-->
		</div><!--[END]#leftDiv -->
	</div><!--[END]#col-3 -->
	<div class="col-1">
		<p class="seperator">
	</div><!--[END]#col-1-->
	<div class="col-7">
		<div class="main">
			<div class="row">
				<div class="col-12">
					<div id="carousel">
						<img src="images/img1.jpeg" alt="img1" class="imgSlide">
					</div><!--[END]#carousel -->
				</div><!--[END]#col-12 -->
			</div><!--[END]#row -->
		</div> <!-- [END]#main --> 
	</div> <!--[END]#col-7 -->
</div> <!--[END]#row -->	
	
<div class="row">
	<div class="col-12">	
		<div id="footer">
			<h4> Jay Verma <br/> Q12027103 </h4>
		</div> <!--[END]#footer -->
	</div> <!--[END]#col-12 -->
</div> <!--[END]#row -->

<script>
	
	// global functions
	document.getElementById("active").style.color = "#001E2E";
	
	// global vars
	var aboutText = document.getElementById("aboutText");
	var searchForm = document.getElementById("searchForm");
	var h2 = document.getElementById("h2");
	var carousel = document.getElementById("carousel");
	var addForm = document.getElementById("addForm");
	
	
	// onSearch
	function search(){
		
			searchForm.style.display = "block";
			aboutText.style.display = "none";
			h2.innerHTML = "Search";
			carousel.style.display = "none";
			addForm.style.display = "none";
	}
	
	// onAdd
	function add(){
		
			searchForm.style.display = "none";
			addForm.style.display = "block";
			aboutText.style.display = "none";
			h2.innerHTML = "Add a review";
			carousel.style.display = "none";
		
	}
	
	
	


</script>

</div>	 <!-- [END]#wrapper -->


</body>
</html>