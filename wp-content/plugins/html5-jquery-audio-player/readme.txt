=== HTML5 jQuery Audio Player ===
Contributors: EnigmaWeb
Donate link: http://enigmaweb.com.au
Tags: mp3 player, audio player, music player, ogg player, HTML5 audio player, mp3, podcast, jquery player
Requires at least: 3.1
Tested up to: 3.5
Stable tag: trunk
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Finally, a trendy looking audio player plugin. Works on all browsers including iPhone/iPad.

== Description ==

This trendy looking music player lets you add a single audio track or a full playlist to your WordPress site using shortcode. You can customise the colours of the player, and also display ratings, album cover art, and buy/download link if needed. This audio player is different from others on offer because it works on all major browsers, both PC and Mac, and on mobile devices including iPhone/iPad. Plus it looks really cool!

= Key Features =

*	Supports mp3 and ogg file formats
*   Attractive and customisable design
*	HTML5 based player with Flash backup 
*   Works in all major browsers - IE7, IE8, IE9, Safari, Firefox, Chrome
*   Works on mobile devices including iPhone/iPad
*   Can enable Buy or Download tracks button - [tutorial here](http://www.enigmaweb.com.au/fetchapp-integration-tutorial/)
*	Add the player to any post/page using shortcode `[hmp_player]`

= Demo =

[Click here for demo](http://www.galaxybrass.com.au/audio-demo/)

= Pro vs Lite Version =

This is Lite (free) version of the plugin. [Get Pro Version](http://www.enigmaweb.com.au/plugins/html5-jquery-audio-pro/) if you need the following advanced features:

*	Mulitple Playlists - create as many playlists as you like and embed any number of players in your site.
*	Drag n Drop playlist manager so you can order tracks
*	Enhanced admin area including smart AJAX input forms
*	More customisation control - adjust player width, choose whether to display ratings/artwork and more.
*	Add up to 3 buy/download buttons so you can sell your music in several places (eg iTunes, BandCamp, etc)

= Credits =

This is a WordPress version of the player created by Saleem over at [Codebase Hero](http://www.codebasehero.com/2011/06/html-music-player/) with thanks also to [Orman Clark](http://www.premiumpixels.com/freebies/compact-music-player-psd/) for the original PSD.

== Installation ==

1. Upload the `html5-jquery-audio` folder to the `/wp-content/plugins/` directory
1. Activate the HTML5 jQuery Audio Player plugin through the 'Plugins' menu in WordPress
1. Configure the plugin by going to the `HTML5 Audio Player` menu that appears in your admin menu
1. Add the player to any post/page using shortcode `[hmp_player]`

== Frequently Asked Questions ==

= I'm having problems adding mp3 files - they won't play. =

The plugin supports mp3 and ogg files. You need to upload both an mp3 and ogg version of each track in the playlist. Please also check your files are encoded correctly, and confirm that your file paths are correct. jPlayer sometimes has problems with relative urls so make sure you're using the absolute paths.

= How can I convert my files to mp3 and ogg? =

There are heaps of free conversion tools available - run a search. Personally, I use [Goldwave.](http://www.goldwave.com/)

= The player is not displaying on the page where I added the code =

When the player doesn't show up at all it is most likely a Mime type issue. This can be solved by adding the following lines to your htaccess file:
`AddType audio/ogg ogg
AddType audio/ogg oga
AddType video/ogg ogv
AddType video/mp4 m4v`

= It's not working in browser xyz - can you help? =

The plugin is designed to work on all major browsers, both PC & Mac, and on mobile devices including iPhone/iPad. If it's not working for you, try adding the Mime types above to your htaccess file.

= Something wacky is happening for me (eg it breaks site, breaks another plugin, looks crazy and/or doesn't work!) - what's wrong with it? =

The most common problem is a jQuery conflict. In short, if your theme loads jQuery library, then other plugin/s (like this one) also load jQuery then it can cause serious grief on the site and things start breaking. The solution is for all plugin developers and WordPress theme creators to use the copy of jQuery which is included in the WordPress core or load it from Google AJAX libraries, and to consider also using the noConflict jQuery mode (this plugin does all that). If you're having jQuery conflict problems on your site then the most likely culprit it your theme. [Read this article](http://digwp.com/2009/06/including-jquery-in-wordpress-the-right-way/) by Chris Coyier which explains the issue in more detail and outlines how you can fix it. You might also like to check out suggestions from [Eric Martin](http://www.ericmmartin.com/5-tips-for-using-jquery-with-wordpress/) on the topic.

= Is there a way to easliy replace the 'Buy' button with 'Download' button? =

Yes! Set the buy text option to Download, leave currency field & song price field blank, and set the buy link option on each song to the url of the mp3 or the script that initiates the download.

= How can I sell my music using this plugin? =

[Check the tutorial here](http://www.enigmaweb.com.au/fetchapp-integration-tutorial/)

= Can I use this on a non-WordPress site? =

Yep, sure can. This plugin is just a WordPress version of HTML5 Music Player by Saleem over at [Codebase Hero](http://www.codebasehero.com/2011/06/html-music-player/)

= Where can I get support for this plugin? =

If you've tried all the obvious stuff and it's still not working please request support via the forum. Remember to include a link to your site where the player is embedded, and a full description of the issue plus the steps you've already taken to try to solve it.


== Screenshots ==

1. An example of the inserted player
2. The display settings screen in WP-Admin

== Changelog ==

= 1.9.1 =
* Minor fix in index.php to prevent jQuery conflict

= 1.9 =
* More fixes for WordPress Core 3.5. Fixed issue with 'add media' button disappearing. Fixed problem where player was preventing some widgets opening.

= 1.8 =
* Implemented fixes so the plugin is now compatible with WordPress Core 3.5

= 1.7 =
* Fixed URL truncating plus some other small enhancements

= 1.6 =
* Fixed several small issues. You can now use apostrophe in description field without it breaking the player, and removed character limits on various input fields. Display issue for long playlists also corrected.

= 1.5 =
* Made a bunch of small improvements and fixes for minor issues. Also adjusted the settings menu structure slightly to correlate better with PRO version of the plugin.

= 1.4 =
* Fixed a problem with the shortcode function - some users were having problems placing the player in a page, this update fixes the issue.

= 1.3 =
* Added jQuery noConflict wrapper and fixed a typo - the playlist was not displaying for some users due to a jQuery conflict, this update fixes the problem.

= 1.2 =
* Fixed a filepath bug - some users were unable to update/delete tracks from playlist, this is now fixed.

= 1.1 =
* Added sidebar with support forum, donate and wordpress.org links

= 1.0 =
* Initial release

== Upgrade Notice ==

= 1.9.1 =
* Minor fix in index.php to prevent jQuery conflict

= 1.9 =
* More fixes for WordPress Core 3.5. Fixed issue with 'add media' button disappearing. Fixed problem where player was preventing some widgets opening.

= 1.8 =
* Implemented fixes so the plugin is now compatible with WordPress Core 3.5

= 1.7 =
* Fixed URL truncating plus some other small enhancements

= 1.6 =
* Fixed several small issues. You can now use apostrophe in description field without it breaking the player, and removed character limits on various input fields. Display issue for long playlists also corrected.

= 1.5 =
* Made a bunch of small improvements and fixes for minor issues. Also adjusted the settings menu structure slightly to correlate better with PRO version of the plugin.

= 1.4 =
* Fixed a problem with the shortcode function - some users were having problems placing the player in a page, this update fixes the issue.

= 1.3 =
* Added jQuery noConflict wrapper and fixed a typo - the playlist was not displaying for some users due to a jQuery conflict, this update fixes the problem.

= 1.2 =
* Fixed a filepath bug - some users were unable to update/delete tracks from playlist, this is now fixed.

= 1.1 =
* Added sidebar with support forum, donate and wordpress.org links

= 1.0 =
* Initial release
