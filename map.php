<!DOCTYPE html>
<html>
<head>
	<title>Overcast Map Library - Map Name</title>
	<link rel="stylesheet" href="assets/css/bootstrap.css">
	<link rel="stylesheet" href="assets/css/custom.css">
	<script type="text/javascript">
	function showComments() {
		document.getElementById("comments").setAttribute("class","comments toggled");
		document.getElementById("comment-toggle").setAttribute("onClick","hideComments();");
		document.getElementById("comment-toggle").innerHTML="Toggled Full-size Comments";
	}
	function hideComments() {
		document.getElementById("comments").setAttribute("class","comments");
		document.getElementById("comment-toggle").setAttribute("onClick","showComments();");
		document.getElementById("comment-toggle").innerHTML="Toggle Full-size Comments<small> or hover over them</small>";
	}
	</script>
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
	<div class="map page">
		<div class="map-name">
			<h1>Map name</h1>
		</div>
		<div class="map-name-wing"></div>
		<div class="map-name-wing r"></div>
		<div class="map-panel-wing imgur"></div>
		<div class="map-panel-wing r"></div>
		<div class="map-panel top left">
			<h3>Map Images:</h3>
			<hr>
			<div class="map-image">
				<iframe class="imgur-album" width="100%" height="400" frameborder="0" src="http://imgur.com/a/LpnHI/embed"></iframe>
			</div>
		</div>
		<div class="map-panel top right">
			<h3>Map Information:</h3>
			<hr>
			<table class="table table-condensed table-bordered">
				<tbody>
					<tr class="success">
						<td><b>Status</b></td>
						<td><a data-trigger="hover" data-toggle="tooltip" title="In need of feedback and ratings!">Open</a></td>
					</tr>
					<tr>
						<td><b>Name</b></td>
						<td>Map Name</td>
					</tr>
					<tr>
						<td><b>Author</b></td>
						<td><img src="https://avatar.oc.tc/khazhyk"> Khazhyk</td>
					</tr>
					<tr>
						<td><b>Version</b></td>
						<td>1.0</td>
					</tr>
					<tr>
						<td><b>Gamemode(s)</b></td>
						<td><b class="label label-warning">CTW</b> <b class="label label-warning">Blitz</b></td>
					</tr>
					<tr>
						<td><b>Teams</b></td>
						<td>50 Red vs. 50 Blue</td>
					</tr>
					<tr>
						<td colspan="2"><b>Description:</b></td>
					</tr>
					<tr>
						<td class="map-description" colspan="2"><div>Derp<br><br><br>Derpity<br><br><br>This shit scrolls down<br><br><br>Derpity<br><br><br>Derp<br><br><br>Derpity<br><br><br>Derp<br><br><br>Durp</div></td>
				</tbody>
			</table>
			<div class="btn-group">
				<a class="btn btn-info"><i class="icon-cog icon-white"></i> XML document</a>
				<a class="btn btn-success"><i class="icon-download-alt icon-white"></i> World file</a>
			</div>
		</div>
		<div class="map-panel-wing bottom"></div>
		<div class="map-panel-wing bottom r"></div>
		<div class="map-panel bottom left">
			<h3>Comments & Rating</h3>
			<hr>
			<ul class="rating fourstar">
				<li class="one"><a title="1 Star">1</a></li>
				<li class="two"><a title="2 Stars">2</a></li>
				<li class="three"><a title="3 Stars">3</a></li>
				<li class="four"><a title="4 Stars">4</a></li>
				<li class="five"><a title="5 Stars">5</a></li>
			</ul>
			<hr>
			<div id="comments" class="comments">
				<a id="comment-toggle" class="btn btn-block" onClick="showComments();" title="hover over a comment to expand" data-toggle="button">Toggle Full-size Comments<small> or hover over them</small></a>
				<div id="comment" class="comment">
					<div class="comment-image">
						<img src="https://avatar.oc.tc/pigdevil2010">
						<a class="comment-edit"><i class="icon-edit icon-white"></i></a>
						<a class="comment-delete">&#10006;</a>
					</div>
					<div class="comment-content">
						<div class="comment-author"><strong>Pigdevil2010</strong> <small class="text-success">@ 25:61 32-13-14</small>:</div>
						Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque eget nisl ipsum. Mauris a feugiat dui, ac dignissim metus. Praesent euismod lobortis ipsum a aliquam. Maecenas commodo consequat nunc eu vehicula. Mauris suscipit tincidunt erat vel vehicula. Curabitur consequat lorem malesuada, mollis velit in, lacinia orci. Integer volutpat vel urna in convallis. Nulla non molestie dolor.
						<br>WWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWW
					</div>
					
				</div>
				<div id="comment" class="comment">
					<div class="comment-image">
						<img src="https://avatar.oc.tc/zacharycraft777">
						<a class="comment-edit">E</a>
						<a class="comment-delete">&#10006;</a>
					</div>
					<div class="comment-content">
						<div class="comment-author"><strong>zacharycraft777</strong> <small class="text-success">@ 25:61 32-13-14</small>:</div>
						Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque eget nisl ipsum. Mauris a feugiat dui, ac dignissim metus. Praesent euismod lobortis ipsum a aliquam. Maecenas commodo consequat nunc eu vehicula. Mauris suscipit tincidunt erat vel vehicula. Curabitur consequat lorem malesuada, mollis velit in, lacinia orci. Integer volutpat vel urna in convallis. Nulla non molestie dolor.
						
					</div>

				</div>
				<div class="comment">
					<div class="comment-image"><img src="https://avatar.oc.tc/MonsieurApple"></div>
					<div class="comment-content">
						<div class="comment-author"><strong>MonsieurFapple</strong> <small class="text-success">@ 25:61 32-13-14</small>:</div>
						Fapulous
					</div>
				</div>
				Derp<br><br><br>Derpity<br><br><br>Derp<br><br><br>Derpity<br><br><br>Derp<br><br><br>Derpity<br><br><br>Derp<br><br><br>Durp
			</div>
		</div>
		<div class="map-panel bottom right">
			<h3>Place a comment!</h3>
			<hr>
			<h4>&#8592; Be sure to rate the map!</h4>
			<hr>
			<textarea class="new-comment" placeholder="..."></textarea>
			<p><div class="btn-group pull-right">
				<a href="#login" data-toggle="modal" class="btn btn-danger">Log In</a>
				<a class="btn btn-primary">Post Comment</a>
			</div>
		</div>
	</div>
	<div id="login" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	  	<div class="modal-header">
	    	<button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
	    	<h3 id="myModalLabel">Log in</h3>
	  	</div>
	  	<div class="modal-body">
			<div class="control-group">
			    <label class="control-label" for="user">Username</label>
			    <div class="controls">
				    <input type="text" id="user" placeholder="Player">
			    </div>
			</div>
			<div class="control-group">
			    <label class="control-label" for="password">Password</label>
			    <div class="controls">
			      	<input type="password" id="password" placeholder="Password">
			      	<label class="checkbox">
			        	<input type="checkbox"> Remember me
			      	</label>
			    </div>
			</div>
		</div>
	  	<div class="modal-footer">
	  		<div class="pull-left"><a href="./#account" class="btn btn-danger">I don't have an account!</a></div>
	    	<button class="btn" data-dismiss="modal" aria-hidden="true">Cancel</button>
	    	<button class="btn btn-success">Log in!</button>
	 	</div>
	</div>
	<script src="assets/js/jquery.js"></script>
	<script src="assets/js/bootstrap.js">
	$function() {
		$('data-toggle="tooltip"').tooltip();
	});</script>
</body>
</html>