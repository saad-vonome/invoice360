<?php

/**
 * Title: Smart Invoice Demo Video
 * Slug: invoice-360-vonome/demo-video
 * Categories: Smart Invoice
 * Block Types: core/template-part/demo-video
 * Description: Invoice 360 - Smart Invoice Demo Video.
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_Five
 * @since Twenty Twenty-Five 1.0
 */

?>
<div class="video-container">
	<!-- Thumbnail Image -->
	<div id="video-thumbnail" class="thumbnail" style="background-image: url('<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/smart-video-thumb.png');">
		<button id="play-button" class="play-btn">
			<img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/play-btn.png" alt="Play Button" />
		</button>
	</div>

	<!-- YouTube Video (Initially Hidden) -->
	<div id="video-wrapper" class="hidden">
		<iframe id="custom-video" width="632" height="525"
			src="https://www.youtube.com/embed/VmXi771jWj4?enablejsapi=1&rel=0&showinfo=0"
			frameborder="0"
			allow="autoplay; encrypted-media"
			allowfullscreen>
		</iframe>
	</div>
</div>