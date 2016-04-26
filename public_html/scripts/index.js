/**
 * @author Moris Ballenger
 */

$(document).ready(
		function() {
			alert("Website currently under construction.");
			$(".divProjects").hide();
			$("#JavaDiv").show().addClass("active");

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

				$(".active").fadeOut(200);
				$("#JavaDiv").delay(200).fadeIn();
				$('div').removeClass("active");
				$("#JavaDiv").addClass("active");
				

			});

			$("#JavaScript").click(function() {
				
				$(".active").fadeOut(200);
				$("#JavaScriptDiv").delay(200).fadeIn();
				$('div').removeClass("active");
				$("#JavaScriptDiv").addClass("active");

			});
			
			$("#SQL").click(function() {
				
				$(".active").fadeOut(200);
				$("#SQLDiv").delay(200).fadeIn();
				$('div').removeClass("active");
				$("#SQLDiv").addClass("active");				

			});
			/*
			$("#rentalsDatabaseImg").mouseenter(function()
					{
					    $(this).fadeOut("fast");
					});
					                   
			$("#rentalsDatabaseFadedImg").mouseleave(function()
					{
					    $("#rentalsDatabaseImg").fadeIn("fast");
					});
*/
		});
// replace active with the clicked one and then change the clicked one to active