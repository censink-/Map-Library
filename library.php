<!DOCTYPE html>
<html>
<head>
	<title>Overcast Map Library - The Library</title>
	<link rel="stylesheet" href="assets/css/bootstrap.css">
	<link rel="stylesheet" href="assets/css/lightbox.css">
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
			<h1>The Map Library</h1>
			<hr>
		</div>
		<br>
		<div class="well">
			<hr>
			<h4>What's the map library?</h4>
			<br>On this page, you will find all maps that are in need of feedback and ratings!
			<br>You will <u>not</u> find maps on this page that:
			<ul>
				<li>Have been rated enough <i>(These maps are moved to 'Well Received')</i></li>
				<li>Have been added to overcast's map repository <i>(These maps are moved to the 'Archives')</i></li>
				<li>Are fake or inappropriate
					<ul>
						<li>Not the author of the map</li>
						<li>Racist signs</li>
						<li>Map files containing viruses</li>
						<li>Maps containing anything not related to overcast</li>
					</ul>
				</li>
			</ul>
			If you do find a map like this, be sure to report it!
			<hr>
			<div class="map list">
				<div class="map-name">
					<h1>Map name</h1>
				</div>
				<div class="map-name-wing"></div>
				<div class="map-name-wing r"></div>
				<div class="map-panel-wing imgur"></div>
				<div class="map-panel-wing r"></div>
				<div class="map-panel top left">
					<div class="map-image">
						<iframe class="imgur-album" frameborder="0" src="http://imgur.com/a/LpnHI/embed"></iframe>
					</div>
				</div>
				<div class="map-panel top right">
					<hr><h3>Rating</h3>
					<hr>
					83% Of players like this map!
					<br><br><hr><h3>Comments</h3>
					<hr>
					6 Comments were placed
					<br>Of which 2 in the last 24 hours
					<br><br><hr><h3>Tags</h3>
					<hr>
					<span class="label label-success">PA</span> 
					<span class="label label-info">TDM</span> 
					<span class="label label-warning">Mini</span> 
					<span class="label label-warning">Classes</span>
					<br><br><hr><a class="btn btn-large btn-primary" href="map.php?id=2"><h4>Check me out!</h4></a>
				</div>
			</div>
			<div class="map list">
				<div class="map-name">
					<h1>Map name</h1>
				</div>
				<div class="map-name-wing"></div>
				<div class="map-name-wing r"></div>
				<div class="map-panel-wing imgur"></div>
				<div class="map-panel-wing r"></div>
				<div class="map-panel top left">
					<div class="map-image">
						<iframe class="imgur-album" frameborder="0" src="http://imgur.com/a/LpnHI/embed"></iframe>
					</div>
				</div>
				<div class="map-panel top right">
					<hr><h3>Rating</h3>
					<hr>
					76% Of players like this map!
					<br><br><hr><h3>Comments</h3>
					<hr>
					23 Comments were placed
					<br>Of which 14 in the last 24 hours
					<br><br><hr><h3>Tags</h3>
					<hr>
					<span class="label label-success">Blitz</span> 
					<span class="label label-info">CTW</span> 
					<span class="label label-warning">Rage</span>
					<br><br><hr><a class="btn btn-large btn-primary" href="map.php?id=1"><h4>Check me out!</h4></a>
				</div>
			</div>
		</div>
	</div>
	<script src="assets/js/jquery.js"></script>
	<script src="assets/js/lightbox.js"></script>
</body>
</html>