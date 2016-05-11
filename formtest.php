<!DOCTYPE html>
<html>
<head>
	<title>Overcast Map Library - New Map</title>
	<link rel="stylesheet" href="assets/css/bootstrap.css">
	<script type="text/javascript" src="assets/js/jquery.js"></script>
	<script type="text/javascript" src="assets/js/bootstrap.js"></script>
	<script type="text/javascript">
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
			document.getElementById("gamemodes-ctw2").className = "btn btn-info";
			document.getElementById("gamemodes-ctw2").setAttribute("data-toggle");
			document.getElementById("gamemodes-ctw2").disabled = true;
			document.getElementById("gamemodes-koth2").className = "btn btn-info";
			document.getElementById("gamemodes-koth2").setAttribute("data-toggle");
			document.getElementById("gamemodes-koth2").disabled = true;
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
			document.getElementById("gamemodes-tdm").className = "btn btn-success";
			document.getElementById("gamemodes-tdm").setAttribute("data-toggle","button");
			document.getElementById("gamemodes-sub-classes").className = "btn btn-success";
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
		function previewTags() {
			var nd = document.getElementById("gamemodes-sub-sub").getAttribute("class");
				if(nd.indexOf("active")!=-1) /*some actions to do with active button*/;
			document.getElementById("tags").innerHTML('nd')
		}
	</script>
</head>
<body>
	<br>
	<form class="form-horizontal">
		<div id="gamemodes-all">
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
			</div>
		</div>
		<div class="control-group">
			<label id="gamemodes-sub-sub-label" class="control-label muted">Additional Tags</label>
			<div class="controls">
				<div id="gamemodes-sub-sub" class="btn-group" data-toggle="buttons-checkbox">
					<button disabled type="button" class="btn btn-warning" id="gamemodes-sub-mini" onClick="previewTags();">Mini</button>
					<button disabled type="button" class="btn btn-warning" id="gamemodes-sub-classes" onClick="previewTags();">Classes</button>
					<button disabled type="button" class="btn btn-warning" id="gamemodes-sub-gear" onClick="previewTags();">Gear</button>
					<button disabled type="button" class="btn btn-warning" id="gamemodes-sub-core" onClick="previewTags();">Core</button>
					<button disabled type="button" class="btn btn-warning" id="gamemodes-sub-monument" onClick="previewTags();">Monument</button>
					<button disabled type="button" class="btn btn-warning" id="gamemodes-sub-juggernaut" onClick="previewTags();">Juggernaut</button>
					<button disabled type="button" class="btn btn-warning" id="gamemodes-sub-scorebox" onClick="previewTags();">Scorebox</button>
					<button disabled type="button" class="btn btn-warning" id="gamemodes-sub-rage" onClick="previewTags();">Rage</button>
				</div>
			</div>
		</div>
		</div>
		<div class="control-group">
			<label class="control-label">Result</label>
			<div id="tags" class="controls">
				<span id="tag-PA" class="label label-success">PA</span> 
				<span id="tag-Blitz" class="label label-success">Blitz</span> 
				<span id="tag-GS" class="label label-success">GS</span> 
				<span id="tag-tdm" class="label label-info">TDM</span> 
				<span id="tag-dtm" class="label label-info">DTM</span> 
				<span id="tag-ctw" class="label label-info">CTW</span> 
				<span id="tag-koth" class="label label-info">KoTH</span> 
				<span id="tag-dtm-ctw" class="label label-info">DTM-CTW</span> 
				<span id="tag-dtm-koth" class="label label-info">DTM-KoTH</span> 
				<span id="tag-ctw-koth" class="label label-info">CTW-KoTH</span> 
				<span id="tag-dtm-ctw-koth" class="label label-info">DTM-CTW-KoTH</span> 
				<span id="tag-mini" class="label label-warning">Mini</span> 
				<span id="tag-classes" class="label label-warning">Classes</span> 
				<span id="tag-gear" class="label label-warning">Gear</span> 
				<span id="tag-core" class="label label-warning">Core</span> 
				<span id="tag-monument" class="label label-warning">Monument</span> 
				<span id="tag-juggernaut" class="label label-warning">Juggernaut</span> 
				<span id="tag-scorebox" class="label label-warning">Scorebox</span> 
				<span id="tag-rage" class="label label-warning">Rage</span>
			</div>
		</div>
	</form>
</body>
</html>