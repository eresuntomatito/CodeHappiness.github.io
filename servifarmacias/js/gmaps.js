function initialize() {
		//villa
		var villa = new google.maps.LatLng(24.750629, -107.429002);
        var mapOptions = {
          center: villa,
          zoom: 14,
          mapTypeId: google.maps.MapTypeId.ROADMAP
        }
        var map1 = new google.maps.Map(document.getElementById('villaMap'), mapOptions);
        var marker1 = new google.maps.Marker({
        	position: villa,
        	map: map1,
        	title: 'Servi-Farmacia Villa Colonial'
        });
        //arcos
		var arcos = new google.maps.LatLng(24.764368, -107.432020);
        var mapOptions = {
          center: arcos,
          zoom: 14,
          mapTypeId: google.maps.MapTypeId.ROADMAP
        }
        var map2 = new google.maps.Map(document.getElementById('arcosMap'), mapOptions);
        var marker2 = new google.maps.Marker({
        	position: arcos,
        	map: map2,
        	title: 'Servi-Farmacia Los Arcos'
        });
        //huertos
		var huertos = new google.maps.LatLng(24.864511, -107.392063);
        var mapOptions = {
          center: huertos,
          zoom: 14,
          mapTypeId: google.maps.MapTypeId.ROADMAP
        }
        var map3 = new google.maps.Map(document.getElementById('huertosMap'), mapOptions);
        var marker3 = new google.maps.Marker({
        	position: huertos,
        	map: map3,
        	title: 'Servi-Farmacia Los Huertos'
        });
        //sanpedro
		var sanpedro = new google.maps.LatLng(24.768963, -107.553201);
        var mapOptions = {
          center: sanpedro,
          zoom: 14,
          mapTypeId: google.maps.MapTypeId.ROADMAP
        }
        var map4 = new google.maps.Map(document.getElementById('sanpedroMap'), mapOptions);
        var marker4 = new google.maps.Marker({
        	position: sanpedro,
        	map: map4,
        	title: 'Servi-Farmacia San Pedro'
        });
        //torres
		var torres = new google.maps.LatLng(24.770415, -107.455371);
        var mapOptions = {
          center: torres,
          zoom: 14,
          mapTypeId: google.maps.MapTypeId.ROADMAP
        }
        var map5 = new google.maps.Map(document.getElementById('torresMap'), mapOptions);
        var marker5 = new google.maps.Marker({
        	position: torres,
        	map: map5,
        	title: 'Servi-Farmacia Torres'
        });
        //villa juarez
		var villajuarez = new google.maps.LatLng(24.661547, -107.542079);
        var mapOptions = {
          center: villajuarez,
          zoom: 14,
          mapTypeId: google.maps.MapTypeId.ROADMAP
        }
        var map6 = new google.maps.Map(document.getElementById('villajuarezMap'), mapOptions);
        var marker6 = new google.maps.Marker({
        	position: villajuarez,
        	map: map6,
        	title: 'Servi-Farmacia Villa Juarez'
        });
         //Santa Fe
		var santafe = new google.maps.LatLng(24.844159, -107.417670);
        var mapOptions = {
          center: santafe,
          zoom: 14,
          mapTypeId: google.maps.MapTypeId.ROADMAP
        }
        var map7 = new google.maps.Map(document.getElementById('santafeMap'), mapOptions);
        var marker7 = new google.maps.Marker({
        	position: santafe,
        	map: map7,
        	title: 'Servi-Farmacia Santa Fe'
        });
          //Empaques
		var empaques = new google.maps.LatLng(24.754943, -107.433980);
		
        var mapOptions = {
          center: empaques,
          zoom: 14,
          mapTypeId: google.maps.MapTypeId.ROADMAP
        }
        var map8 = new google.maps.Map(document.getElementById('empaquesMap'), mapOptions);
        var marker8 = new google.maps.Marker({
        	position: empaques,
        	map: map8,
        	title: 'Servi-Farmacia Empaques'
        });
      }
      google.maps.event.addDomListener(window, 'load', initialize);