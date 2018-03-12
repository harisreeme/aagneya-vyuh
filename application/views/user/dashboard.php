<link href="<?php echo base_url(); ?>assets/css/dashboard.css" rel="stylesheet">

<div class="box-view container">
	<div class="row">
		<div class="col-md-4">
			<div class="dash-box dash-box-color-1">
				<div class="dash-box-icon">
					<i class="glyphicon glyphicon-cloud"></i>
				</div>
				<div class="dash-box-body">
					<span class="dash-box-count">#<?php echo $rank; ?></span>
					<span class="dash-box-title">Accuracy : <?php echo $accuracy; ?></span>
				</div>
				
				<div class="dash-box-action">
					<button>Rank</button>
				</div>				
			</div>
		</div>
		<div class="col-md-4">
			<div class="dash-box dash-box-color-2">
				<div class="dash-box-icon">
					<i class="glyphicon glyphicon-download"></i>
				</div>
				<div class="dash-box-body">
					<span class="dash-box-count"><?php echo $level; ?></span>
					<span class="dash-box-title">Remaining Levels : <?php echo $remaining_levels; ?></span>
				</div>
				
				<div class="dash-box-action">
					<button>Level</button>
				</div>				
			</div>
		</div>
		<div class="col-md-4">
			<div class="dash-box dash-box-color-3">
				<div class="dash-box-icon">
					<i class="glyphicon glyphicon-heart"></i>
				</div>
				<div class="dash-box-body">
					<span class="dash-box-count"><?php echo $percentage; ?>%</span>
					<span class="dash-box-title">You are a <?php echo $experience; ?></span>
				</div>
				
				<div class="dash-box-action">
					<button>Progress</button>
				</div>				
			</div>
		</div>
	</div>
</div>


<!-- Challenge Start -->
<div class="container offer_section padding_top20 padding_bottom20">
	<div class="container">
		<div class="row">
			<div class="col-md-4 col-sm-4 hidden-xs">
				<div class="offer_image"> <img src="<?php echo base_url(); ?>images/website-cost-cta-image.png" alt="image"> </div>
			</div>
			<div class="col-md-8 col-sm-8 col-xs-12">
				<div class="offer_text text-center">
                                    <h2>Are you ready to play?</h2></br>
					<a href="<?php echo base_url(); ?>game" class="btn-light"> Let's Play :) </a>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- Challenge end -->