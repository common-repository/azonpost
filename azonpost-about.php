<div class="postbox">	<h3 class="handle"><?php _e( 'About' );?></h3>	<div class="inside">		<img id='ap-i' title='<?php echo AP_NAME;?>' src='<?php echo plugins_url("/gambar/ap-150s.png", __FILE__); ?>' alt='<?php echo AP_NAME;?>' style='display:block;margin-left:auto;margin-right:auto;' />		<?php 		_e( '<p align="center"><samp><a style="text-decoration:none;" title="'.AP_NAME.'" href="http://azonpost.mochamir.com/" target="_blank">'.AP_NAME.'</a> '.AP_VERSION.' (<dfn>'.AP_CODENAME.'</dfn>)</samp></p>' );		if (date('Y') == '2012')		{			$taon = date('Y');		}else{			$taon = '2012-' . date('Y');		}		_e( '<p align="center">Copyrights &copy;' . $taon . ', by <dfn>Moch A</dfn>.</p>' )		?>	</div> </div>