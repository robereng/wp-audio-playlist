/* Author: Rob Reng - based on the Audio plugin by Scott Taylor */

var AudioPlayer = (function ($) {
    "use strict";
	var instance = 1;
	
	function playsMP3() {
		var a = document.createElement('audio'); 
		return !!(a.canPlayType && a.canPlayType('audio/mpeg;').replace(/no/, ''));
	}
	
	function playsOgg() {
		var a = document.createElement('audio'); 
		return !!(a.canPlayType && a.canPlayType('audio/ogg; codecs="vorbis"').replace(/no/, ''));	
	}	
	
	function maybe_decode(file) {
		return Base64.decode(file);
	}
	
	function createInstance(indx) {
		return ['<div id="jquery_jplayer_', indx, '" class="jp-player"></div>',
		'<div id="jp_container_1" class="jp-audio">',
			'<div class="jp-type-playlist">',
				'<div class="jp-gui jp-interface" id="jp_interface_', indx, '">',
					'<ul class="jp-controls">', 
						'<li><a class="jp-previous" tabindex="1"></a></li>', 
						'<li><a class="jp-play jp-video-play" tabindex="1"></a></li>',
						'<li><a class="jp-pause" tabindex="1"></a></li>', 
						'<li><a class="jp-next" tabindex="1"></a></li>',
						'<li><a class="jp-stop" tabindex="1"></a></li>', 					
						'<li><a class="jp-mute" tabindex="1" title="mute" style=""></a></li>',
						'<li><a class="jp-unmute" tabindex="1" title="unmute" style="display: none;"></a></li>',
						'<li><a class="jp-volume-max" tabindex="1" title="max volume"></a></li>',					
					'</ul>', 
					'<div class="jp-progress">', 
						'<div class="jp-seek-bar">', 
							'<div class="jp-play-bar"></div>', 
						'</div>', 
					'</div>', 
					'<div class="jp-volume-bar">',
						'<div class="jp-volume-bar-value"></div>',
					'</div>',			
					'<div class="jp-time-holder">',
						'<div class="jp-current-time"></div>',
						'<div class="jp-duration"></div>',
					'</div>',
					'<ul class="jp-toggles">',
						'<li><a href="javascript:;" class="jp-shuffle" tabindex="1" title="shuffle" style="">shuffle</a></li>',
						'<li><a href="javascript:;" class="jp-shuffle-off" tabindex="1" title="shuffle off" style="display:none">shuffle off</a></li>',
						'<li><a href="javascript:;" class="jp-repeat" tabindex="1" title="repeat" style="">repeat</a></li>',
						'<li><a href="javascript:;" class="jp-repeat-off" tabindex="1" title="repeat off" style="display:none">repeat off</a></li>',
					'</ul>',
				'</div>',
				'<div class="jp-playlist">',
					'<ul>',
						'<li></li>',
					'</ul>',
				'</div>',
				'<div class="jp-no-solution">',
					'<span>Update Required</span>',
					'To play the media you will need to either update your browser to a recent version or update your <a href="http://get.adobe.com/flashplayer/" target="_blank">Flash plugin</a>.',
				'</div>',
			'</div>',
		'</div>'].join(''); 		
	}
	
	return function (wrapper) {
		
		var elem = $(wrapper), player, thisInstance = instance, markup;
		
		markup = createInstance(instance);

		elem.prepend($(markup));
		
		if (!player) {
			player = new jPlayerPlaylist({
			jPlayer: "#jquery_jplayer_1",
			cssSelectorAncestor: "#jp_container_1"},
			mp3Items,{
			swfPath: 'http://' + window.location.host + '/wp-content/plugins/audio/js/jplayer-02272012.swf',
			oggSupport: false,
			supplied: 'mp3',
			wmode: "window",
			nativeSupport: true,
            noFullScreen: true, 
			});			
		}
		
		instance += 1;
	};
}(jQuery));


(function ($) {
	$(document).ready(function () {
		$('.audio-playlist').each(function () {
			return new AudioPlayer(this);
		});
	});
}(jQuery));