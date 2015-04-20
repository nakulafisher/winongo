<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <title>Winongo WebGIS</title>
   
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" />
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" />
	<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.5.4/bootstrap-select.min.css"/>
	
	
    <link rel="stylesheet" href="../assets/openlayers/theme/default/style.css" type="text/css" />
    <script src="../assets/openlayers/lib/OpenLayers.js"></script>
    
	
    <style type="text/css">
      body { overflow: hidden; }

      .navbar-offset { margin-top: 50px; }
      #map { position: absolute; top: 50px; bottom: 0px; left: 0px; right: 0px; }
      #map .ol-zoom { font-size: 1.2em; }

      .zoom-top-opened-sidebar { margin-top: 5px; }
      .zoom-top-collapsed { margin-top: 45px; }

      .mini-submenu{
        display:none;  
        background-color: rgba(255, 255, 255, 0.46);
        border: 1px solid rgba(0, 0, 0, 0.9);
        border-radius: 4px;
        padding: 9px;  
        /*position: relative;*/
        width: 42px;
        text-align: center;
      }

      .mini-submenu-left {
        position: absolute;
        top: 60px;
        left: .5em;
        z-index: 40;
      }
      .mini-submenu-right {
        position: absolute;
        top: 60px;
        right: .5em;
        z-index: 40;
      }

      #map { z-index: 35; }

      .sidebar { z-index: 45; }

      .main-row { position: relative; top: 0; }

      .mini-submenu:hover{
        cursor: pointer;
      }

      .slide-submenu{
        background: rgba(0, 0, 0, 0.45);
        display: inline-block;
        padding: 0 8px;
        border-radius: 4px;
        cursor: pointer;
      }

	   div.olControlScaleLine{
				font-family: arial;
				font-size: 11px; 
				color: white;
				background: rgba(15,15,15,0.8);
				text-align: center;
				outline: 10px solid rgba(15,15,15,0.8);
			}

		
	  #form_lapor_banjir{
	  z-index: 1000;
	  position: absolute;
	  }
	 .back{		
height: 100%;
width: 100%;
display: none;
background: rgba(0, 0, 0, 0.5);
position: fixed;
z-index: 900;
	  }
	  .batas{
	  left: 30%;
top: 30%;
position: relative;
z-index: 1000;
background:white;
	moz-box-shadow: 0 0 10px rgba(0,0,0,0.7);
	-webkit-box-shadow: 0 0 10px rgba(0,0,0,0.7);
	box-shadow: 0 0 10px rgba(0,0,0,0.7);
	  width:42%;
border-radius: 5px;
padding-bottom:10px;
	  }
	  
	 
	  .batas_draw{
	  left: 30%;
bottom: 0em;
position: fixed;
z-index: 800;
background:white;
	moz-box-shadow: 0 0 10px rgba(0,0,0,0.7);
	-webkit-box-shadow: 0 0 10px rgba(0,0,0,0.7);
	box-shadow: 0 0 10px rgba(0,0,0,0.7);
	  width:37%;
border-radius: 5px;
padding-bottom:10px;
padding-top:10px;
	  }
	  
	   .batas_form{
	  left: 30%;
top: 20%;
position: relative;
z-index: 1000;
background:white;
	moz-box-shadow: 0 0 10px rgba(0,0,0,0.7);
	-webkit-box-shadow: 0 0 10px rgba(0,0,0,0.7);
	box-shadow: 0 0 10px rgba(0,0,0,0.7);
	  width:38%;
border-radius: 10px;
	  }
.close{
float: right;
top:5px;
right:10px;
position:relative;
padding-top:0;
border:none;
}
.close:hover{
float: right;
top:5px;
right:10px;
position:relative;
padding-top:0;
border:none;
 
}
.point{
background:none;
border:none;
}
.point:hover{
color:red;
}
.line{
background:none;
border:none;
}
.line:hover{
color:red;
}
.polygon{
background:none;
border:none;
}
.polygon:hover{
color:red;
}
	 
    </style>
	<style>
	
.dropdown-submenu {
    position: relative;
}

.dropdown-submenu>.dropdown-menu {
    top: 0;
    left: 100%;
    margin-top: -6px;
    margin-left: -1px;
    -webkit-border-radius: 0 6px 6px 6px;
    -moz-border-radius: 0 6px 6px;
    border-radius: 0 6px 6px 6px;
}

.dropdown-submenu:hover>.dropdown-menu {
    display: block;
}

.dropdown-submenu>a:after {
    display: block;
    content: " ";
    float: right;
    width: 0;
    height: 0;
    border-color: transparent;
    border-style: solid;
    border-width: 5px 0 5px 5px;
    border-left-color: #ccc;
    margin-top: 5px;
    margin-right: -10px;
}

.dropdown-submenu:hover>a:after {
    border-left-color: #fff;
}

.dropdown-submenu.pull-left {
    float: none;
}

.dropdown-submenu.pull-left>.dropdown-menu {
    left: -100%;
    margin-left: 10px;
    -webkit-border-radius: 6px 0 6px 6px;
    -moz-border-radius: 6px 0 6px 6px;
    border-radius: 6px 0 6px 6px;
}
	</style>
	
    <script type="text/javascript" src="//code.jquery.com/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.5.4/bootstrap-select.js"></script>
    <script type="text/javascript">

      function applyMargins() {
        var leftToggler = $(".mini-submenu-left");
        var rightToggler = $(".mini-submenu-right");
        if (leftToggler.is(":visible")) {
          $("#map .olControlPanZoomBar")
            .css("margin-left", 0)
            .removeClass("zoom-top-opened-sidebar")
            .addClass("zoom-top-collapsed");
        } else {
          $("#map .olControlPanZoomBar")
            .css("margin-left", $(".sidebar-left").width())
            .removeClass("zoom-top-opened-sidebar")
            .removeClass("zoom-top-collapsed");
        }
        if (rightToggler.is(":visible")) {
          $("#map .ol-rotate")
            .css("margin-right", 0)
            .removeClass("zoom-top-opened-sidebar")
            .addClass("zoom-top-collapsed");
        } else {
          $("#map .ol-rotate")
            .css("margin-right", $(".sidebar-right").width())
            .removeClass("zoom-top-opened-sidebar")
            .removeClass("zoom-top-collapsed");
        }
      }

      function isConstrained() {
        return $("div.mid").width() == $(window).width();
      }

      function applyInitialUIState() {
        if (isConstrained()) {
          $(".sidebar-left .sidebar-body").fadeOut('slide');
          $(".sidebar-right .sidebar-body").fadeOut('slide');
          $('.mini-submenu-left').fadeIn();
          $('.mini-submenu-right').fadeIn();
        }
      }

      $(function(){
        $('.sidebar-left .slide-submenu').on('click',function() {
          var thisEl = $(this);
          thisEl.closest('.sidebar-body').fadeOut('slide',function(){
            $('.mini-submenu-left').fadeIn();
            applyMargins();
          });
        });

        $('.mini-submenu-left').on('click',function() {
          var thisEl = $(this);
          $('.sidebar-left .sidebar-body').toggle('slide');
          thisEl.hide();
          applyMargins();
        });

        $('.sidebar-right .slide-submenu').on('click',function() {
          var thisEl = $(this);
          thisEl.closest('.sidebar-body').fadeOut('slide',function(){
            $('.mini-submenu-right').fadeIn();
            applyMargins();
          });
        });

        $('.mini-submenu-right').on('click',function() {
          var thisEl = $(this);
          $('.sidebar-right .sidebar-body').toggle('slide');
          thisEl.hide();
          applyMargins();
        });

        $(window).on("resize", applyMargins);

	var map, info;
			var geocoder;
			 var osm = new OpenLayers.Layer.OSM();
			 var wgs = new OpenLayers.Projection("EPSG:4326");
				var lain = new OpenLayers.Projection("EPSG:900913");
				
		OpenLayers.ProxyHost = "../assets/proxy_layer/geoproxy.php?url=";

                map = new OpenLayers.Map('map',
                {controls: 
						[
							new OpenLayers.Control.MouseDefaults(),
							new OpenLayers.Control.MousePosition({prefix: '<div style=\"color: white; font-family: arial; font-size: 12px; font-weight: bold; background-color: rgba(15,15,15,0.8); width: 140px; text-align:center;\">',
								suffix: '<br>(EPSG:4326)</div>', separator: '  |  '}),
							new OpenLayers.Control.PanZoomBar(),
							new OpenLayers.Control.ScaleLine({bottomOutUnits: ''}),
						],
				maxExtent: new OpenLayers.Bounds(110.344068, -7.82777802483259,110.36476909024978,-7.761157).transform(wgs,lain),
            displayProjection: wgs});
			
			map.addLayer(osm);
			
			map.setCenter(
                new OpenLayers.LonLat(110.35999, -7.80751).transform(new OpenLayers.Projection("EPSG:4326"),new OpenLayers.Projection("EPSG:900913")),16);
			
			var uav = new OpenLayers.Layer.WMS(
                "Foto udara",
                "http://localhost:9090/geoserver/winongo/wms",
                {transparent:"true",
				layers: "winongo:winongo_uav_pyramid",
				format:"image/png"},
				{isBaseLayer:false}
				);
			map.addLayer(uav);
		
			var bangunan = new OpenLayers.Layer.WMS(
                "Bangunan",
                "http://localhost:9090/geoserver/winongo/wms",
                {transparent:"true",
				layers: "winongo:bangunan",
				format:"image/png"},
				{isBaseLayer:false}
				);
			map.addLayer(bangunan);
		
var drawlayer = new OpenLayers.Layer.Vector("");
		
		map.addLayer(drawlayer);
			
			var button = $('#pan').button('toggle');
            var interaction;
            $('div.btn-group button').on('click', function(event) {
                var id = event.target.id;

                // Toggle buttons
                button.button('toggle');
                button = $('#'+id).button('toggle');
                // Remove previous interaction
                map.removeControl(interaction);
                // Update active interaction
                switch(event.target.id) {
                    case "select":
                     
					   interaction = new OpenLayers.Control.SelectFeature(drawlayer);
				map.addControl(interaction);
				interaction.activate();
                        break;
                    case "point":
                        interaction =new OpenLayers.Control.DrawFeature(drawlayer,
                                OpenLayers.Handler.Point);
                    map.addControl(interaction);
				interaction.activate();
                        break;
                    case "line":
                        interaction =new OpenLayers.Control.DrawFeature(drawlayer,
                                OpenLayers.Handler.Path);
                    map.addControl(interaction);
				interaction.activate();
                        break;
                    case "polygon":
                        interaction =new OpenLayers.Control.DrawFeature(drawlayer,
                                OpenLayers.Handler.Polygon);
                    map.addControl(interaction);
				interaction.activate();
                        break;
                    default:
                        break;
                }
            });
			
			var dialog;
				drawlayer.events.on
				(
					{
						featureselected: function(event) 
						{
							//pengaturan zoom to feature						
							var dataExtent = drawlayer.getDataExtent();
							map.zoomToExtent(dataExtent);
							map.setCenter(dataExtent,18);

							var feature = event.feature;
							var point_koord = feature.geometry.transform(lain,wgs);
							
							$("#koord_infra_mukim").val(point_koord);
							$("#x_papar").val(point_koord);
							$("#x_rusak").val(point_koord);
							$("#x_posko").val(point_koord);
							
							$("#pilihan_lapor").show();
						}
					}
				);
		


		
        applyInitialUIState();
        applyMargins();
      });
    </script>
	<script>
$(document).ready(function(){
  $("#pilihan_lapor").hide();
  $("#form_lapor_banjir").hide();
  $("#tool_draw").hide();
  $("#lapor_banjir").click(function(){
	$("#pilihan_lapor").hide();
	$("#form_lapor_banjir").show();
  });
  $(".point").click(function(){
	$("#tool_draw").show();
  });
  $(".line").click(function(){
	$("#tool_draw").show();
  });
   $(".polygon").click(function(){
	$("#tool_draw").show();
  });
});



$(document).ready(function(){
    $('#kec_exist_mukim').change(function () {
              var cattype_exist_mukim = $(this).val();
        optionswitch_exist_mukim(cattype_exist_mukim);
    });

});

function optionswitch_exist_mukim(myfilter_exist_mukim) {
    //Populate the optionstore if the first time through
    if ($('#optionstore_exist_mukim').text() == "") {
        $('option[class^="kel_exist_mukim-"]').each(function() {
            var optvalue_exist_mukim = $(this).val();
            var optclass_exist_mukim = $(this).prop('class');
            var opttext_exist_mukim = $(this).text();
            optionlist_exist_mukim = $('#optionstore_exist_mukim').text() + "@%" + optvalue_exist_mukim + "@%" + optclass_exist_mukim + "@%" + opttext_exist_mukim;
            $('#optionstore_exist_mukim').text(optionlist_exist_mukim);
        });
    }
    //delete everything
    $('option[class^="kel_exist_mukim-"]').remove();
    // put the filtered stuff back
    populateoption_exist_mukim = rewriteoption_exist_mukim(myfilter_exist_mukim);
    $('#kel_exist_mukim').html(populateoption_exist_mukim);
}

function rewriteoption_exist_mukim(myfilter_exist_mukim) {
    //rewrite only the filtered stuff back into the option
    var options_exist_mukim = $('#optionstore_exist_mukim').text().split('@%');
    var resultgood_exist_mukim = false;
    var myfilterclass_exist_mukim = "kel_exist_mukim-" + myfilter_exist_mukim;
    var optionlisting_exist_mukim = "";
    
    myfilterclass_exist_mukim = (myfilter_exist_mukim != "")?myfilterclass_exist_mukim:"all";
    //first variable is always the value, second is always the class, third is always the text
    for (var i = 3; i < options_exist_mukim.length; i = i + 3) {
        if (options_exist_mukim[i - 1] == myfilterclass_exist_mukim || myfilterclass_exist_mukim == "all") {
            optionlisting_exist_mukim = optionlisting_exist_mukim + '<option value="' + options_exist_mukim[i - 2] + '" class="kel_exist_mukim-' + options_exist_mukim[i - 1] + '">' + options_exist_mukim[i] + '</option>';
            resultgood_exist_mukim = true;
        }
    }
    if (resultgood_exist_mukim) {
        return optionlisting_exist_mukim;
    }
}

</script>
  </head>
  <body>
	
	<!-- drawing tool select and cancel -->
	<div class="batas_draw" id="tool_draw">
		<div class="container">
			<label class="col-sm-3 control-label">Gambarkan lokasi laporan pada peta</label> 
			<div class="btn-group btn-group-sm" role="group" aria-label="Draw">
				<button id="select" type="button" class="btn btn-default">Select</button>
				<button type="button" class="btn btn-default" onclick="location.href='ol2_lapor.php'">Cancel</button>
			</div>
		</div>
	</div>

  

	<!-- jendela pemilihan jenis laporan -->
	<div class="back" id="pilihan_lapor">
		<div class="batas">
			<a href="ol2_lapor.php"><button class="close">x</button></a>
			<div class="container">
				<div class="btn-group">
					<h4>Pilih jenis pelaporan: </h4>
					<br>
					<div class="btn-group">
						<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">Infrastruktur <span class="caret"></span></button>
						<ul class="dropdown-menu" role="menu">
							<li><a id ="lapor_banjir">Pemukiman</a></li>
							<li><a href="#">Sungai</a></li>
							<li><a href="#">Bencana</a></li>
						</ul>
					</div>
    
					<div class="btn-group">
						<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">Usulan & Kerusakan</i> <span class="caret"></span></button>
						<ul class="dropdown-menu" role="menu">
							<li><a href="#">Infrastruktur Pemukiman</a></li>
							<li><a href="#">Infrastruktur Sungai</a></li>
							<li><a href="#">Infrastruktur Bencana</a></li>
						</ul>
					</div>
	
					<div class="btn-group">
						<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">Kebencanaan <span class="caret"></span></button>
						<ul class="dropdown-menu" role="menu">
							<li><a href="#">Area Bencana</a></li>
							<li><a href="#">Titik Pencemaran</a></li>
						</ul>
					</div>
    
				</div>
  
			</div>
		</div>
	</div>
	
	
	<!-- jendela form pelaporan infrastruktur pemukiman -->
	<div class="back" id="form_lapor_banjir">
		<div class="batas_form">
			<div class="container" >
				<div class="row">
					<div class="col-sm-5">
						<h4>Tambah Infrastruktur Pemukiman Baru:</h4>
						<div class="panel panel-default">
							<form class="form-horizontal" enctype="multipart/form-data" method="POST" action="../assets/php/infra_mukim.php">
							<div class="panel-body form-horizontal payment-form">
							
								<div class="form-group">
									<label for="status" class="col-sm-3 control-label">Infrastruktur</label>
									<div class="col-sm-9">
										<select class="form-control" name="kategori_infra_mukim" >
											<option value='' disabled selected style='display:none;'>Pilih salah satu</option>
											<option value="IPAL">IPAL</option>
											<option value="MCK">MCK</option>
											<option value="Sumber air non PAM">Sumber air non PAM</option>
											<option value="TPS">TPS</option>
											<option value="SAL">SAL</option>
											<option value="SAH">SAH</option>
											<option value="Saluran PDAM">Saluran PDAM</option>
											<option value="Talud pemukiman">Talud pemukiman</option>
											<option value="Jalan pedestrian">Jalan pedestrian</option>
											<option value="RTH">RTH</option>
										</select>
									</div>
								</div> 
								<div class="form-group">
									<label for="concept" class="col-sm-3 control-label">Koordinat</label>
									<div class="col-sm-9">
										<input type="text" class="form-control" id="koord_infra_mukim" name="koord_infra_mukim">
									</div>
								</div>
								<div class="form-group">
									<label for="status" class="col-sm-3 control-label">Kecamatan</label>
									<div class="col-sm-9">
										<select class="form-control" id="kec_exist_mukim" name="kec_infra_mukim" >
											<option value='' disabled selected style='display:none;'>Pilih salah satu</option>
											<option value = "Gedongtengen">Gedongtengen</option>
											<option value = "Jetis">Jetis</option>
											<option value = "Matrijeron">Matrijeron</option>
											<option value = "Ngampilan">Ngampilan</option>
											<option value = "Tegalrejo">Tegalrejo</option>
											<option value = "Wirobrajan">Wirobrajan</option>
										</select>
									</div>
								</div>
								<div class="form-group">
									<label for="status" class="col-sm-3 control-label">Kelurahan</label>
									<div class="col-sm-9">
										<select class="form-control" id="kel_exist_mukim" name="kel_infra_mukim">
											<option value='' disabled selected style='display:none;' class="kel_exist_mukim-Gedongtengen">Pilih salah satu</option>
											<option class="kel_exist_mukim-Gedongtengen" value = "Pringgokusuman">Pringgokusuman</option>
											<option value='' disabled selected style='display:none;' class="kel_exist_mukim-Jetis">Pilih salah satu</option>
											<option class="kel_exist_mukim-Jetis" value = "Bumijo">Bumijo</option>
											<option value='' disabled selected style='display:none;' class="kel_exist_mukim-Matrijeron">Pilih salah satu</option>
											<option class="kel_exist_mukim-Matrijeron" value = "Gedongkiwo">Gedongkiwo</option>
											<option value='' disabled selected style='display:none;' class="kel_exist_mukim-Ngampilan">Pilih salah satu</option>
											<option class="kel_exist_mukim-Ngampilan" value = "Ngampilan">Ngampilan</option>
											<option class="kel_exist_mukim-Ngampilan" value = "Notoprajan">Notoprajan</option>
											<option value='' disabled selected style='display:none;' class="kel_exist_mukim-Tegalrejo">Pilih salah satu</option>
											<option class="kel_exist_mukim-Tegalrejo" value = "Bener">Bener</option>
											<option class="kel_exist_mukim-Tegalrejo" value = "Kricak">Kricak</option>
											<option class="kel_exist_mukim-Tegalrejo" value = "Tegalrejo">Tegalrejo</option>
											<option value='' disabled selected style='display:none;' class="kel_exist_mukim-Wirobrajan">Pilih salah satu</option>
											<option class="kel_exist_mukim-Wirobrajan" value = "Pakuncen">Pakuncen</option>
											<option class="kel_exist_mukim-Wirobrajan" value = "Patangpuluhan">Patangpuluhan</option>
											<option class="kel_exist_mukim-Wirobrajan" value = "Wirobrajan">Wirobrajan</option>
										</select>
									</div>
								</div>
								<span id="optionstore_exist_mukim" style="display:none;"></span>
								<div class="form-group">
									<label for="description" class="col-sm-3 control-label">RW</label>
									<div class="col-sm-9">
										<input type="text" placeholder="00" class="form-control" name="rw_infra_mukim">
									</div>
								</div>	
								<div class="form-group">
									<label for="description" class="col-sm-3 control-label">Deskripsi</label>
									<div class="col-sm-9">
										<textarea type="text" placeholder="....." class="form-control" name="desk_infra_mukim"></textarea>
									</div>
								</div>
								<div class="form-group">
									<div class="col-sm-12 text-right">
										<button type="submit" class="btn btn-default preview-add-button">
											<span class="glyphicon glyphicon-plus"></span> Tambah
										</button>
										<button type="button" class="btn btn-default preview-add-button" onclick="location.href='ol2_lapor.php'">
											Kembali
										</button>
									</div>
								</div>
							
							</div>
								</form>
						</div>            
					</div> 
				</div>
			</div>
		</div>
	</div>

  
    <div class="container">
		<nav class="navbar navbar-fixed-top navbar-default" role="navigation">
			<div class="container-fluid">
			<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="#">WebGIS Winongo</a>
				</div>
          <!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav">
						<li class="active"><a href="#">Peta</a></li>
              <!--<li><a href="#">Link</a></li>-->
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">Pelaporan<b class="caret"></b></a>
							<ul class="dropdown-menu multi-level" role="menu" aria-labelledby="dropdownMenu">
								<li class="dropdown-submenu">
									<a tabindex="-1" href="#">Infrastruktur</a>
									<ul class="dropdown-menu">
										<li class="dropdown-submenu">
											<a href="#">Infrastruktur pemukiman</a>
											<ul class="dropdown-menu">
												<div class="btn-group" role="group" aria-label="Draw">
													<li><button class="point" id="point" type="button" >IPAL</button></li>
													<li><button class="point" id="point" type="button" >MCK</button></li>
													<li><button class="point" id="point" type="button" >Sumber air non PAM</button></li>
													<li><button class="point" id="point" type="button" >TPS</button></li>
													<li><button class="line" id="line" type="button" >SAL</button></li>
													<li><button class="line" id="line" type="button" >SAH</button></li>
													<li><button class="line" id="line" type="button" >Saluran PDAM</button></li>
													<li><button class="line" id="line" type="button" >Talud pemukiman</button></li>
													<li><button class="line" id="line" type="button" >Jalan pedestrian</button></li>
													<li><button class="polygon" id="polygon" type="button" >RTH</button></li>
												</div>
											</ul>
										</li>
										<li class="dropdown-submenu">
											<a href="#">Infrastruktur sungai</a>
											<ul class="dropdown-menu">
												<div class="btn-group" role="group" aria-label="Draw">
													<li><button class="line" id="line" type="button" >Talud sungai</button></li>
													<li><button class="point" id="point" type="button" >Bangunan air</button></li>
												</div>
											</ul>
										</li>
										<li class="dropdown-submenu">
											<a href="#">Infrastruktur kebencanaan</a>
											<ul class="dropdown-menu">
												<div class="btn-group" role="group" aria-label="Draw">
													<li><button class="point" id="point" type="button" >Titik kumpul</button></li>
													<li><button class="point" id="point" type="button" >Hydrant</button></li>
													<li><button class="line" id="line" type="button" >Jalur evakuasi</button></li>
												</div>
											</ul>
										</li>
									</ul>
								</li>
								<li class="divider"></li>
								<li class="dropdown-submenu">
									<a tabindex="-1" href="#">Usulan</a>
									<ul class="dropdown-menu">
										<li class="dropdown-submenu">
											<a href="#">Infrastruktur pemukiman</a>
											<ul class="dropdown-menu">
												<div class="btn-group" role="group" aria-label="Draw">
													<li><button class="point" id="point" type="button" >IPAL</button></li>
													<li><button class="point" id="point" type="button" >MCK</button></li>
													<li><button class="point" id="point" type="button" >Sumber air non PAM</button></li>
													<li><button class="point" id="point" type="button" >TPS</button></li>
													<li><button class="line" id="line" type="button" >SAL</button></li>
													<li><button class="line" id="line" type="button" >SAH</button></li>
													<li><button class="line" id="line" type="button" >Saluran PDAM</button></li>
													<li><button class="line" id="line" type="button" >Talud pemukiman</button></li>
													<li><button class="line" id="line" type="button" >Jalan pedestrian</button></li>
													<li><button class="polygon" id="polygon" type="button" >RTH</button></li>
												</div>
											</ul>
										</li>
										<li class="dropdown-submenu">
											<a href="#">Infrastruktur sungai</a>
											<ul class="dropdown-menu">
												<div class="btn-group" role="group" aria-label="Draw">
													<li><button class="line" id="line" type="button" >Talud sungai</button></li>
													<li><button class="point" id="point" type="button" >Bangunan air</button></li>
												</div>
											</ul>
										</li>
										<li class="dropdown-submenu">
											<a href="#">Infrastruktur kebencanaan</a>
											<ul class="dropdown-menu">
												<div class="btn-group" role="group" aria-label="Draw">
													<li><button class="point" id="point" type="button" >Titik kumpul</button></li>
													<li><button class="point" id="point" type="button" >Hydrant</button></li>
													<li><button class="line" id="line" type="button" >Jalur evakuasi</button></li>
												</div>
											</ul>
										</li>
									</ul>
								</li>
								<li class="divider"></li>
								<li class="dropdown-submenu">
									<a tabindex="-1" href="#">Kebencanaan</a>
									<ul class="dropdown-menu">
										<div class="btn-group" role="group" aria-label="Draw">
											<li><button class="polygon" id="polygon" type="button" >Area bencana</button></li>
											<li><button class="point" id="point" type="button" >Titik pencemaran</button></li>
										</div>
									</ul>
								</li>
							</ul>
						</li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">Download<b class="caret"></b></a>
							<ul class="dropdown-menu">
								<li><a href="#">Peta 1</a></li>
								<li><a href="#">Peta 2</a></li>
								<li><a href="#">Peta 3</a></li>
								<li class="divider"></li>
								<li><a href="#">Citra</a></li>
								<li class="divider"></li>
								<li><a href="#">Pelaporan</a></li>
							</ul>
						</li>
					</ul>
					<form class="navbar-form navbar-left" role="search">
						<div class="form-group">
							<input type="text" class="form-control" placeholder="Search">
						</div>
						<button type="submit" class="btn btn-default">Cari</button>
					</form>
					<ul class="nav navbar-nav navbar-right">
						<li><a href="#">Login</a></li>
						 <!-- <li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
							<ul class="dropdown-menu">
							  <li><a href="#">Action</a></li>
							  <li><a href="#">Another action</a></li>
							  <li><a href="#">Something else here</a></li>
							  <li class="divider"></li>
							  <li><a href="#">Separated link</a></li>
							</ul>
						  </li>-->
					</ul>
				</div><!-- /.navbar-collapse -->
			</div><!-- /.container-fluid -->
		</nav>
	</div>
      
    <div class="navbar-offset"></div>
    
	<div id="map"></div>
    
	<div class="row main-row">
		<div class="col-sm-4 col-md-3 sidebar sidebar-left pull-left">
			<div class="panel-group sidebar-body" id="accordion-left">
				<div class="panel panel-default">
					<div class="panel-heading">
						<h4 class="panel-title">
							<a data-toggle="collapse" href="#layers">
								<i class="fa fa-list-alt"></i>
								Layers
							</a>
							<span class="pull-right slide-submenu">
								<i class="fa fa-chevron-left"></i>
							</span>
						</h4>
					</div>
					<div id="layers" class="panel-collapse collapse in">
						<div class="panel-body list-group">
							<a href="#" class="list-group-item">
								<i class="fa fa-globe"></i> Open Street Map
							</a>
							<a href="#" class="list-group-item">
								<i class="fa fa-globe"></i> Bing
							</a>
							<a href="#" class="list-group-item">
								<i class="fa fa-globe"></i> WMS
							</a>
						</div>
					</div>
				</div>
				<div class="panel panel-default">
					<div class="panel-heading">
						<h4 class="panel-title">
							<a data-toggle="collapse" href="#properties">
								<i class="fa fa-list-alt"></i>
								Penjelasan
							</a>
						</h4>
					</div>
					<div id="properties" class="panel-collapse collapse in">
						<div class="panel-body">
							<p>
								Webgis
							</p>
							<p>
								Ini
							</p>
							<p>
								Benar - benar 
							</p>
							<p>
								Kece
							</p>
						</div>
					</div>
				</div>
			</div>
        </div>
        <div class="col-sm-4 col-md-6 mid"></div>
		<div class="col-sm-4 col-md-3 sidebar sidebar-right pull-right">
			<div class="panel-group sidebar-body" id="accordion-right">
				<div class="panel panel-default">
					<div class="panel-heading">
						<h4 class="panel-title">
							<a data-toggle="collapse" href="#taskpane">
								<i class="fa fa-tasks"></i>
								Tentang Kami
							</a>
							<span class="pull-right slide-submenu">
								<i class="fa fa-chevron-right"></i>
							</span>
						</h4>
					</div>
					<div id="taskpane" class="panel-collapse collapse in">
						<div class="panel-body">
							<p>
								Seluruh data disusun oleh rekan - rekan PPIDS
							</p>
							<p>
								Yaitu Miranty, Bayu, Jesper, Lintang
							</p>
							<p>
								Pembuatan WebGIS dirancang oleh
							</p>
							<p>
								Miranty dan Arvy
							</p>
						</div>
					</div>
				</div>
			</div>
        </div>
	</div>
      
	<div class="mini-submenu mini-submenu-left pull-left">
		<i class="fa fa-list-alt"></i>
    </div>
    
	<div class="mini-submenu mini-submenu-right pull-right">
		<i class="fa fa-tasks"></i>
	</div>
	
	
  </body>
</html>