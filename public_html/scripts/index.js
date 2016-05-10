/**
 * @author Moris Ballenger
 */

$(document).ready(
		function() {
			$(".divProjects").hide();
			$("#JavaDiv").show().addClass("active");

			/* Hello */

			var spans = $('span[id^="trait-"]').hide(), i = 0;

			(function cycle() {

				spans.eq(i).fadeIn(400).delay(3000).fadeOut(400, cycle).css(
						"color", "yellow");

				i = ++i % spans.length;

			})();

			/* Skills */

			$(function() {
				$('#javaProgress').hexagonProgress({
					size : 250,
					value : 0.85,
					startAngle : Math.PI / 2,
					lineWidth : 35,
					lineCap : "square",
					clip : false,
					background : null,
					lineFrontFill : {
						gradient : [ "#33ccff", "#33ccff" ]
					}
				});
			});
			$(function() {
				$('#sqlProgress').hexagonProgress({
					size : 250,
					value : 0.8,
					startAngle : Math.PI / 2,
					lineWidth : 35,
					lineCap : "square",
					clip : false,
					background : null,
					lineFrontFill : {
						gradient : [ "#33ccff", "#33ccff" ]
					}
				});
			});
			$(function() {
				$('#jsProgress').hexagonProgress({
					size : 250,
					value : 0.7,
					startAngle : Math.PI / 2,
					lineWidth : 35,
					lineCap : "square",
					clip : false,
					background : null,
					lineFrontFill : {
						gradient : [ "#33ccff", "#33ccff" ]
					}
				});
			});

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
			 * $("#rentalsDatabaseImg").mouseenter(function() {
			 * $(this).fadeOut("fast"); });
			 * 
			 * $("#rentalsDatabaseFadedImg").mouseleave(function() {
			 * $("#rentalsDatabaseImg").fadeIn("fast"); });
			 */
		});

// replace active with the clicked one and then change the clicked one to active
