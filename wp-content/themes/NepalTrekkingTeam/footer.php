<footer style="margin-top: 150px;">
	<div class="nepal-trakking-footer-section">
		<div class="overlay-custom-2"></div>
		<div class="bottom-angle-style-1440-up"></div>
		<div class="bottom-angle-style-up"></div>
		<div class="bottom-angle-style-1024-up"></div>
		<div class="bottom-angle-style-768-up"></div>
		<div class="bottom-angle-style-425-up"></div>
		<div class="bottom-angle-style-320-up"></div>
		<div class="container padding-area-footer">
			<div class="row">
				<div class="col-lg-4 col-md-4 col-sm-6 margin-auto-footer">
					<?php dynamic_sidebar('sidebar-2'); ?>
				</div>
				<div class="col-lg-4 col-md-4 col-sm-6 margin-auto-footer remove-box">
					<?php dynamic_sidebar('sidebar-3'); ?>
				</div>
				<div class="col-lg-4 col-md-4 col-sm-6 margin-auto-footer">
					<?php dynamic_sidebar('sidebar-4'); ?>
				</div>
			</div>
			<div class="row" style="margin-top: 20px;">
				<div class="col-lg-6 col-md-6 col-sm-12">
					<ul class="ul-left">
						<li><a href="https://www.facebook.com"><i class=" fa fa-facebook">.</i></a></li>
						<li><a href="#"><i class="fa fa-twitter">.</i></a></li>
						<li><a href="#"><i class="fa fa-google-plus">.</i></a></li>
						<li><a href="#"><i class="fa fa-pinterest">.</i></a></li>
						<li><a href="https://www.youtube.com"><i class="fa fa-youtube">.</i></a></li>
						<div class="clearfix"></div>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<div class="container-footer-bottom">
		<div class="row">
			<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12" style="text-align: left;">
				<h3>Copyright &copy; 2017 Nepal Trekking Team. All right reserved.</h3>
			</div>
			<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12" style="text-align: right;">
				<h3>Designed by <a href="http://www.nextnepal.com">NEXTNEPAL GROUP</a></h3>
			</div>
		</div>
	</div>
</footer>
<!--
========================
!!! footer ends here !!!
========================
-->
</div>
<!-- ======================================================================================================== -->
<!--
===========================
!!! scripts starts here !!!
===========================
-->
<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<!-- counter-up -->
<script type="text/javascript" src="<?php echo esc_url(get_template_directory_uri('/')); ?>/assets/js/counter.js"></script> 
<!-- scroll -->
<script>
$(document).ready(function(){
	//Check to see if the window is top if not then display button
	$(window).scroll(function(){
		if ($(this).scrollTop() > 100) {
			$('.scrollToTop').fadeIn();
		} else {
			$('.scrollToTop').fadeOut();
		}
	});
	
	//Click event to scroll to top
	$('.scrollToTop').click(function(){
		$('html, body').animate({scrollTop : 0},800);
		return false;
	});
	
});
</script>

<!-- blog -->

<script>
$(document).ready(function(){
$('[data-toggle="tooltip"]').tooltip();
});

var acc = document.getElementsByClassName("accordion");
var i;
for (i = 0; i < acc.length; i++) {
acc[i].onclick = function() {
this.classList.toggle("active");
var panel = this.nextElementSibling;
if (panel.style.maxHeight){
panel.style.maxHeight = null;
} else {
panel.style.maxHeight = panel.scrollHeight + "px";
}
}
}
</script>

<!--
=========================
!!! scripts ends here !!!
=========================
-->
</body>
</html>