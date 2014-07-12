var igms = false;
var lat;
if (typeof initGoogleMaps != 'undefined' && typeof google != 'undefined')
{
	igms = true;
	initGoogleMaps();
}







function initScripts()
{
	if (igms) return;
	
	var $scripts = [
        componentsPath + "modules/admin/maps/google/assets/lib/jquery-ui-map/ui/jquery.ui.map.js",
        componentsPath + "modules/admin/maps/google/assets/lib/jquery-ui-map/ui/jquery.ui.map.extensions.js",
        componentsPath + "modules/admin/maps/google/assets/lib/jquery-ui-map/ui/jquery.ui.map.services.js",
        componentsPath + "modules/admin/maps/google/assets/lib/jquery-ui-map/ui/jquery.ui.map.microformat.js",
        componentsPath + "modules/admin/maps/google/assets/lib/jquery-ui-map/addons/markerclustererplus/markerclusterer.min.js"
    ];
	$.each($scripts, function(k,v){
		if ($('[src="'+v+'"]').length) return true;
		var scriptNode = document.createElement('script');
		
		scriptNode.src = v;
		$('head').prepend($(scriptNode));
	});
	
	$.extend($.ui.gmap.prototype, {
		pagination: function(prop) {
			var $el = $("<div id='pagination' class='btn-group btn-group-lg' style='width: 100%'>"
					+ "<a href='#' class='col-md-2 back-btn btn btn-inverse'>&lsaquo;</a>"
					+ "<a class='col-md-8 display btn btn-inverse'></a>"
					+ "<a href='#' class='col-md-2 fwd-btn btn btn-inverse'>&rsaquo;</a>"
				+ "</div>");

			var self = this, i = 0, prop = prop || 'title';
			self.set('pagination', function(a, b) {
				if (a) {
					i = i + b;
					$el.find('.display').text(self.get('markers')[i][prop]);
					self.get('map').panTo(self.get('markers')[i].getPosition());
				}
			});
			self.get('pagination')(true, 0);
			$el.find('.back-btn').click(function(e) {
				e.preventDefault();
				self.get('pagination')((i > 0), -1, this);
			});
			$el.find('.fwd-btn').click(function(e) {
				e.preventDefault();
				self.get('pagination')((i < self.get('markers').length - 1), 1, this);
			});
			self.addControl($el, google.maps.ControlPosition.TOP_LEFT);			
		}
	});
	igms = true;
}

function initGoogleMaps()
{
	initScripts();

	
	
	function msfr_info ( marker ) 
		{
		
			var content = $('<div/>');
				content.addClass('innerAll inner-2x').html('<div></div>');

				//content.prepend('<h4></h4>').find(':header').text(marker.title);
				
				content.find('> div').addClass('msfr_info_content').html('<h4>'+marker.place_name +"</h4> <p>" + marker.address+"</p>");

			return content.html();
		}
		function msfr_info_players ( marker ) 
		{
			var sport ="";
			var content = $('<div/>');
				content.addClass('innerAll inner-2x').html('<div></div>');
				if (marker.sport != null)
					sport = marker.sport.name_vn;
				//content.prepend('<h4></h4>').find(':header').text(marker.title);
				
				content.find('> div').addClass('msfr_info_content').html('<h4>'+marker.profile.prenom + " " + marker.profile.nom  +" đang chơi" +" "+ sport +"</h4> <p>" + marker.place.address+" "+marker.place.address+"</p>");

			return content.html();
		}
	/*
	 * Terrain field
	 */

	if ($('#google-fs').length)
	{
		$('#google-fs').height($(window).height() - $('#footer').height() - $('.navbar.main').height() - $('#menu-top').height());

		$('#google-fs').gmap({
			'zoomControl' : true,
	        'zoomControlOpt': {
	            'style' : 'SMALL',
	            'position' : 'TOP_LEFT'
	        },
	        'panControl' : false,
	        'streetViewControl' : false,
	        'mapTypeControl': false,
	        'overviewMapControl': false,
	        'scrollwheel': false,
	        'mapTypeId': google.maps.MapTypeId.ROADMAP
		})
		.bind('init', function() 
		{ 
			$.getJSON( 'https://teamsport.vn/markers-field', function(data) 
			{ 
				$.each( data, function(i, marker) 
				{
					if(marker.latitude != null && marker.longitude !=null)
					{
						$('#google-fs').gmap('addMarker', 
						{ 
							'position': new google.maps.LatLng(marker.latitude,marker.longitude), 
							'bounds': true,
							'animation': google.maps.Animation.DROP
						})
						.click(function() 
						{
							//$('#google-fs').gmap('openInfoWindow', { 'content': marker.place_name+" " + marker.address },this);
							$('#google-fs').gmap('openInfoWindow', { 'content': msfr_info(marker), 'maxWidth': 330 }, this);
							
						});
						
					}
				});

				$('#google-fs').gmap('option', 'center', new google.maps.LatLng(data[1].latitude, data[1].longitude) );
				$('#google-fs').gmap('option', 'zoom', 13 );

				/*setTimeout(function(){
					$('#google-fs').gmap('openInfoWindow', { 'content': data[1].content }, $('#google-fs').gmap('get', 'marker')[1]);
				}, 1000);*/
			});
		});
	}

	
	//currently playing
	if ($('#map-currently-play').length)
	{
		$('#map-currently-play').height($(window).height() - $('#footer').height() - $('.navbar.main').height() - $('#menu-top').height());

		$('#map-currently-play').gmap({
			'zoomControl' : true,
	        'zoomControlOpt': {
	            'style' : 'SMALL',
	            'position' : 'TOP_LEFT'
	        },
	        'panControl' : false,
	        'streetViewControl' : false,
	        'mapTypeControl': false,
	        'overviewMapControl': false,
	        'scrollwheel': false,
	        'mapTypeId': google.maps.MapTypeId.ROADMAP
		})
		.bind('init', function() 
		{ 
			$.getJSON( 'https://teamsport.vn/markers', function(data) 
			{ 
				$.each( data, function(i, marker) 
				{
						if(marker.place != null)
						{
							$('#map-currently-play').gmap('addMarker', 
							{ 
								'position': new google.maps.LatLng(marker.place.latitude,marker.place.longitude), 
								'bounds': true,
								'animation': google.maps.Animation.DROP
							})
							.click(function() 
							{
								$('#map-currently-play').gmap('openInfoWindow', { 'content': msfr_info_players(marker) }, this);
							});
						}
					
				});

				$('#map-currently-play').gmap('option', 'center', new google.maps.LatLng(data[1].place.latitude, data[1].place.longitude) );
				$('#map-currently-play').gmap('option', 'zoom', 10 );

				/*setTimeout(function(){
					$('#google-fs').gmap('openInfoWindow', { 'content': data[1].content }, $('#google-fs').gmap('get', 'marker')[1]);
				}, 1000);*/
			});
		});
	}

}