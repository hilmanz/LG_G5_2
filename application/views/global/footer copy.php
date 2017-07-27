<script src="<?=base_url()?>assets/js/packages.js"></script>
        <script src="<?=base_url()?>assets/js/theme.js"></script>

        <!-- Vertical Navigation -->
        <script src="<?=base_url()?>assets/js/vertical-navigation.js"></script>
        <script src="<?=base_url()?>assets/js/modernizr.js"></script>
		
		
		<!-- REVOLUTION SLIDER -->
        <script src="<?=base_url()?>assets/js/tools.min.js"></script>
        <script src="<?=base_url()?>assets/js/revolution.js"></script>
        
        <!-- REVOLTION SLIDER SETTING FOR MAIN TOP BANNER -->
        <script type="text/javascript">
        jQuery(document).ready(function()
        {
            jQuery('.tp-banner').show().revolution(
            {
                delay: 8000,
                startwidth: 1170,
                startheight: 580,
                onHoverStop: "on", // Stop Banner Timer at Hover on Slide on/off
                thumbWidth: 100, // Thumb With and Height and Amount (only if navigation Tyope set to thumb !)
                thumbHeight: 50,
                thumbAmount: 3,
                hideThumbs: 0,
                navigationType: "none", // bullet, thumb, none
                navigationArrows: "solo", // nexttobullets, solo (old name verticalcentered), none
                navigationStyle: "round", // round,square,navbar,round-old,square-old,navbar-old, or any from the list in the docu (choose between 50+ different item), custom
                navigationHAlign: "center", // Vertical Align top,center,bottom
                navigationVAlign: "bottom", // Horizontal Align left,center,right
                navigationHOffset: 0,
                navigationVOffset: 20,
                soloArrowLeftHalign: "left",
                soloArrowLeftValign: "center",
                soloArrowLeftHOffset: 20,
                soloArrowLeftVOffset: 0,
                soloArrowRightHalign: "right",
                soloArrowRightValign: "center",
                soloArrowRightHOffset: 20,
                soloArrowRightVOffset: 0,
                touchenabled: "on", // Enable Swipe Function : on/off
                stopAtSlide: -1, // Stop Timer if Slide "x" has been Reached. If stopAfterLoops set to 0, then it stops already in the first Loop at slide X which defined. -1 means do not stop at any slide. stopAfterLoops has no sinn in this case.
                stopAfterLoops: -1, // Stop Timer if All slides has been played "x" times. IT will stop at THe slide which is defined via stopAtSlide:x, if set to -1 slide never stop automatic
                hideCaptionAtLimit: 0, // It Defines if a caption should be shown under a Screen Resolution ( Basod on The Width of Browser)
                hideAllCaptionAtLilmit: 0, // Hide all The Captions if Width of Browser is less then this value
                hideSliderAtLimit: 0, // Hide the whole slider, and stop also functions if Width of Browser is less than this value
                fullWidth: "on",
                shadow: 0
            });
        });
        </script>

        <!-- REVOLTION SLIDER SETTING FOR SPECIFICATIONS -->
        <script type="text/javascript">
            jQuery(document).ready(function() {
               jQuery('.specs-banner').revolution(
            
                {
                    delay:9000,
                    startwidth:1170,
                    startheight:600,
                    lazyLoad: "off",
                    onHoverStop: "on", // Stop Banner Timer at Hover on Slide on/off
                    thumbWidth: 120, // Thumb With and Height and Amount (only if navigation Tyope set to thumb !)
                    thumbHeight: 120,
                    thumbAmount: 5,
                    hideThumbs: 0,
                    hideThumbsOnMobile:"on",
                    navigationType: "thumb", // bullet, thumb, none
                    navigationArrows: "none", // nexttobullets, solo (old name verticalcentered), none
                    navigationStyle: "navbar", // round,square,navbar,round-old,square-old,navbar-old, or any from the list in the docu (choose between 50+ different item), custom
                    //navigationHAlign: "bottom", // Vertical Align top,center,bottom
                    //navigationVAlign: "center", // Horizontal Align left,center,right
                    navigationHOffset: 280, 
                    navigationVOffset: 620, 
                    touchenabled: "on", // Enable Swipe Function : on/off
                    stopAtSlide: -1, // Stop Timer if Slide "x" has been Reached. If stopAfterLoops set to 0, then it stops already in the first Loop at slide X which defined. -1 means do not stop at any slide. stopAfterLoops has no sinn in this case.
                    stopAfterLoops: -1, // Stop Timer if All slides has been played "x" times. IT will stop at THe slide which is defined via stopAtSlide:x, if set to -1 slide never stop automatic
                    hideCaptionAtLimit: 0, // It Defines if a caption should be shown under a Screen Resolution ( Basod on The Width of Browser)
                    hideAllCaptionAtLilmit: 0, // Hide all The Captions if Width of Browser is less then this value
                    hideSliderAtLimit: 0, // Hide the whole slider, and stop also functions if Width of Browser is less than this value
                    fullWidth: "on",
                    hideTimerBar:"on",
                    shadow: 0
                });
            });
        </script> 
       

        <script>window.jQuery || document.write('<script src="js/libs/jquery-1.7.min.js">\x3C/script>')</script>

        <script defer src="<?=base_url()?>assets/flexslider/js/jquery.flexslider.js"></script>

        <script type="text/javascript">
            $(window).load(function() {
              $('.flexslider').flexslider({
                animation: "slide",
                controlNav: "thumbnails",
                directionNav: "false",
                controlsContainer: "kontrolnya",
              });
            });
        </script>

        <script src="<?=base_url()?>assets/flexslider/js/jquery.easing.js"></script>
        <script src="<?=base_url()?>assets/flexslider/js/jquery.mousewheel.js"></script>

        <script src="<?=base_url()?>assets/js/wow.min.js"></script> 
        <script src="<?=base_url()?>assets/js/smoothscroll.js"></script> 
        <script src="<?=base_url()?>assets/js/jquery.smooth-scroll.min.js"></script> 
        <script src="<?=base_url()?>assets/js/jquery.stellar.min.js"></script>
		<script src="<?=base_url()?>assets/countdown/assets/countdown/jquery.countdown.js"></script>
		<script>
		var basedomain="<?=base_url()?>";
		//var deadline = '2016-05-16 14:55:00';
		var deadline = '<?=$event_time;?>';
				console.log(deadline);
				
				
			
		$(function(){
			var note = $('#note'),
				ts = endtime = deadline;
				newYear = false;
			console.log(ts);
				
			$('#countdown').countdown({
				timestamp   : ts,
				callback    : function(days, hours, minutes, seconds){
					var message = "";     
					note.html(message);
				}
			});
		});

	
		function getTimeRemaining(endtime){
		  var t = Date.parse(endtime) - Date.parse(new Date());
		  var seconds = Math.floor( (t/1000) % 60 );
		  var minutes = Math.floor( (t/1000/60) % 60 );
		  var hours = Math.floor( (t/(1000*60*60)) % 24 );
		  var days = Math.floor( t/(1000*60*60*24) );
		  return {
			'total': t,
			'days': days,
			'hours': hours,
			'minutes': minutes,
			'seconds': seconds
		  };
		}
		
		function initializeClock(id, endtime){
		  var clock = document.getElementById(id);
		  var hoursSpan = document.getElementById('hours');
		  var minutesSpan = document.getElementById('minutes');
		  var secondsSpan = document.getElementById('seconds');
		  var timeinterval = setInterval(function(){
		  var t = getTimeRemaining(endtime);
			/*
			clock.innerHTML = 'days: ' + t.days + '<br>' +
							  'hours: '+ t.hours + '<br>' +
							  'minutes: ' + t.minutes + '<br>' +
							  'seconds: ' + t.seconds ;
			
						
			hoursSpan.innerHTML = ('0' + t.hours).slice(-2);
			minutesSpan.innerHTML = ('0' + t.minutes).slice(-2);
			secondsSpan.innerHTML = ('0' + t.seconds).slice(-2);
			*/
			if(t.total<=0){
				//alert("endtime");
				window.location = basedomain;
			  clearInterval(timeinterval);
			}
			/*TimeNow();*/
			
		  },1000);
		}
		
		initializeClock('clockdiv', deadline);
		
	
		
       
        </script>
		        <!-- MEDIABOX FOR VIDEO -->
        <script src="<?=base_url()?>assets/mediabox/dist/mediabox.js"></script>
        <script>
            MediaBox('.mediabox');
        </script>
    </body>
</html>