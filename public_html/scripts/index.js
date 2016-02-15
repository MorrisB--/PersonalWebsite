/**
 * @author Moris Ballenger
 */

$(document).ready(function() {
	alert("Website currently under construction.");

	/* Hello */

	var spans = $('span[id^="trait-"]').hide(), i = 0;

	(function cycle() {

		spans.eq(i).fadeIn(400).delay(3000).fadeOut(400, cycle).css("color", "yellow");

		i = ++i % spans.length;

	})();

});
