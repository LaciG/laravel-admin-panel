<section id="gallery">

	<div class="row">
		<div class="gallery col s12">
			<h1 class="gallery-title">
                munkáink
			</h1>
			<div class="col offset-s5 s2">
				<hr>
				<div class="green-point-center"></div>
			</div>
		</div>
		<div id="gallery-buttons" align="center">
			<button id="allbtn" class="gallery-filter filter-button active" data-filter="all">
                összes
			</button>
			<button id="webappbtn" class="gallery-filter filter-button" data-filter="webapp">
                web&app
			</button>
			<button id="startupbtn" class="gallery-filter filter-button" data-filter="startup">
                startup
			</button>
			<button id="socialbtn" class="gallery-filter filter-button" data-filter="social">
                social
			</button>
			<button id="brandingbtn" class="gallery-filter filter-button" data-filter="branding">
                branding
			</button>
		</div>
		<br/>
		<div id="imgtemplate" style="display: none">
            <div class="gallery_product col s12 m6 l4 filter startup view view-first"> <img src="/assets/portfoliok/startupok/15minpizza.jpg" class="responsive-img gallery_one">
                <div class="mask">
                        <?php $lang['our_start1_title'] = "15minutespizza.com";
                        $lang['our_start1_text'] = "15 percen belül pizza a belvárosban!"; ?>
                    <h2 class="image_title">
                        <?php echo $lang['our_start1_title']; ?>
                    </h2>
                    <p class="image_subtitle">
                        <?php echo $lang['our_start1_text']; ?>
                    </p>
                </div>
            </div>
        </div>
		<div id="gallery_content"></div>

	</div>
	<div class="row">
		<button class="btn waves-effect waves-light zoldbtn more" name="showmore">Mutass többet <!--<i class="material-icons right">send</i>--> </button>
	</div>
	<!--<div class="row">
		<button class="btn waves-effect waves-light zoldbtn less" name="showless"><?php /*echo $lang['show_less'];*/ ?></button>
	</div>-->
</section>