/**
 * @author Moris Ballenger
 */

$(document).ready(
		function() {
			alert("Website currently under construction.");
			$(".divProjects").hide();
			$("#JavaDiv").show();

			/* Hello */

			var spans = $('span[id^="trait-"]').hide(), i = 0;

			(function cycle() {

				spans.eq(i).fadeIn(400).delay(3000).fadeOut(400, cycle).css(
						"color", "yellow");

				i = ++i % spans.length;

			})();

			/* Projects */
			// May need to move this outside of document.ready
			$("#Java").click(function() {
				$('a').removeClass('active');
				$(this).addClass("active");
				$(".divProjects").hide();
				$("#JavaDiv").show();

			});

			$("#JavaScript").click(function() {
				$('a').removeClass('active');
				$(this).addClass("active");
				$(".divProjects").hide();
				$("#JavaScriptDiv").show();
			});
			
			$("#SQL").click(function() {
				$('a').removeClass('active');
				$(this).addClass("active");
				$(".divProjects").hide();
				$("#SQLDiv").show();
			});

		});
