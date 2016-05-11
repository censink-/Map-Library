<!DOCTYPE html>
<html>
<head>
	<title>Overcast Map Library - Home</title>
	<link rel="stylesheet" href="assets/css/bootstrap.css">
	<link rel="stylesheet" href="assets/css/custom.css">
</head>
<body>
	<div class="navbar navbar-inverse navbar-static-top">
	  	<div class="navbar-inner">
			<a class="brand" href="./">Overcast Map Library</a>
			<ul class="nav">
				<li class="divider-vertical"></li>
			  	<li><a href="./library.php"><i class="icon-book icon-white"></i> The Library</a></li>
			  	<form class="navbar-form pull-left">
			  		<input type="text" class="search-query span2" placeholder="Map search"/>
			  	</form>
			  	<li class="divider-vertical"></li>
			  	<li><a href="./well-received.php"><i class="icon-thumbs-up icon-white"></i> Well Received</a></li>
			  	<li class="divider-vertical"></li>
			  	<li><a href="./archive.php"><i class="icon-folder-open icon-white"></i> Archives</a></li>
			  	<li class="divider-vertical"></li>
			</ul>
			<ul class="nav pull-right">
			  	<a href="./submit.php" class="btn btn-success"><i class="icon-plus icon-white"></i> Submit your map!</a>
			</ul>
	  	</div>
	</div>
	<div class="container">
		<div class="hero-unit">
			<h1>Overcast Map Library!</h1>
			<hr>
		</div>
		<br>
		<div class="well">
			<h2>Hey!</h2>
			<hr>
			<p>Welcome to the Overcast Map Library, this is a place where map-authors can submit their maps, produced for the overcast network.</p>
			It was made purely so maps could easily be reviewed by the community and on a large scale:
			<ul>
				<li>Maps are always sorted by fewest comments to most comments, all maps should get an equal amount of feedback!</li>
				<li>Maps always include a ton of information (teamsizes/colors, photo album, worlddownload)</li>
				<li>XML can be viewed on this very website! We have made a custom XML-Viewer inspired by Sublime Text's colorscheme</li>
				<ul>
					<li>Line-numbers are included so they can be used in comments ("hey, i noticed an error in your xml at line 54")</li>
					<li>Line-numbers will not be included when you select multiple lines and then copy them to your clipboard!</li>
					<li>Like in Sublime Text, the following colors are used:</li>
					<ul>
						<li>&#60;, &#60;/, &#62;, ? and = are white</li>
						<li>tags are bordeaux-red</li>
						<li>attributes are lime-green</li>
						<li>attribute values are beige</li>
						<li>Values are white</li>
						<li>Line-numbers and comments are grey</li>
					</ul>
				</ul>
				<li>Each map does not only have a place in the library listing, but also has it's very own page containing everything you should know and a place to rate and comment on it!</li>
		</div>
	</div>
</body>
</html>