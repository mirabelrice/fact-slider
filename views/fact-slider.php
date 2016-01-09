<?php
/**
* view for fact slider
* @package Fact Slider
* @since 1.0
*/

	if( !class_exists( FactSliderView ) ) {
		class FactSliderView {
			public static function render() { ?>
				<div class="fact-slider">
					<div class="fact-slider-viewport">
						<ul class="slide-container">
							<li class="slide">
								<div class="text-wrap">
									<div class="slide-text"></div>
								</div>
								<!-- LOOP THROUGH ALL SLIDES AND ADD AS LIST ITEMS-->
							</li>
						</ul>
					</div>
					<div class="slide-controls">
						<div class="control-nav">
							<ul>
								<li class="slide-pager"></li>
							</ul>
						</div>
						<!-- INSERT DIRECTIONAL NAV-->
					</div>
				</div>
			<?php }
		}
	}
?>