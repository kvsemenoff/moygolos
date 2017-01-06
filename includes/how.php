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
				<div >
				    <img class="dc-photo" src="img/dc-how-photo2.jpg">
				</div>

				<div>
				    <img class="dc-photo" src="img/dc-how-photo3.jpg">
				</div>

				<div>
				    <img class="dc-photo" src="img/dc-how-photo4.jpg">
				</div>

				<div>
				    <img class="dc-photo" src="img/dc-how-photo5.jpg">
				</div>

				<div>
				    <img class="dc-photo" src="img/dc-how-photo6.jpg">
				</div>

				<div>
				    <img class="dc-photo" src="img/dc-how-photo7.jpg">
				</div>

				<div>
				    <img class="dc-photo" src="img/dc-how-photo8.jpg">
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
        $(".dc-photo").click(
        	function() {
                $('.dc-main-photo').html('<img src="' + $(this).attr('src') + '" width="100%" height="40%" />');
        	}
        );
    });
</script>
