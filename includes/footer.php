<!--footer-->
<br><br>
    <footer class="col-md-12 text-center" id="footer">&copy; Copyright 2017-2018 Shaunta's Boutique</footer>
    <!--Details Modal -->
   
<script>
  jQuery(window).scroll(function(){
    var vscroll = jQuery(this).scrollTop();
    jQuery('#logotext').css({
      "transform" : "translate(0px, "+vscroll/2+"px)"
    });
    var vscroll = jQuery(this).scrollTop();
    jQuery('#back-flower').css({
      "transform" : "translate("+vscroll/5+"px, -"+vscroll/12+"px)"
    });

    var vscroll = jQuery(this).scrollTop();
    jQuery('#fore-flower').css({
      "transform" : "translate(0px, -"+vscroll/2+"px)"
    });

  })
    function detailsmodal(id) {
			var data = {"id" : id, };
			jQuery.ajax({
				url : '/MyeCommerce/includes/detailsmodal.php',
				method : "post",
				// If you inspect the network for form you'll see there is form data
				// That contains our id
				data : data,
				success: function(data) {
					jQuery('body').append(data);
					// We can now toggle the modal because its in the body
					jQuery('#details-modal').modal('toggle');
				},
				error: function() {
					alert("Something went wrong!");
				}
			});
		}
</script>

</body>
</html>