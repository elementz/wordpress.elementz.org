/*
 * WPtouch 1.9.x -The WPtouch Core JS File
 */

/////-- Let's setup a unique namspace in jQuery -- /////
$wptouch = jQuery.noConflict();

/////-- Get out of frames! -- /////
if (top.location!= self.location) {top.location = self.location.href}

/////// -- New function fadeToggle() -- /////
$wptouch.fn.fadeToggle = function(speed, easing, callback) {
	return this.animate({opacity: 'toggle'}, speed, easing, callback);
};

/////-- Switch Magic -- /////
function wptouch_switch_confirmation() {
if (document.cookie && document.cookie.indexOf("wptouch_switch_cookie") > -1) {
// just switch
	$wptouch("a#switch-link").toggleClass("offimg");
	setTimeout('switch_delayer()', 1250);
} else {
// ask first
	var answer = confirm("Switch to regular view? \n \n You can switch back again in the footer.");
	if (answer){
	$wptouch("a#switch-link").toggleClass("offimg");
	setTimeout('switch_delayer()', 1250);
		}
	}
}

/////-- Prowl Results -- /////
if ( $wptouch('#prowl-success').length ) {
	setTimeout(function() { $wptouch('#prowl-success').fadeOut(380); }, 5250);
}
if ( $wptouch('#prowl-fail').length ) {
	setTimeout(function() { $wptouch('#prowl-fail').fadeOut(380); }, 5250);
}

/////-- Menu Toggles, Effects -- /////
function bnc_jquery_menu_drop() {
	$wptouch('#wptouch-menu').fadeToggle(380);
	$wptouch("#headerbar-menu a").toggleClass("open");
}

function bnc_jquery_login_toggle() { $wptouch('#wptouch-login').fadeToggle(380);}
function bnc_jquery_search_toggle() { $wptouch('#wptouch-search').fadeToggle(380);}
function bnc_jquery_gigpress_toggle() { $wptouch('#wptouch-gigpress').fadeToggle(380);}
function bnc_jquery_prowl_open() { $wptouch('#prowl-message').fadeToggle(380);}
function bnc_jquery_wordtwit_open() { $wptouch('#wptouch-wordtwit').fadeToggle(380);}

/////// -- Single Post Page -- /////
function wptouch_toggle_twitter() {
	$wptouch('#twitter-box').fadeToggle(380);
}

function wptouch_toggle_bookmarks() {
	$wptouch('#bookmark-box').fadeToggle(380);
}

/////// -- jQuery Tabs -- ///////
$wptouch(function () {
    var tabContainers = $wptouch('#menu-head > ul');
    $wptouch('#tabnav a').click(function () {
        tabContainers.hide().filter(this.hash).show();
    $wptouch('#tabnav a').removeClass('selected');
    $wptouch(this).addClass('selected');
        return false;
    }).filter(':first').click();
});

/////-- Ajax comments -- /////
function bnc_showhide_coms_toggle() {
	$wptouch('#commentlist').fadeToggle(380);
	$wptouch("img#com-arrow").toggleClass("com-arrow-down");
	$wptouch("h3#com-head").toggleClass("comhead-open");
}

function doWPtouchReady() {

/////-- Tweak jQuery Timer -- /////
	$wptouch.timerId = setInterval(function(){
		var timers = $wptouch.timers;
		for (var i = 0; i < timers.length; i++) {
			if (!timers[i]()) {
				timers.splice(i--, 1);
			}
		}
		if (!timers.length) {
			clearInterval($wptouch.timerId);
			$wptouch.timerId = null;
		}
	}, 83);

/////-- Try to make imgs and captions nicer in posts -- /////
	if ( $wptouch( '.singlentry' ).length ) {
		$wptouch( '.singlentry img, .singlentry .wp-caption' ).each( function() {
			if ( $wptouch( this ).width() <= 250 ) {
				$wptouch( this ).addClass( 'aligncenter' );
			}
		});
	}

/////-- Filter FollowMe Plugin -- /////
	if ( $wptouch( '#FollowMeTabLeftSm' ).length ) {
		$wptouch( '#FollowMeTabLeftSm' ).remove();
	}

} // End document ready

$wptouch( document ).ready( function() { doWPtouchReady(); } );