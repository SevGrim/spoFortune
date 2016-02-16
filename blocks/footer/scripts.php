<!-- Scripts -->
	
	<script src="js/jquery-1.11.0.min.js" type="text/javascript"></script>
	<script src="js/jquery-ui-1.10.4.min.js" type="text/javascript"></script> <!-- jQuery -->
	<script src="js/jquery.nicescroll.js"></script> <!-- jQuery NiceScroll -->
	<script src="js/jquery.sticky.js"></script> <!-- jQuery Stick Menu -->
	<script src="js/masonry.pkgd.min.js"></script> <!-- All script -->
	<script src="js/imagesloaded.pkgd.min.js"></script> <!-- All script -->	

   <script>
     $(function(){
   
       var $container = $('.grid');
     
       $container.imagesLoaded( function(){
         $container.masonry({
           itemSelector : 'li'
         });
       });
     
     });
   </script>
	<script src="js/jquery.parallax.js"></script> <!-- jQuery Parallax -->	
	<script src="js/script.js"></script> <!-- All script -->	


</body>

</html>
