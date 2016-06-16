/**
* This file contains Javascript functionalities for the Listening Page
* @module Listening_Page
*/

/**
Functions that set up the jQuery music player
@class music_player_set_up
@static
*/

/**
@method initPlayer
*/ 

$(document).ready(function(){

	$('.playlist-js').ttwMusicPlayer(myPlaylist, {
		autoPlay: true,
		tracksToShow:15,
		jPlayer:{
			swfPath:'jsSrc/plugins/jquery-jplayer' 
		}
	});


});
