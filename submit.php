<!DOCTYPE html>
<html>
<head>
	<title>Overcast Map Library - New Map</title>
	<link rel="stylesheet" href="assets/css/bootstrap.css">
	<link rel="stylesheet" href="assets/css/custom.css">
	<script type="text/javascript">
	//map name
	function mapName() {
		document.getElementById("mapNameHelp").className = "text-error";
	}
	//map author validation
	function authorYes() {
		document.getElementById("authorYesBtn").className = "btn btn-success btn-small active";
		document.getElementById("authorNoBtn").className = "btn btn-inverse btn-small";
		document.getElementById("authorYesHelp").className = "text-success";
		document.getElementById("authorNoHelp").className = "hide";
	}
	function authorNo() {
		document.getElementById("authorNoBtn").className = "btn btn-danger btn-small active";
		document.getElementById("authorYesBtn").className = "btn btn-inverse btn-small";
		document.getElementById("authorNoHelp").className = "text-error";
		document.getElementById("authorYesHelp").className = "hide";
	}
	//map gamemodes
	function resetInfo() {
		document.getElementById("gamemodes-sub-label").className = "control-label muted";
		document.getElementById("gamemodes-tdm").className = "btn btn-info";
		document.getElementById("gamemodes-tdm").setAttribute("data-toggle");
		document.getElementById("gamemodes-tdm").disabled = true;
		document.getElementById("gamemodes-dtm").className = "btn btn-info";
		document.getElementById("gamemodes-dtm").setAttribute("data-toggle");
		document.getElementById("gamemodes-dtm").disabled = true;
		document.getElementById("gamemodes-ctw").className = "btn btn-info";
		document.getElementById("gamemodes-ctw").setAttribute("data-toggle");
		document.getElementById("gamemodes-ctw").disabled = true;
		document.getElementById("gamemodes-koth").className = "btn btn-info";
		document.getElementById("gamemodes-koth").setAttribute("data-toggle");
		document.getElementById("gamemodes-koth").disabled = true;
		document.getElementById("gamemodes-tdm").setAttribute("onClick","resetWarning(); middleTDM();");
		document.getElementById("gamemodes-dtm").setAttribute("onClick","resetWarning(); middleDTM();");
		document.getElementById("gamemodes-ctw").setAttribute("onClick","resetWarning(); middleCTW();");
	}
	function resetWarning() {
		document.getElementById("gamemodes-sub-sub-label").className = "control-label muted";
		document.getElementById("gamemodes-sub-mini").className = "btn btn-warning";
		document.getElementById("gamemodes-sub-mini").setAttribute("data-toggle");
		document.getElementById("gamemodes-sub-mini").disabled = true;
		document.getElementById("gamemodes-sub-classes").className = "btn btn-warning";
		document.getElementById("gamemodes-sub-classes").setAttribute("data-toggle");
		document.getElementById("gamemodes-sub-classes").disabled = true;
		document.getElementById("gamemodes-sub-gear").className = "btn btn-warning";
		document.getElementById("gamemodes-sub-gear").setAttribute("data-toggle");
		document.getElementById("gamemodes-sub-gear").disabled = true;
		document.getElementById("gamemodes-sub-core").className = "btn btn-warning";
		document.getElementById("gamemodes-sub-core").setAttribute("data-toggle");
		document.getElementById("gamemodes-sub-core").disabled = true;
		document.getElementById("gamemodes-sub-monument").className = "btn btn-warning";
		document.getElementById("gamemodes-sub-monument").setAttribute("data-toggle");
		document.getElementById("gamemodes-sub-monument").disabled = true;
		document.getElementById("gamemodes-sub-juggernaut").className = "btn btn-warning";
		document.getElementById("gamemodes-sub-juggernaut").setAttribute("data-toggle");
		document.getElementById("gamemodes-sub-juggernaut").disabled = true;
		document.getElementById("gamemodes-sub-scorebox").className = "btn btn-warning";
		document.getElementById("gamemodes-sub-scorebox").setAttribute("data-toggle");
		document.getElementById("gamemodes-sub-scorebox").disabled = true;
		document.getElementById("gamemodes-sub-rage").className = "btn btn-warning";
		document.getElementById("gamemodes-sub-rage").setAttribute("data-toggle");
		document.getElementById("gamemodes-sub-rage").disabled = true;
		document.getElementById("gamemodes-dtm2").className = "btn btn-info";
		document.getElementById("gamemodes-dtm2").setAttribute("data-toggle");
		document.getElementById("gamemodes-dtm2").disabled = true;
		document.getElementById("gamemodes-dtm2").setAttribute("onClick","middleDTM2();");
		document.getElementById("gamemodes-ctw2").className = "btn btn-info";
		document.getElementById("gamemodes-ctw2").setAttribute("data-toggle");
		document.getElementById("gamemodes-ctw2").disabled = true;
		document.getElementById("gamemodes-dtm2").setAttribute("onClick","middleDTM2();");
		document.getElementById("gamemodes-koth2").className = "btn btn-info";
		document.getElementById("gamemodes-koth2").setAttribute("data-toggle");
		document.getElementById("gamemodes-koth2").disabled = true;
		document.getElementById("gamemodes-dtm2").setAttribute("onClick","middleDTM2();");
	}
	function topPA() {
		document.getElementById("gamemodes-sub-label").className = "control-label";
		document.getElementById("gamemodes-tdm").disabled = false;
		document.getElementById("gamemodes-dtm").disabled = false;
		document.getElementById("gamemodes-ctw").disabled = false;
		document.getElementById("gamemodes-koth").disabled = false;
	}
	function topBlitz() {
		document.getElementById("gamemodes-sub-label").className = "control-label";
		document.getElementById("gamemodes-tdm").disabled = false;
		document.getElementById("gamemodes-dtm").disabled = false;
		document.getElementById("gamemodes-ctw").disabled = false;
		document.getElementById("gamemodes-tdm").setAttribute("onClick","resetWarning(); middleTDM(); rage();");
		document.getElementById("gamemodes-dtm").setAttribute("onClick","resetWarning(); middleDTM(); rage();");
		document.getElementById("gamemodes-ctw").setAttribute("onClick","resetWarning(); middleCTW(); rage();");
	}
	function topGS() {
		document.getElementById("gamemodes-sub-label").className = "control-label muted";
		document.getElementById("gamemodes-tdm").className = "btn btn-success active";
		document.getElementById("gamemodes-tdm").setAttribute("data-toggle","button");
		document.getElementById("gamemodes-sub-classes").className = "btn btn-success active";
		document.getElementById("gamemodes-sub-classes").setAttribute("data-toggle","button");
	}
	function middleTDM() {
		document.getElementById("gamemodes-sub-sub-label").className = "control-label";
		document.getElementById("gamemodes-sub-mini").disabled = false;
		document.getElementById("gamemodes-sub-classes").disabled = false;
		document.getElementById("gamemodes-sub-gear").disabled = false;
		document.getElementById("gamemodes-sub-juggernaut").disabled = false;
		document.getElementById("gamemodes-sub-scorebox").disabled = false;
	}
	function middleDTM() {
		document.getElementById("gamemodes-sub-sub-label").className = "control-label";
		document.getElementById("gamemodes-sub-mini").disabled = false;
		document.getElementById("gamemodes-sub-classes").disabled = false;
		document.getElementById("gamemodes-sub-gear").disabled = false;
		document.getElementById("gamemodes-sub-core").disabled = false;
		document.getElementById("gamemodes-sub-monument").disabled = false;
		document.getElementById("gamemodes-sub-juggernaut").disabled = false;
		document.getElementById("gamemodes-sub-scorebox").disabled = false;
		document.getElementById("gamemodes-ctw2").disabled = false;
		document.getElementById("gamemodes-koth2").disabled = false;
	}
	function middleCTW() {
		document.getElementById("gamemodes-sub-sub-label").className = "control-label";
		document.getElementById("gamemodes-sub-mini").disabled = false;
		document.getElementById("gamemodes-sub-classes").disabled = false;
		document.getElementById("gamemodes-sub-gear").disabled = false;
		document.getElementById("gamemodes-sub-juggernaut").disabled = false;
		document.getElementById("gamemodes-sub-scorebox").disabled = false;
		document.getElementById("gamemodes-dtm2").disabled = false;
		document.getElementById("gamemodes-koth2").disabled = false;
	}
	function middleKoth() {
		document.getElementById("gamemodes-sub-sub-label").className = "control-label";
		document.getElementById("gamemodes-sub-mini").disabled = false;
		document.getElementById("gamemodes-sub-classes").disabled = false;
		document.getElementById("gamemodes-sub-gear").disabled = false;
		document.getElementById("gamemodes-sub-juggernaut").disabled = false;
		document.getElementById("gamemodes-sub-scorebox").disabled = false;
		document.getElementById("gamemodes-dtm2").disabled = false;
		document.getElementById("gamemodes-ctw2").disabled = false;
	}
	function middleDTM2() {
		document.getElementById("gamemodes-sub-core").disabled = false;
		document.getElementById("gamemodes-sub-monument").disabled = false;
		document.getElementById("gamemodes-dtm2").setAttribute("onClick","unMiddleDTM2();");
	}
	function unMiddleDTM2() {
		document.getElementById("gamemodes-sub-core").disabled = true;
		document.getElementById("gamemodes-sub-monument").disabled = true;
		document.getElementById("gamemodes-dtm2").setAttribute("onClick","middleDTM2();");
	}
	function rage() {
		document.getElementById("gamemodes-sub-rage").disabled = false;
		document.getElementById("gamemodes-koth2").disabled = true;
	}
	function checknode(id) {
		var nd = document.getElementById(id).getAttribute("class");
		if(nd.indexOf("active")==-1) return false;
			else return true;
	}
	function previewTags() {
		document.getElementById("tags").innerHTML = "";
		var out = "";
		var taglist = new Array(
	'<span class="label label-success">PA</span> ',
	'<span class="label label-success">Blitz</span> ',
	'<span class="label label-success">GS</span> ',
	'<span class="label label-info">TDM</span> ',
	'<span class="label label-info">DTM</span> ',
	'<span class="label label-info">CTW</span> ',
	'<span class="label label-info">KoTH</span> ',
	'<span class="label label-info">DTM-CTW</span> ',
	'<span class="label label-info">DTM-KoTH</span> ',
	'<span class="label label-info">CTW-KoTH</span> ',
	'<span class="label label-info">DTM-CTW-KoTH</span> ',
	'<span class="label label-warning">Mini</span> ',
	'<span class="label label-warning">Classes</span> ',
	'<span class="label label-warning">Gear</span> ',
	'<span class="label label-warning">Core</span> ',
	'<span class="label label-warning">Monument</span> ',
	'<span class="label label-warning">Juggernaut</span> ',
	'<span class="label label-warning">Scorebox</span> ',
	'<span class="label label-warning">Rage</span>');
		if(checknode("gamemode-PA")) out += taglist[0];
		if(checknode("gamemode-Blitz")) out += taglist[1];
		if(checknode("gamemode-GS")) out += taglist[2];
		if(checknode("gamemodes-tdm")) out += taglist[3];
		if(checknode("gamemodes-dtm")) {
			if(checknode("gamemodes-ctw2")&&checknode("gamemodes-koth2")) out += taglist[10];
			else if(checknode("gamemodes-ctw2")) out += taglist[7];
			else if(checknode("gamemodes-koth2")) out += taglist[8];
			else out += taglist[4];
		 }
		if(checknode("gamemodes-ctw")) {
			if(checknode("gamemodes-dtm2")&&checknode("gamemodes-koth2")) out += taglist[10];
			else if(checknode("gamemodes-dtm2")) out += taglist[7];
			else if(checknode("gamemodes-koth2")) out += taglist[9];
			else out += taglist[5];
		}
		if(checknode("gamemodes-koth")) {
			if(checknode("gamemodes-dtm2")&&checknode("gamemodes-ctw2")) out += taglist[10];
			else if(checknode("gamemodes-dtm2")) out += taglist[8];
			else if(checknode("gamemodes-ctw2")) out += taglist[9];
			else out += taglist[6];
		}
		if(checknode("gamemodes-sub-mini")) out += taglist[11];
		if(checknode("gamemodes-sub-classes")) out += taglist[12];
		if(checknode("gamemodes-sub-gear")) out += taglist[13];
		if(checknode("gamemodes-sub-core")) out += taglist[14];
		if(checknode("gamemodes-sub-monument")) out += taglist[15];
		if(checknode("gamemodes-sub-juggernaut")) out += taglist[16];
		if(checknode("gamemodes-sub-scorebox")) out += taglist[17];
		if(checknode("gamemodes-sub-rage")) out += taglist[18];
		document.getElementById("tags").innerHTML = out;
	}
	//map teams
	function addTeam() {
		var team=document.getElementById("team");
		var clone=team.cloneNode(true);
		document.getElementById("teams").appendChild(clone);
	}
	//map description
	function mapDescription() {
		document.getElementById("mapDescriptionHelp").className = "text-success";
	}
	function albumLink() {
		document.getElementById("albumHelp").className = "text-info";
	}
	function downloadLink() {
		document.getElementById("downloadHelp").className = "text-info";
	}
	function xml() {
		document.getElementById("xmlHelp").className = "text-info";
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
				<a href="#login" data-toggle="modal" rel="popover" data-placement="bottom" data-content=" " data-original-title="Logged in as USER" data-trigger="hover" class="btn account"><i class="icon-user"></i></a>
				<a href="./submit.php" class="btn btn-success"><i class="icon-plus icon-white"></i> Submit your map!</a>
			</ul>
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
	<div class="container">
		<div class="hero-unit">
			<h1>Submit your own maps!</h1>
			<hr>
		</div>
		<br>
		<div class="well">
			Fill out all questions!
			<hr style="border:5px solid #444;box-shadow:0 0 10px 1px #444;">
			<form class="form-horizontal">
				<div class="control-group">
					<label class="control-label">Map Name</label>
					<div class="controls">
						<input type="text" placeholder="Mappy" onclick="mapName();"> <span id="mapNameHelp" class="hide">Do <b>NOT</b> give the map version and/or author</span>
					</div>
				</div>
				<div class="control-group">
					<label class="control-label">Are you the author?</label>
					<div class="controls">
						<button id="authorYesBtn" type="button" class="btn btn-inverse btn-small" onClick="authorYes()">Yes</button> <span id="authorYesHelp" class="hide">Additional authors and contributors belong in the description!</span></p>
						<button id="authorNoBtn" type="button" class="btn btn-inverse btn-small" onClick="authorNo()">No</button> <span id="authorNoHelp" class="hide">Only the author may submit their map!</span>
					</div>
				</div>
				<div class="control-group">
					<label class="control-label">Gamemode</label>
					<div class="controls">
						<div id="gamemodes" class="btn-group" data-toggle="buttons-radio">
							<button type="button" name="Top" class="btn btn-success" id="gamemode-PA" onClick="resetInfo(); resetWarning(); topPA();">Project Ares</button>
							<button type="button" name="Top" class="btn btn-success" id="gamemode-Blitz" onClick="resetInfo(); resetWarning(); topBlitz();">Blitz</button>
							<button type="button" name="Top" class="btn btn-success" id="gamemode-GS" onClick="resetInfo(); resetWarning(); topGS();">Ghost Squadron</button>
						</div>
					</div>
				</div>
				<div class="control-group">
					<label id="gamemodes-sub-label" class="control-label muted">Sub-Gamemodes</label>
					<div class="controls">
						<div id="gamemodes-sub" class="btn-group" data-toggle="buttons-radio">
							<button disabled name="Middle" type="button" class="btn btn-info" id="gamemodes-tdm" onClick="resetWarning(); middleTDM();">TDM</button>
							<button disabled name="Middle" type="button" class="btn btn-info" id="gamemodes-dtm" onClick="resetWarning(); middleDTM();">DTM</button>
							<button disabled name="Middle" type="button" class="btn btn-info" id="gamemodes-ctw" onClick="resetWarning(); middleCTW();">CTW</button>
							<button disabled name="Middle" type="button" class="btn btn-info" id="gamemodes-koth" onClick="resetWarning(); middleKoth();">Koth</button>
						</div>
						<div id="gamemodes-sub2" class="btn-group" data-toggle="buttons-checkbox">
							<button disabled name="Middle" type="button" class="btn btn-info" id="gamemodes-dtm2" onClick="middleDTM2();">DTM</button>
							<button disabled name="Middle" type="button" class="btn btn-info" id="gamemodes-ctw2" onClick="middleCTW2();">CTW</button>
							<button disabled name="Middle" type="button" class="btn btn-info" id="gamemodes-koth2" onClick="middleKoth2();">Koth</button>
						</div>
						<span class="help">Secondary gamemode (optional)</span>
					</div>
				</div>
				<div class="control-group">
					<label id="gamemodes-sub-sub-label" class="control-label muted">Additional Tags</label>
					<div class="controls">
						<div id="gamemodes-sub-sub" class="btn-group" data-toggle="buttons-checkbox">
							<button disabled type="button" class="btn btn-warning" id="gamemodes-sub-mini">Mini</button>
							<button disabled type="button" class="btn btn-warning" id="gamemodes-sub-classes">Classes</button>
							<button disabled type="button" class="btn btn-warning" id="gamemodes-sub-gear">Gear</button>
							<button disabled type="button" class="btn btn-warning" id="gamemodes-sub-core">Core</button>
							<button disabled type="button" class="btn btn-warning" id="gamemodes-sub-monument">Monument</button>
							<button disabled type="button" class="btn btn-warning" id="gamemodes-sub-juggernaut">Juggernaut</button>
							<button disabled type="button" class="btn btn-warning" id="gamemodes-sub-scorebox">Scorebox</button>
							<button disabled type="button" class="btn btn-warning" id="gamemodes-sub-rage">Rage</button>
						</div>
					</div>
				</div>
				<div class="control-group">
					<label class="control-label"><a class="btn btn-small" onClick="previewTags();">Preview</a></label>
					<div id="tags" class="controls">
					</div>
				</div>
				<div class="control-group">
					<label class="control-label">Teamsizes</label>
					<div id="teams" class="controls">
						<div id="team1">
							<input type="text" placeholder="0" style="width:25px;"> Of
							<select>
								<option disabled selected>Color</option>
								<option value="white">White</option>
								<option value="lightgray">Light Gray</option>
								<option value="gray">Dark Gray</option>
								<option value="black">Black</option>
								<option value="brown">Brown</option>
								<option value="red">Red</option>
								<option value="lightred">Light Red</option>
								<option value="orange">Gold / Orange</option>
								<option value="yellow">Yellow</option>
								<option value="green">Green</option>
								<option value="lightgreen">Neon Green / Light Green</option>
								<option value="lightcyan">Neon Cyan / Light Cyan</option>
								<option value="cyan">Cyan</option>
								<option value="blue">Blue</option>
								<option value="darkblue">Dark Blue</option>
								<option value="pink">Pink</option>
								<option value="purple">Purple</option>
							</select> <a id="moreBtn" onClick="addTeam()" class="btn">+</a> Add another team</p>
						</div>
						<div id="team">
							<input type="text" placeholder="0" style="width:25px;"> Of
							<select>
								<option disabled selected>Color</option>
								<option value="white">White</option>
								<option value="lightgray">Light Gray</option>
								<option value="gray">Dark Gray</option>
								<option value="black">Black</option>
								<option value="brown">Brown</option>
								<option value="red">Red</option>
								<option value="lightred">Light Red</option>
								<option value="orange">Gold / Orange</option>
								<option value="yellow">Yellow</option>
								<option value="green">Green</option>
								<option value="lightgreen">Neon Green / Light Green</option>
								<option value="lightcyan">Neon Cyan / Light Cyan</option>
								<option value="cyan">Cyan</option>
								<option value="blue">Blue</option>
								<option value="darkblue">Dark Blue</option>
								<option value="pink">Pink</option>
								<option value="purple">Purple</option>
							</select></p>
						</div>
					</div>
				</div>
				<div class="control-group">
					<div class="control-label">Description</div>
					<div class="controls">
						<textarea class="span5" rows="10" placeholder="Full description of your map!" onClick="mapDescription()"></textarea> <span id="mapDescriptionHelp" class="hide">Be sure to mention contributors!</span>
					</div>
				</div>
				<div class="control-group">
					<div class="control-label">Pictures</div>
					<div class="controls">
						<div class="input-prepend input-append">
							<span class="add-on">http://imgur.com/a/</span>
							<input class="span1" type="text" placeholder="&#9679;&#9679;&#9679;&#9679;&#9679;" onClick="albumLink()">
							<span class="add-on">/embed</span>
						</div>
						<span class="help">Upload all your pictures to an <a href="http://imgur.com">Imgur</a> album give us the URL!</span>
						<p id="albumHelp" class="hide">Do not give the entire link, only give the characters between!</p>
					</div>
				</div>
				<div class="control-group">
					<div class="control-label">World download</div>
					<div class="controls">
						<input class="span3" type="text" onClick="downloadLink()">
						<span id="downloadHelp" class="hide">Upload it to an external site and give us the URL!</span>
					</div>
				</div>
				<div class="control-group">
					<div class="control-label">XML File</div>
					<div class="controls">
						<input type="text" placeholder="&#60;?xml version=&#34;1.0&#34;?&#62;..." onClick="xml()"> <span id="xmlHelp" class="hide">Do not give a download link, give the actual xml code!</span>
					</div>
				</div>
			</form>
		</div>
	</div>
	<script src="assets/js/jquery.js"></script>
	<script src="assets/js/bootstrap.js"></script>
</body>
</html>