	<!-- SCRIPTS -->
    <!-- JQuery -->
    <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="js/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="js/mdb.min.js"></script>
	
    <!--Google Maps-->
    <script src="https://maps.google.com/maps/api/js"></script>

    <!-- Google Maps settings -->
    <script>
        // Regular map
        function regular_map() {
            var var_location = new google.maps.LatLng(29.3902058,79.4651069);

            var var_mapoptions = {
                center: var_location,
                zoom: 14
            };

            var var_map = new google.maps.Map(document.getElementById("map-container"),
                var_mapoptions);

            var var_marker = new google.maps.Marker({
                position: var_location,
                map: var_map,
                title: "Nainital"
            });
        }

        // Initialize maps
        google.maps.event.addDomListener(window, 'load', regular_map);
    </script>

    <!-- Carousel options -->
    <script>
        $('.carousel').carousel({
            interval: 3000,
        })
    </script>
	<!-- email -->
	<script type="text/javascript">
var recaptchaWidgets = [];
var recaptchaCallback = function() {
	var forms = document.getElementsByTagName( 'form' );
	var pattern = /(^|\s)g-recaptcha(\s|$)/;

	for ( var i = 0; i < forms.length; i++ ) {
		var divs = forms[ i ].getElementsByTagName( 'div' );

		for ( var j = 0; j < divs.length; j++ ) {
			var sitekey = divs[ j ].getAttribute( 'data-sitekey' );

			if ( divs[ j ].className && divs[ j ].className.match( pattern ) && sitekey ) {
				var params = {
					'sitekey': sitekey,
					'type': divs[ j ].getAttribute( 'data-type' ),
					'size': divs[ j ].getAttribute( 'data-size' ),
					'theme': divs[ j ].getAttribute( 'data-theme' ),
					'badge': divs[ j ].getAttribute( 'data-badge' ),
					'tabindex': divs[ j ].getAttribute( 'data-tabindex' )
				};

				var callback = divs[ j ].getAttribute( 'data-callback' );

				if ( callback && 'function' == typeof window[ callback ] ) {
					params[ 'callback' ] = window[ callback ];
				}

				var expired_callback = divs[ j ].getAttribute( 'data-expired-callback' );

				if ( expired_callback && 'function' == typeof window[ expired_callback ] ) {
					params[ 'expired-callback' ] = window[ expired_callback ];
				}

				var widget_id = grecaptcha.render( divs[ j ], params );
				recaptchaWidgets.push( widget_id );
				break;
			}
		}
	}
};

document.addEventListener( 'wpcf7submit', function( event ) {
	switch ( event.detail.status ) {
		case 'spam':
		case 'mail_sent':
		case 'mail_failed':
			for ( var i = 0; i < recaptchaWidgets.length; i++ ) {
				grecaptcha.reset( recaptchaWidgets[ i ] );
			}
	}
}, false );
</script>

	<!-- For Card -->
<script type="text/javascript" src="./Bootstrap Flipping Cards_files/load-scripts(1).php"></script>
<script type="text/javascript" src="./Bootstrap Flipping Cards_files/compiled.min.js.download"></script><div class="hiddendiv common"></div>
<script type="text/javascript" src="./Bootstrap Flipping Cards_files/footer-functions.js.download"></script><div class="drag-target" style="left: 0px; touch-action: pan-y; user-select: none; -webkit-user-drag: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></div>
<script type="text/javascript" src="./Bootstrap Flipping Cards_files/scripts.js.download"></script>
<script type="text/javascript" src="./Bootstrap Flipping Cards_files/global.js.download"></script>
<script type="text/javascript" src="./Bootstrap Flipping Cards_files/jquery.blockUI.min.js.download"></script>
<script type="text/javascript" src="./Bootstrap Flipping Cards_files/js.cookie.min.js.download"></script>

<script type="text/javascript" src="./Bootstrap Flipping Cards_files/05e1abaa17c4f479182ad3147.js.download"></script><script src="./Bootstrap Flipping Cards_files/f.txt" type="text/javascript"></script>
<script type="text/javascript" src="./Bootstrap Flipping Cards_files/mdb-profile.js.download"></script>
<script type="text/javascript" src="./Bootstrap Flipping Cards_files/mdb-affiliate-panel-public.js.download"></script>
<script type="text/javascript" src="./Bootstrap Flipping Cards_files/mdb-affiliate-panel-admin.js.download"></script>
<script type="text/javascript" src="./Bootstrap Flipping Cards_files/snippets-behavior.js.download"></script>
<script type="text/javascript" src="./Bootstrap Flipping Cards_files/pages-rates.js.download"></script>
<script type="text/javascript" src="./Bootstrap Flipping Cards_files/jquery-ui-touch-punch.min.js.download"></script>
<script type="text/javascript" src="./Bootstrap Flipping Cards_files/price-slider_33.js.download"></script>
<script type="text/javascript" src="./Bootstrap Flipping Cards_files/jquery.ddslick.min.js.download"></script>
<script type="text/javascript" src="./Bootstrap Flipping Cards_files/front.js.download"></script>
<script type="text/javascript" src="./Bootstrap Flipping Cards_files/api.js.download"></script>

<script src="./Bootstrap Flipping Cards_files/mc_validate.js.download"></script>





 <section>

<!-- Compiled JS -->

    <!--BrandFlow for WordPress loading script-->

    <script>

        (function(){

            


            var scripts = ["/static/general/bf-core.min.js", "/static/containers/NLX453.js", "/static/general/push-init-code.js"];



            


            for(var i = 0; i < scripts.length; i++) {

                var script   = document.createElement("script");

                script.src   = "//brandflow.net" + scripts[i] + "?ts=" + Date.now() + "#";

                script.async = false;

                document.head.appendChild(script);

            }



        })();

    </script>

    <!--/.BrandFlow for WordPress loading script-->

    <script type="text/javascript">
var recaptchaWidgets = [];
var recaptchaCallback = function() {
	var forms = document.getElementsByTagName( 'form' );
	var pattern = /(^|\s)g-recaptcha(\s|$)/;

	for ( var i = 0; i < forms.length; i++ ) {
		var divs = forms[ i ].getElementsByTagName( 'div' );

		for ( var j = 0; j < divs.length; j++ ) {
			var sitekey = divs[ j ].getAttribute( 'data-sitekey' );

			if ( divs[ j ].className && divs[ j ].className.match( pattern ) && sitekey ) {
				var params = {
					'sitekey': sitekey,
					'type': divs[ j ].getAttribute( 'data-type' ),
					'size': divs[ j ].getAttribute( 'data-size' ),
					'theme': divs[ j ].getAttribute( 'data-theme' ),
					'badge': divs[ j ].getAttribute( 'data-badge' ),
					'tabindex': divs[ j ].getAttribute( 'data-tabindex' )
				};

				var callback = divs[ j ].getAttribute( 'data-callback' );

				if ( callback && 'function' == typeof window[ callback ] ) {
					params[ 'callback' ] = window[ callback ];
				}

				var expired_callback = divs[ j ].getAttribute( 'data-expired-callback' );

				if ( expired_callback && 'function' == typeof window[ expired_callback ] ) {
					params[ 'expired-callback' ] = window[ expired_callback ];
				}

				var widget_id = grecaptcha.render( divs[ j ], params );
				recaptchaWidgets.push( widget_id );
				break;
			}
		}
	}
};

document.addEventListener( 'wpcf7submit', function( event ) {
	switch ( event.detail.status ) {
		case 'spam':
		case 'mail_sent':
		case 'mail_failed':
			for ( var i = 0; i < recaptchaWidgets.length; i++ ) {
				grecaptcha.reset( recaptchaWidgets[ i ] );
			}
	}
}, false );
</script>
<link rel="stylesheet" id="woocommerce-currency-switcher-css" href="./Bootstrap Carousel Guidelines - examples, tutorial &amp; advanced usage - Material Design for Bootstrap_files/front.css" type="text/css" media="all">
<script type="text/javascript">
/* <![CDATA[ */
var wpcf7 = {"apiSettings":{"root":"https:\/\/mdbootstrap.com\/wp-json\/contact-form-7\/v1","namespace":"contact-form-7\/v1"},"recaptcha":{"messages":{"empty":"Please verify that you are not a robot."}}};
/* ]]> */
</script>
<script type="text/javascript">
/* <![CDATA[ */
var woocommerce_params = {"ajax_url":"\/wp-admin\/admin-ajax.php","wc_ajax_url":"\/?wc-ajax=%%endpoint%%"};
/* ]]> */
</script>
<script type="text/javascript">
/* <![CDATA[ */
var mailchimp_public_data = {"site_url":"https:\/\/mdbootstrap.com","ajax_url":"https:\/\/mdbootstrap.com\/wp-admin\/admin-ajax.php"};
/* ]]> */
</script>
<script type="text/javascript">
/* <![CDATA[ */
var example_ajax_obj = {"ajaxurl":"https:\/\/mdbootstrap.com\/wp-admin\/admin-ajax.php"};
/* ]]> */
</script>
<script type="text/javascript" src="./Bootstrap Carousel Guidelines - examples, tutorial &amp; advanced usage - Material Design for Bootstrap_files/load-scripts(1).php"></script>
<script type="text/javascript" src="./Bootstrap Carousel Guidelines - examples, tutorial &amp; advanced usage - Material Design for Bootstrap_files/compiled.16.min.js.download"></script>
<script type="text/javascript" id="">!function(b,e,f,g,a,c,d){b.fbq||(a=b.fbq=function(){a.callMethod?a.callMethod.apply(a,arguments):a.queue.push(arguments)},b._fbq||(b._fbq=a),a.push=a,a.loaded=!0,a.version="2.0",a.queue=[],c=e.createElement(f),c.async=!0,c.src=g,d=e.getElementsByTagName(f)[0],d.parentNode.insertBefore(c,d))}(window,document,"script","https://connect.facebook.net/en_US/fbevents.js");fbq("init","289867067833087");fbq("track","PageView");</script>
<noscript><img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=289867067833087&amp;ev=PageView&amp;noscript=1"></noscript>
<div class="hiddendiv common"></div>
<script type="text/javascript" src="./Bootstrap Carousel Guidelines - examples, tutorial &amp; advanced usage - Material Design for Bootstrap_files/footer-functions.js.download"></script><div class="drag-target" style="left: 0px; touch-action: pan-y; user-select: none; -webkit-user-drag: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></div>
<script type="text/javascript" src="./Bootstrap Carousel Guidelines - examples, tutorial &amp; advanced usage - Material Design for Bootstrap_files/scripts.js.download"></script>
<script type="text/javascript" src="./Bootstrap Carousel Guidelines - examples, tutorial &amp; advanced usage - Material Design for Bootstrap_files/global.js.download"></script>
<script type="text/javascript" src="./Bootstrap Carousel Guidelines - examples, tutorial &amp; advanced usage - Material Design for Bootstrap_files/jquery.blockUI.min.js.download"></script>
<script type="text/javascript" src="./Bootstrap Carousel Guidelines - examples, tutorial &amp; advanced usage - Material Design for Bootstrap_files/js.cookie.min.js.download"></script>
<script type="text/javascript" src="./Bootstrap Carousel Guidelines - examples, tutorial &amp; advanced usage - Material Design for Bootstrap_files/woocommerce.min.js.download"></script>
<script type="text/javascript" src="./Bootstrap Carousel Guidelines - examples, tutorial &amp; advanced usage - Material Design for Bootstrap_files/mailchimp-woocommerce-public.min.js.download"></script>
<script type="text/javascript" src="./Bootstrap Carousel Guidelines - examples, tutorial &amp; advanced usage - Material Design for Bootstrap_files/05e1abaa17c4f479182ad3147.js.download"></script><script src="./Bootstrap Carousel Guidelines - examples, tutorial &amp; advanced usage - Material Design for Bootstrap_files/f.txt" type="text/javascript"></script>
<script type="text/javascript" src="./Bootstrap Carousel Guidelines - examples, tutorial &amp; advanced usage - Material Design for Bootstrap_files/snippets-behavior.js.download"></script>
<script type="text/javascript" src="./Bootstrap Carousel Guidelines - examples, tutorial &amp; advanced usage - Material Design for Bootstrap_files/pages-rates.js.download"></script>
<script type="text/javascript" src="./Bootstrap Carousel Guidelines - examples, tutorial &amp; advanced usage - Material Design for Bootstrap_files/jquery-ui-touch-punch.min.js.download"></script>
<script type="text/javascript" src="./Bootstrap Carousel Guidelines - examples, tutorial &amp; advanced usage - Material Design for Bootstrap_files/price-slider_33.js.download"></script>
<script type="text/javascript" src="./Bootstrap Carousel Guidelines - examples, tutorial &amp; advanced usage - Material Design for Bootstrap_files/jquery.ddslick.min.js.download"></script>
<script type="text/javascript" src="./Bootstrap Carousel Guidelines - examples, tutorial &amp; advanced usage - Material Design for Bootstrap_files/front.js.download"></script>
<script type="text/javascript" src="./Bootstrap Carousel Guidelines - examples, tutorial &amp; advanced usage - Material Design for Bootstrap_files/api.js.download"></script>

<script>

    
</script>

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            <script>

</script>

<!-- Structured data: Breadcrumbs -->
<script type="application/ld+json">
{
  "@context": "http://schema.org",
  "@type": "BreadcrumbList",
  "itemListElement": [{
    "@type": "ListItem",
    "position": 1,
    "item": {
      "@id": "https://mdbootstrap.com/",
      "name": "MDBootstrap",
      "image": "https://mdbootstrap.com/img/Marketing/mdb-press-pack/mdb-main.jpg"
    }
  },{
    "@type": "ListItem",
    "position": 2,
    "item": {
      "@id": "https://mdbootstrap.com/material-design-for-bootstrap/",
      "name": "MDBootstrap jQuery",
      "image": "https://mdbootstrap.com/wp-content/uploads/2015/09/mdb-about2-2.jpg"
    }
  },{
    "@type": "ListItem",
    "position": 3,
    "item": {
      "@id": "https://mdbootstrap.com/javascript/",
      "name": "Javascript",
      "image": "https://mdbootstrap.com/wp-content/uploads/2016/11/creative-bloq-fb.jpg"
    }
  },{
    "@type": "ListItem",
    "position": 4,
    "item": {
      "@id": "https://mdbootstrap.com/javascript/carousel/",
      "name": "Carousel",
      "image": "https://mdbootstrap.com/wp-content/uploads/2017/12/carousel.jpg"
    }
  }]
}
</script>

<!-- Structured data: Article -->
<script type="application/ld+json">
  {
    "@context": "http://schema.org",
    "@type": "NewsArticle",
    "mainEntityOfPage": {
      "@type": "WebPage",
      "@id": "https://mdbootstrap.com/javascript/carousel/"
    },
    "headline": "Bootstrap Carousel Guidelines - examples, tutorial & advanced usage",
    "image": [
      "https://mdbootstrap.com/wp-content/uploads/2017/12/carousel.jpg"
    ],
    "datePublished": "2018-06-25T08:00:00+08:00",
    "dateModified": "2018-06-25T09:20:00+08:00",
    "author": {
      "@type": "Organization",
      "name": "MDBootstrap"
    },
    "publisher": {
      "@type": "Organization",
      "name": "MDBootstrap",
      "logo": {
        "@type": "ImageObject",
        "url": "https://mdbootstrap.com/wp-content/uploads/2018/06/logo-mdb-jquery-small.png"
      }
    },
    "description": "Bootstrap carousel is responsive and interactive slideshow which is created for presenting content, especially images and videos."
  }
  </script>
    <script>
      $(function () {
        $(".sticky").sticky({
          topSpacing: 90
          , zIndex: 2
          , stopper: "#footer"
        });
        $('a[href="#docsTabsAPI"]').on('shown.bs.tab', function (e) {

          $(".sticky2").sticky({
            topSpacing: 90
            , zIndex: 2
            , stopper: "#footer"
          });

        });
        $('a[href="#docsTabsExamples"]').on('shown.bs.tab', function (e) {

          $(".sticky3").sticky({
            topSpacing: 90
            , zIndex: 2
            , stopper: "#footer"
          });

        });
      });
    </script>
    

<!--from yathartha-->
   <!-- SCRIPTS -->

	<script>
	// popovers Initialization
$(function () {
    $('.example-popover').popover({
        container: 'body'
    })
})
	var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("demo");
  var captionText = document.getElementById("caption");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
  captionText.innerHTML = dots[slideIndex-1].alt;
}

function myFunction() {
  var dots = document.getElementById("dots");
  var moreText = document.getElementById("more");
  var btnText = document.getElementById("myBtn");

  if (dots.style.display === "none") {
    dots.style.display = "inline";
    btnText.innerHTML = "Read more"; 
    moreText.style.display = "none";
  } else {
    dots.style.display = "none";
    btnText.innerHTML = "Read less"; 
    moreText.style.display = "inline";
  }
}

</script>

