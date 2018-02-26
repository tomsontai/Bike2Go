<?php 
session_start(); 
if (!isset($_SESSION["authenticated"])){
	header("Location: login.php"); 
    die();
}
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">

    <link rel="stylesheet" href="stylesheet.css">

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js" integrity="sha384-a5N7Y/aK3qNeh15eJKGWxsqtnX/wWdSZSKp+81YjTmS15nvnvxKHuzaWwXHDli+4" crossorigin="anonymous"></script>


    <title>HackMyCity</title>
</head>
	<body>
	
		<div class="container-fluid">
			<div class="row" id="header">
				<div class="col-2">
					<img src="logo.png" alt="Bike2Go logo"/>
				</div>
			</div>
		</div>
	<br/><h1 class="text-center header">Individual Bikes Available</h1><br/>
	<div class="container-fluid">
		<div class="row" id = "main">	   
			<div id="map"></div>
			<script>
				function initMap() {
					var locations = [
					['Bike 1 - Douglas', 49.203472, -122.912805],
                    ['Bike 2 - Douglas', 49.203172, -122.912205],
                    ['Bike 3 - Douglas', 49.203272, -122.912005],
                    ['Bike 4 - Douglas', 49.203372, -122.912305],
					['Bike 5 - Columbia', 49.204983, -122.906089],
					['Bike 6 - New Westminster Station', 49.201431, -122.912248],
                    ['Bike 7 - New Westminster Station', 49.201443, -122.912324],
                    ['Bike 8 - New Westminster Station', 49.201475, -122.912246],
                    ['Bike 9 - New Westminster Station', 49.201437, -122.912430],
					['Bike 10 - River Market', 49.200313, -122.911172],
					['Bike 11 - Museum', 49.207379, -122.912255],
					['Bike 12 - Walmart', 49.211829, -122.923060],
					['Bike 13 - Massey Theatre', 49.215059, -122.927195],
                    ['Bike 14 - JIBC', 49.222675, -122.910293],
                    ['Bike 15 - Royal Columbian', 49.227335, -122.892033],
                    ['Bike 16 - Starlight Casino', 49.185947, -122.956212],
                    ['Bike 17 - Sapperton Station', 49.224806, -122.889459],
                    ['Bike 18 - Sapperton Station', 49.224796, -122.889559],
                    ['Bike 19 - Sapperton Station', 49.224996, -122.889159],
                    ['Bike 20 - Sapperton Station', 49.224896, -122.889059],
                    ['Bike 21 - Sapperton Station', 49.224596, -122.889359],
                    ['Bike 22 - Sullivan Park', 49.211877, -122.910751],
                    ['Bike 23 - Sullivan Park', 49.211277, -122.910151],
                    ['Bike 24 - Sullivan Park', 49.211577, -122.910251],
                    ['Bike 25 - Braid Station', 49.233219, -122.882841],
                    ['Bike 26 - Braid Station', 49.233119, -122.882941],
                    ['Bike 27 - Braid Station', 49.233319, -122.882841],
                    ['Bike 28 - 22nd Station', 49.199888, -122.949170],
                    ['Bike 29 - 22nd Station', 49.199788, -122.949570],
                    ['Bike 30 - 22nd Station', 49.200088, -122.949270],
                    ['Bike 31 - 22nd Station', 49.199788, -122.949470],
                    ['Bike 32 - 22nd Station', 49.199988, -122.949870],
                    ['Bike 33 - 22nd Station', 49.199988, -122.949170]
					];
					var mapOptions = {
						center: new google.maps.LatLng(49.203472, -122.912805),
						zoom: 14,
						mapTypeId: google.maps.MapTypeId.ROADMAP
					 }
					var map = new google.maps.Map(document.getElementById('map'), mapOptions);	
					var desc = new google.maps.InfoWindow();
					var marker, i;
				for(i = 0; i < locations.length; i++) {
					marker = new google.maps.Marker({
					position: new google.maps.LatLng(locations[i][1], locations[i][2]),
					map: map,
					icon: "transparentbike.png",
					draggable: true
					});
				
					google.maps.event.addListener(marker, 'click', (function(marker, i) {
						return function() {
							desc.setContent(locations[i][0]);
							desc.open(map, marker);
							window.setTimeout(function() {desc.close(map, marker);}, 2000);
							map.setZoom(17);
							map.setCenter(marker.getPosition());
							window.setTimeout(function() {map.setZoom(14);}, 2000);
						}
						
					})(marker, i));
					}
					
					
			
    var pathCoordinates = [
new google.maps.LatLng(49.1950547457799, -122.9518979013745),
new google.maps.LatLng(49.1943969361467, -122.951148838191),
new google.maps.LatLng(49.19362639930044, -122.953216987077),
new google.maps.LatLng(49.1934138847492, -122.953707480444),
new google.maps.LatLng(49.1927944881598, -122.955139224885),
new google.maps.LatLng(49.1920392088451, -122.957145021486),
new google.maps.LatLng(49.1898152800608, -122.957197949611),
new google.maps.LatLng(49.1879584349388, -122.957216373801),
new google.maps.LatLng(49.1859602209971, -122.957236201507),
new google.maps.LatLng(49.1859265999670, -122.957233499586),
new google.maps.LatLng(49.18523829960206, -122.957234600513),
new google.maps.LatLng(49.1837788003076, -122.957234200549),
new google.maps.LatLng(49.1835993627653, -122.957235238903),
new google.maps.LatLng(49.1833643998654, -122.957236599542),
new google.maps.LatLng(49.1831923004272, -122.957236900153),
new google.maps.LatLng(49.1828104497453, -122.957247125650),
new google.maps.LatLng(49.1818816001435, -122.957271999616),
new google.maps.LatLng(49.1771759999554 , -122.957335899808),
new google.maps.LatLng(49.17706349967961, -122.957340599776),
new google.maps.LatLng(49.1769708003255, -122.957343899669),
new google.maps.LatLng(49.1762015996388, -122.957321599555),
new google.maps.LatLng(49.1760403223466, -122.957392727340),
new google.maps.LatLng(49.1759564410861, -122.957395968733),
new google.maps.LatLng(49.1759377499330, -122.957396691372),
new google.maps.LatLng(49.1751252389279, -122.957373539020),
new google.maps.LatLng(49.17570507104786, -122.955779072938),
new google.maps.LatLng(49.17581990820872, -122.955351057925),
new google.maps.LatLng(49.1758729185602, -122.955153478929),
new google.maps.LatLng(49.1759911749471, -122.954710984312),
new google.maps.LatLng(49.1765824588578, -122.952490870197),
new google.maps.LatLng(49.17729581505311, -122.950278389334),
new google.maps.LatLng(49.1786843691444, -122.947173293740),
new google.maps.LatLng(49.17945875913956, -122.944968387943),
new google.maps.LatLng(49.18204260335592, -122.939252977358),
new google.maps.LatLng(49.1821938722593, -122.938918329373),
new google.maps.LatLng(49.1824532676490, -122.938399534515),
new google.maps.LatLng(49.1833573383793, -122.936652567392),
new google.maps.LatLng(49.1843338809961, -122.934989698609),
new google.maps.LatLng(49.18456657287471, -122.934715100036),
new google.maps.LatLng(49.1848297817320, -122.934394723265),
new google.maps.LatLng(49.1859016834970, -122.933029135520),
new google.maps.LatLng(49.1862288383922, -122.932256894412),
new google.maps.LatLng(49.1866340797462, -122.931223710509),
new google.maps.LatLng(49.1870179140102, -122.930088340360),
new google.maps.LatLng(49.1886656287098, -122.927676425207),
new google.maps.LatLng(49.1919645268185, -122.922942337996),
new google.maps.LatLng(49.1951779896603, -122.918849898442),
new google.maps.LatLng(49.1938998910954, -122.916004522498),
new google.maps.LatLng(49.1907699999821, -122.915090000362),
new google.maps.LatLng(49.19134999993599, -122.914760000452),
new google.maps.LatLng(49.1948600001748, -122.910660000411),
new google.maps.LatLng(49.1988000001950, -122.905359999637),
new google.maps.LatLng(49.2019600000631, -122.900419999427),
new google.maps.LatLng(49.2058651346419, -122.894489618826),
new google.maps.LatLng(49.2070666502202, -122.892923225825),
new google.maps.LatLng(49.2070754226226, -122.892911788518),
new google.maps.LatLng(49.2071105552856, -122.892865918341),
new google.maps.LatLng(49.2071690777237, -122.892811570701),
new google.maps.LatLng(49.2071854360209, -122.892796444449),
new google.maps.LatLng(49.2092656331867, -122.890873082732),
new google.maps.LatLng(49.2107157712969, -122.889626473423),
new google.maps.LatLng(49.21216768851691, -122.888460104192),
new google.maps.LatLng(49.2137400002408, -122.886890000053),
new google.maps.LatLng(49.2145800002377, -122.885580000196),
new google.maps.LatLng(49.21516000037769, -122.883590000070),
new google.maps.LatLng(49.2155100004162, -122.882039999835),
new google.maps.LatLng(49.2158800003358, -122.880990000411),
new google.maps.LatLng(49.2165599996386, -122.878120000158),
new google.maps.LatLng(49.2169599997807, -122.876439999706),
new google.maps.LatLng(49.2249893512001, -122.876431028076),
new google.maps.LatLng(49.2251472701222, -122.876430852660),
new google.maps.LatLng(49.22591000033271, -122.876429999965),
new google.maps.LatLng(49.2262099997315, -122.876420000465),
new google.maps.LatLng(49.2262782996552, -122.876409699736),
new google.maps.LatLng(49.2285607414816, -122.876413794161),
new google.maps.LatLng(49.2285634422276, -122.876410775361),
new google.maps.LatLng(49.2287500002297, -122.876430000451),
new google.maps.LatLng(49.2296800000359, -122.876470000583),
new google.maps.LatLng(49.2298599995788, -122.876480000215),
new google.maps.LatLng(49.22999999981066, -122.876200000529),
new google.maps.LatLng(49.2300700004356, -122.876009999416),
new google.maps.LatLng(49.23018999984578 , -122.875610000417),
new google.maps.LatLng(49.2302700004171, -122.875429999418),
new google.maps.LatLng(49.2304800001117, -122.875160000125),
new google.maps.LatLng(49.2306000002248, -122.875030000637),
new google.maps.LatLng(49.2306200002814, -122.875029999638),
new google.maps.LatLng(49.23096000035311, -122.875030000500),
new google.maps.LatLng(49.2310699998301, -122.875060000408),
new google.maps.LatLng(49.2312299995665, -122.875179999409),
new google.maps.LatLng(49.23131999988098 , -122.875320000054),
new google.maps.LatLng(49.2313999999517, -122.875490000358),
new google.maps.LatLng(49.2316000002222, -122.876019999526),
new google.maps.LatLng(49.2316900003364, -122.876169999631),
new google.maps.LatLng(49.23194000032050, -122.876359999318),
new google.maps.LatLng(49.2321899998740, -122.876560000659),
new google.maps.LatLng(49.2325000001207, -122.876760000359),
new google.maps.LatLng(49.2327399999624, -122.877129999408),
new google.maps.LatLng(49.2328099998489, -122.877310000541),
new google.maps.LatLng(49.2328800002027, -122.877449999922),
new google.maps.LatLng(49.2329500001877, -122.877599999591),
new google.maps.LatLng(49.2330200003997, -122.877729999871),
new google.maps.LatLng(49.2330400000712, -122.877789999422),
new google.maps.LatLng(49.2331349431992, -122.878067526984),
new google.maps.LatLng(49.2331699996759, -122.878170000488),
new google.maps.LatLng(49.2333200003680, -122.878500000009),
new google.maps.LatLng(49.2334399999942, -122.878890000677),
new google.maps.LatLng(49.23351000024766, -122.879350000108),
new google.maps.LatLng(49.2335699997764, -122.879850000443),
new google.maps.LatLng(49.23360999975614, -122.880009999986),
new google.maps.LatLng(49.2337200002073, -122.880199999564),
new google.maps.LatLng(49.2338900004110, -122.880330000234),
new google.maps.LatLng(49.2339700002046, -122.880379999779),
new google.maps.LatLng(49.2340900000855, -122.880489999827),
new google.maps.LatLng(49.2343399995467, -122.880709999416),
new google.maps.LatLng(49.2344699997763, -122.880900000592),
new google.maps.LatLng(49.2344799997264, -122.880920000303),
new google.maps.LatLng(49.2344800001393, -122.880930000503),
new google.maps.LatLng(49.2346999999837, -122.881300000020),
new google.maps.LatLng(49.2347699998313, -122.881509999826),
new google.maps.LatLng(49.2348300000834, -122.881960000391),
new google.maps.LatLng(49.2348500004226, -122.882169999726),
new google.maps.LatLng(49.2348800002490, -122.882469999999),
new google.maps.LatLng(49.2349099996819, -122.882679999422),
new google.maps.LatLng(49.2349399995564, -122.882850000672),
new google.maps.LatLng(49.2350600001711, -122.883260000522),
new google.maps.LatLng(49.2350699999570, -122.883380000024),
new google.maps.LatLng(49.2351400001365, -122.883829999981),
new google.maps.LatLng(49.2351900001883, -122.884130000188),
new google.maps.LatLng(49.2352199997252, -122.884300000529),
new google.maps.LatLng(49.2352799999777, -122.884760000674),
new google.maps.LatLng(49.2353600001092, -122.885189999788),
new google.maps.LatLng(49.2354300000198, -122.885380000229),
new google.maps.LatLng(49.23551999964474, -122.885559999929),
new google.maps.LatLng(49.2357200000411, -122.885820000171),
new google.maps.LatLng(49.2358399997254, -122.886070000569),
new google.maps.LatLng(49.2359099997231, -122.886309999670),
new google.maps.LatLng(49.2359499996404, -122.886810000036),
new google.maps.LatLng(49.2360100004075, -122.887290000021),
new google.maps.LatLng(49.2360699998923, -122.887730000458),
new google.maps.LatLng(49.2360800004277, -122.887989999642),
new google.maps.LatLng(49.2360500003043, -122.888249999880),
new google.maps.LatLng(49.23602608424516 , -122.888513068686),
new google.maps.LatLng(49.2360199996664, -122.888580000636),
new google.maps.LatLng(49.2359999996420, -122.888720000522),
new google.maps.LatLng(49.2359300000301 , -122.889180000499),
new google.maps.LatLng(49.2359200004346, -122.889719999930),
new google.maps.LatLng(49.2359499998073, -122.889940000399),
new google.maps.LatLng(49.2361899995949, -122.890420000233),
new google.maps.LatLng(49.2364299996264, -122.890889999999),
new google.maps.LatLng(49.2366600002489, -122.891119999891),
new google.maps.LatLng(49.2369100001778, -122.891299999928),
new google.maps.LatLng(49.2370599997922, -122.891349999937),
new google.maps.LatLng(49.2371999995813, -122.891449999818),
new google.maps.LatLng(49.2375299997585, -122.891789999485),
new google.maps.LatLng(49.2378599998149, -122.892129999557),
new google.maps.LatLng(49.2379600001758, -122.892270000479),
new google.maps.LatLng(49.23805406281468, -122.892505891831),
new google.maps.LatLng(49.2377199003494, -122.892519576922),
new google.maps.LatLng(49.2377199341500, -122.892523034562),
new google.maps.LatLng(49.2377200236751, -122.893250195380),
new google.maps.LatLng(49.2375399773706, -122.893259772343),
new google.maps.LatLng(49.2375500297214, -122.893489954993),
new google.maps.LatLng(49.2374399954090, -122.893490003397),
new google.maps.LatLng(49.2374185024203, -122.894146971229),
new google.maps.LatLng(49.2379659071044, -122.894125219865),
new google.maps.LatLng(49.2380000382455, -122.894841727273),
new google.maps.LatLng(49.2361897841622, -122.894899915315),
new google.maps.LatLng(49.2361832276678, -122.895611406104),
new google.maps.LatLng(49.2357146001842, -122.895633100634),
new google.maps.LatLng(49.23534440019232, -122.897042000631),
new google.maps.LatLng(49.2352760492664, -122.897269774528),
new google.maps.LatLng(49.23510745491325, -122.897630545271),
new google.maps.LatLng(49.2347793668733, -122.898265188945),
new google.maps.LatLng(49.2344217058180, -122.898957040856),
new google.maps.LatLng(49.23351684378177, -122.900599484862),
new google.maps.LatLng(49.2324590805876, -122.902557394750),
new google.maps.LatLng(49.2303053084946, -122.906556167780),
new google.maps.LatLng(49.2279834147971, -122.910866249196),
new google.maps.LatLng(49.2272383439960, -122.912253229096),
new google.maps.LatLng(49.2256071328801, -122.915289795412),
new google.maps.LatLng(49.2247009629052, -122.916966689965),
new google.maps.LatLng(49.2233333688276, -122.919497464201),
new google.maps.LatLng(49.22322945621 , -122.919689759401),
new google.maps.LatLng(49.2210058135153, -122.923839842185),
new google.maps.LatLng(49.2190635314590, -122.927453406842),
new google.maps.LatLng(49.2189029868930, -122.927746817837),
new google.maps.LatLng(49.2174706406275, -122.930364573456),
new google.maps.LatLng(49.2168841187031, -122.931471328815),
new google.maps.LatLng(49.2152883439168, -122.934482527981),
new google.maps.LatLng(49.2135469419502, -122.937641670985),
new google.maps.LatLng(49.2135189714618, -122.937693983166),
new google.maps.LatLng(49.2133962886936, -122.937923426202),
new google.maps.LatLng(49.2118980254279, -122.940725510097),
new google.maps.LatLng(49.2110564102779, -122.942304894834),
new google.maps.LatLng(49.2101234912575, -122.943986672474),
new google.maps.LatLng(49.2099009715986, -122.944408272650),
new google.maps.LatLng(49.2095593631692, -122.945055506614),
new google.maps.LatLng(49.2073941164512, -122.949058572971),
new google.maps.LatLng(49.2069355006761, -122.949906453847),
new google.maps.LatLng(49.2059293568080, -122.951894482828),
new google.maps.LatLng(49.2057773321032, -122.952218038658),
new google.maps.LatLng(49.2056357148365, -122.952519445267),
new google.maps.LatLng(49.2052929002407, -122.953295327909),
new google.maps.LatLng(49.20483970006534, -122.953733199532),
new google.maps.LatLng(49.2047947000512, -122.953829500315),
new google.maps.LatLng(49.20371119962228, -122.955814699505),
new google.maps.LatLng(49.20279920005992 , -122.957496300376),
new google.maps.LatLng(49.2014301487609, -122.959989791988),
new google.maps.LatLng(49.20136800027256, -122.959951000552),
new google.maps.LatLng(49.2013670979560, -122.959950747325),
new google.maps.LatLng(49.2004763000210, -122.958791300240),
new google.maps.LatLng(49.2004330115908 , -122.958667009829),
new google.maps.LatLng(49.1998672280665, -122.957915741542),
new google.maps.LatLng(49.19859664014876, -122.956325682060),
new google.maps.LatLng(49.1984728742037, -122.956167823026),
new google.maps.LatLng(49.1982277895746, -122.955855226545),
new google.maps.LatLng(49.1981746726831, -122.955621520122),
new google.maps.LatLng(49.1981560001185, -122.955618899972),
new google.maps.LatLng(49.1980583997682, -122.955639000459),
new google.maps.LatLng(49.19799600022365, -122.955599200205),
new google.maps.LatLng(49.1972626999105 , -122.954738999840),
new google.maps.LatLng(49.1972626549243, -122.954738975174),
new google.maps.LatLng(49.1972092537154, -122.954595446354),
new google.maps.LatLng(49.1972071271579, -122.954592988564),
new google.maps.LatLng(49.1969241001969, -122.954266000170),
new google.maps.LatLng(49.1968039092440, -122.954061653869),
new google.maps.LatLng(49.1966934811606, -122.953980624088),
new google.maps.LatLng(49.1965737975275, -122.953842743166),
new google.maps.LatLng(49.1964668868095, -122.953726668476),
new google.maps.LatLng(49.1963577994991, -122.953506421653),
new google.maps.LatLng(49.1963512502640, -122.953498104361),
new google.maps.LatLng(49.1961174582871, -122.953201200136),
new google.maps.LatLng(49.19605641805652, -122.953117266240),
new google.maps.LatLng(49.1958809306836, -122.952903610896),
new google.maps.LatLng(49.19573596125673, -122.952705225365),
new google.maps.LatLng(49.1955948068364, -122.952514472984),
new google.maps.LatLng(49.1953315766513, -122.952201646040),
new google.maps.LatLng(49.1951408319967, -122.951995644649),
new google.maps.LatLng(49.1950547457799, -122.951897901374)
    ];
    var pathToCenter = new google.maps.Polygon({
        path: pathCoordinates,
        geodesic: false,
        strokeColor: '#FF0000',
        strokeOpacity: 1.0,
        strokeWeight: 2,
        fillColor:'#FF0000',
        fillOpacity:0.0
    });
    pathToCenter.setMap(map);
}
			</script>
		<script async defer
		src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCFnZlh2tZSTcf6E35RG8GBoKjdi4MzXic&callback=initMap">
		</script>
            </div>
		</div> 
		</br>
		<div class = "container-fluid" id="bottom">
			
		
		<br/><h1 class="text-center header">Bikes Available at Major Hubs</h1><br/>
	<div class="grid text-center">
		<div class="row col-md-12">
			<div class="tile tile-clouds col-md-4 col-sm-6 col-xs-12">
				<h2>New West Skytrain Station</h2>
				<h5>New Westminister, BC, V3M 1B9</h5>
				<a href="#claimBike"><div class="progress">
					<div class="progress-bar bg-success" role="progressbar" style="width: 65%">5 available</div>
					<div class="progress-bar bg-warning" role="progressbar" style="width: 35%">3 n/a</div>
				</div></a>
			</div>
			<div class="tile tile-clouds col-md-4 col-sm-6 col-xs-12">
				<h2>Douglas College</h2>
				<h5>700 Royal Ave, V3M 5Z5</h5>
				<a href="#claimBike"><div class="progress">
					<div class="progress-bar bg-success" role="progressbar" style="width: 35%">3 available</div>
					<div class="progress-bar bg-warning" role="progressbar" style="width: 65%">6 n/a</div>
				</div></a>
			</div>
			<div class="tile tile-clouds col-md-4 col-sm-6 col-xs-12">
				<h2>Columbia Skytrain Station</h2>
				<h5>435 Columbia St., New Westminister, BC, V3L 5T6</h5>
				<a href="#claimBike"><div class="progress">
					<div class="progress-bar bg-success" role="progressbar" style="width: 95%">9 available</div>
					<div class="progress-bar bg-warning" role="progressbar" style="width: 5%">1 n/a</div>
				</div></a>
			</div>
		</div>
	</div>
    </div>
	<br/>
	<br/>
    <div class="row">
        <div class="col-6">
	<div class="btn-success text-center" id="ClaimButton">
		<h2 id="claimBike">Claim Bike</h2>
	</div>
        </div>
        <div class="col-6">
    <button class="btn-danger text-center" id="LogOutButton"><a href="logout.php">
        <h2 id="logout">Log Out</h2>
        </a>
        </button>
        </div>
    </div>
	<br/><br/><br/><br/><br/>
  <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->

</body>

</html>
