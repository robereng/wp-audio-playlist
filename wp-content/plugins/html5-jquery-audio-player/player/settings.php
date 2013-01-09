<div id="wpbody">

<div id="wpbody-content">
		
			
		
<div class="wrap">
<h2>Display Settings</h2>


    
    <table class="form-table">
        <tr valign="top">
        <th scope="row"></th>
        <td></td>
        <td rowspan="9" width="25%">
         	<table cellpadding="0" class="widefat donation" style="margin-bottom:10px; border:solid 2px #008001;" width="50%">
            	<thead>
                	<th scope="col"><strong style="color:#008001;">Help Improve This Plugin!</strong></th>
                </thead>
                <tbody>
                	<tr>
                    	<td style="border:0;">Enjoyed this plugin? All donations are used to improve and further develop this plugin. Thanks for your contribution.</td>
                    </tr>
                    <tr>
                    	<td style="border:0;"><!--<img src="<?php //echo plugin_dir_url( __FILE__ )."donate.png" ; ?>"  align="middle" />--><form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_blank">
						<input type="hidden" name="cmd" value="_s-xclick">
						<input type="hidden" name="hosted_button_id" value="A74K2K689DWTY">
						<input type="image" src="https://www.paypalobjects.com/en_AU/i/btn/btn_donateCC_LG.gif" border="0" name="submit" alt="PayPal — The safer, easier way to pay online.">
						<img alt="" border="0" src="https://www.paypalobjects.com/en_AU/i/scr/pixel.gif" width="1" height="1">
						</form></td>
                    </tr>
                    <tr>
                    	<td style="border:0;">You can also help by <a href="http://wordpress.org/extend/plugins/html5-jquery-audio-player/" target="_blank">rating this plugin on wordpress.org</a></td>
                    </tr>
                   
                </tbody>
            </table>
			<table cellpadding="0" class="widefat donation" style="margin-bottom:10px;">
            	<thead>
                	<th scope="col">Pro Version</th>
                </thead>
                <tbody>
                	<tr>
                    	<td style="border:0;">Upgrade to Pro Version for advanced features like multiple playlist function<br /><a href="http://www.enigmaweb.com.au/plugins/html5-jquery-audio-pro" target="_blank">View Details</a></td>
                    </tr>
                   
                </tbody>
            </table>
            <table cellpadding="0" class="widefat" border="0">
            	<thead>
                	<th scope="col">Need Support?</th>
                </thead>
                <tbody>
                	<tr>
                    	<td style="border:0;">If you are having problems with this plugin please talk about them on the <a href="http://wordpress.org/support/plugin/html5-jquery-audio-player" target="_blank">Support Forum</a></td>
                    </tr>
                   
                </tbody>
            </table>
         </td>
        </tr><form method="post" action="options.php">
    <?php settings_fields( 'baw-settings-group' ); ?>
        <tr valign="top">
        <th scope="row"><strong>Description</strong></th>
        <td><textarea rows="4" cols="52" name="hmp_description"><?php echo get_option('hmp_description'); ?></textarea></td>
        
        </tr>
         <tr valign="top">
        <th scope="row"><strong>Show Buy Text</strong></th>
        <td>Yes <input id="rd1" type="radio" name="showbuy" value="1" <?php  if(get_option('showbuy')==1){ echo 'checked="checked"';} ?> />  No <input id="rd0" type="radio" name="showbuy" value="0" <?php  if(get_option('showbuy')==0){ echo 'checked="checked"';} ?> /></td>
        </tr>
        <tr valign="top" class="buy_text">	
        <th scope="row"><strong>Buy Text</strong></th>
        <td><input type="text" name="buy_text" value="<?php echo get_option('buy_text'); ?>" size="50" id="omer"  /><span style="font-size:11px; color:#b2b2b2; font-style:italic; display:block;">works only if you have selected show buy text to "YES"</span></td>
        </tr>
      <tr valign="top">
        <th scope="row"><strong>Show Track List</strong></th>
        <td>Yes <input id="rd3" type="radio" name="showlist" value="1" <?php  if(get_option('showlist')==1){ echo 'checked="checked"';} ?> />  No <input id="rd4" type="radio" name="showlist" value="0" <?php  if(get_option('showlist')==0){ echo 'checked="checked"';} ?> /></td>
        </tr>
        <tr valign="top">
        <th scope="row"><strong>Number Of Tracks</strong></th>
        <td><input type="text" name="tracks" value="<?php echo get_option('tracks'); ?>" size="50" /><span style="font-size:11px; color:#b2b2b2; font-style:italic; display:block;">works only if you have selected show track list to "YES"</span></td>
        </tr>
         <tr valign="top">
        <th scope="row"><strong>Currency Symbol</strong></th>
        <td><input type="text" name="currency" value="<?php echo get_option('currency'); ?>" size="50" /></td>
        </tr>
         <tr valign="top">
        <th scope="row"><strong>Background Colour</strong></th>
        <td><?php $color	=	get_option('color'); ?>
        	<input type="text" name="color" value="<?php echo get_option('color'); ?>" size="50" /><span style="font-size:11px; color:#b2b2b2; font-style:italic; display:block;">Insert colour code in the format #000000 or use "transparent"</span>
        </td>
        </tr>
        <tr valign="top">
        <th scope="row"><strong>Text Colour</strong></th>
        <td><?php $tcolor	=	get_option('tcolor'); ?>
        	<input type="text" name="tcolor" value="<?php echo get_option('tcolor'); ?>" size="50" /><span style="font-size:11px; color:#b2b2b2; font-style:italic; display:block;">Insert colour code in the format #cccccc</span>
       
        </tr>
    </table>
    
    <p class="submit">
    <input type="submit" class="button-primary" value="<?php _e('Save Changes') ?>" />
    </p>

</form>
</div>

<div class="clear"></div></div><!-- wpbody-content -->
<div class="clear"></div></div>