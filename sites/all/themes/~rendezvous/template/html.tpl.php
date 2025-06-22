<?php

?>

<!DOCTYPE html>
<html class="" lang="<?php print $language->language; ?>" dir="<?php print $language->dir; ?>"> <!--<![endif]-->
<head>
<?php print $head; ?>
<title><?php print $head_title; ?></title>

<?php print $styles; ?>
<?php print $scripts; ?>
<?php rendezvous_user_css(); ?>
</head>

<body class="<?php print $classes; ?>" <?php print $attributes;?>>
<?php print $page_top; ?>
<?php print $page; ?>
<?php print $page_bottom; ?>

<!-- Header Scroll Bar !--> 
<script type="text/javascript" src="http://rendezvousmyanmar.com/Rendezvous/sites/all/themes/rendezvous/js/jquery.min.js">
</script>
<script type="text/javascript" src="http://rendezvousmyanmar.com/Rendezvous/sites/all/themes/rendezvous/js/script.js">
</script>
<script type="text/javascript" src="http://rendezvousmyanmar.com/Rendezvous/sites/all/themes/rendezvous/js/jquery-ui.min.js">
</script>
 <script type="text/javascript">
(function($){
                  $('.navigation').flexMenu({
                    responsivePattern: 'off-canvas'
                  });
                })(jQuery);

    </script>

<script>
$(window).scroll(function() { 
    var scroll = $(window).scrollTop();
    if (scroll >= 50) {
        $("header").addClass("smaller");
		} else{
        $("header").removeClass("smaller");
		} 
	});
</script>

<!-- Google Map !--> 
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC6v5-2uaq_wusHDktM9ILcqIrlPtnZgEk&sensor=false"></script>
<script>
	var map;
	function initialize() {
	  var mapOptions = {
		zoom: 16,
		center: {lat: 16.776617, lng: 96.147106}
	  };
	  map = new google.maps.Map(document.getElementById('map'),
		  mapOptions);

	  var marker = new google.maps.Marker({
		position: {lat: 16.776617, lng: 96.147106},
		map: map
	  });

	  var infowindow = new google.maps.InfoWindow({
		content: '<p>Marker Location:' + marker.getPosition() + '</p>'
	  });

	  google.maps.event.addListener(marker, 'click', function() {
		infowindow.open(map, marker);
	  });
	}

	google.maps.event.addDomListener(window, 'load', initialize);

</script>
<script>
    var lightbox = new Lightbox();
    lightbox.load({
        boxId: false,
        dimensions: true,
        captions: true,
        prevImg: false,
        nextImg: false,
        hideCloseBtn: false,
        closeOnClick: true,
        loadingAnimation: 200,
        animElCount: 4,
        preload: true,
        carousel: true,
        animation: 400,
        nextOnClick: true,
        responsive: true,
        maxImgSize: 0.8,
        // callbacks
        onopen: function () {
            // your code goes here
        },
        onclose: function () {
            // your code goes here
        },
        onload: function (event) {
            // your code goes here
        },
        onresize: function () {
            // your code goes here
        },
        onloaderror: function (event) {
            // your code goes here
        }
    });

</script>


</body>
</html>