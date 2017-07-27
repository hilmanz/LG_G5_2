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

 
        <script>window.jQuery || document.write('<script src="js/libs/jquery-1.7.min.js">\x3C/script>')</script>



        <!-- Cycle2 Carousel -->
        <script src="<?=base_url()?>assets/cycle2/jquery.cycle2.min.js"></script>
        <script src="<?=base_url()?>assets/cycle2/ios6fix.js"></script>
        <script src="<?=base_url()?>assets/cycle2/core/jquery.cycle2.autoheight.min.js"></script>
        <script src="<?=base_url()?>assets/cycle2/core/jquery.cycle2.pager.min.js"></script>
        <script src="<?=base_url()?>assets/cycle2/plugin/jquery.cycle2.caption2.min.js"></script>
        <script src="<?=base_url()?>assets/cycle2/plugin/jquery.cycle2.swipe.min.js"></script>



        <script src="<?=base_url()?>assets/js/wow.min.js"></script> 
        <script src="<?=base_url()?>assets/js/smoothscroll.js"></script> 
        <script src="<?=base_url()?>assets/js/jquery.smooth-scroll.min.js"></script> 
        <script src="<?=base_url()?>assets/js/jquery.stellar.min.js"></script>
		
		<!-- MEDIABOX FOR VIDEO -->
        <script src="<?=base_url()?>assets/mediabox/dist/mediabox.js"></script>
        <script>
            MediaBox('.mediabox');
        </script>
    </body>
</html>