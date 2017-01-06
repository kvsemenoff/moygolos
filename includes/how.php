<div class="container">

	<div class="dc-how">
	    <center>
	        <h2 class="db-h-content">
	            <b>КАК ПРОХОДЯТ ЗАНЯТИЯ</b>
	        </h2>
	    </center>
	</div>

	<center>
		<div class="dc-main-photo">
		   <img src="img/dc-how-photo1.jpg" width="100%">
		</div>
	</center>

	<center>
		<div class="dc-container">
		    <div class="dc-box">
				<div class="for_photo">
				    <img class="dc-photo" src="img/1.jpg">
				</div>

				<div class="for_photo">
				    <img class="dc-photo" src="img/2.jpg">
				</div>

				<div class="for_photo">
				    <img class="dc-photo" src="img/3.jpg">
				</div>

				<div class="for_photo">
				    <img class="dc-photo" src="img/4.jpg">
				</div>

				<div class="for_photo">
				    <img class="dc-photo" src="img/5.jpg">
				</div>

				<div class="for_photo">
				    <img class="dc-photo" src="img/6.jpg">
				</div>

				<div class="for_photo">
				    <img class="dc-photo" src="img/7.jpg">
				</div>

				<div class="for_photo">
				    <img class="dc-photo" src="img/8.jpg">
				</div>

				<div class="for_photo">
				    <img class="dc-photo" src="img/9.jpg">
				</div>

				<div class="for_photo">
				    <img class="dc-photo" src="img/10.jpg">
				</div>

				<div class="for_photo">
				    <img class="dc-photo" src="img/11.jpg">
				</div>

				<div class="for_photo">
				    <img class="dc-photo" src="img/12.jpg">
				</div>

				<div class="for_photo">
				    <img class="dc-photo" src="img/13.jpg">
				</div>

				<div class="for_photo">
				    <img class="dc-photo" src="img/14.jpg">
				</div>

				<div class="for_photo">
				    <img class="dc-photo" src="img/15.jpg">
				</div>

				<div class="for_photo">
				    <img class="dc-photo" src="img/16.jpg">
				</div>
			</div>
		</div>
	</center>
</div>

<style>
    .dc-box div {
	    background: #000;	    
	}

    .dc-box div:hover {
        position: relative;
        z-index: 20;
	}

    .dc-box div:hover:after {
    	content:'';
        position: absolute;
        z-index: 30;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0,0,0,0.5);
        cursor: zoom-in;
	}

</style>

<script>
    $(document).ready(function() {
        $(".for_photo").click(
        	function() {
                $('.dc-main-photo').html('<img src="' + $(this).children().attr('src') + '" width="100%" height="40%" />');
        	}
        );
    });
</script>
