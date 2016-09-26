$(document).ready(function() {
			/*
			 *  Simple image gallery. Uses default settings
			 */

			 $('.fancybox').fancybox();

			/*
			 *  Different effects
			 */

			// Change title type, overlay closing speed
			$(".fancybox-effects-a").fancybox({
				helpers: {
					title : {
						type : 'outside'
					},
					overlay : {
						speedOut : 0
					}
				}
			});

			// Disable opening and closing animations, change title type
			$(".fancybox-effects-b").fancybox({
				openEffect  : 'none',
				closeEffect	: 'none',

				helpers : {
					title : {
						type : 'over'
					}
				}
			});

			// Set custom style, close if clicked, change title type and overlay color
			$(".fancybox-effects-c").fancybox({
				wrapCSS    : 'fancybox-custom',
				closeClick : true,

				openEffect : 'none',

				helpers : {
					title : {
						type : 'inside'
					},
					overlay : {
						css : {
							'background' : 'rgba(238,238,238,0.85)'
						}
					}
				}
			});

			// Remove padding, set opening and closing animations, close if clicked and disable overlay
			$(".fancybox-effects-d").fancybox({
				padding: 0,

				openEffect : 'elastic',
				openSpeed  : 150,

				closeEffect : 'elastic',
				closeSpeed  : 150,

				closeClick : true,

				helpers : {
					overlay : null
				}
			});

			/*
			 *  Button helper. Disable animations, hide close button, change title type and content
			 */

			 $('.fancybox-buttons').fancybox({
			 	openEffect  : 'elastic',
			 	closeEffect : 'elastic',

			 	prevEffect : 'elastic',
			 	nextEffect : 'elastic',

			 	closeBtn  : false,

			 	helpers : {
			 		title : {
			 			type : 'inside'
			 		},
			 		buttons	: {}
			 	},

			 	afterLoad : function() {
			 		if(this.index==0)
			 		{
			 			this.title = "<h3>Happy Diwali!</h3><P>Pravega Racing Family wishes you a very happy and properous Diwali.</p>";
			 		}
			 		if(this.index==1)
			 		{
			 			this.title = "<h3>Engineers Day</h3><P>We put ideas into practice. We create what is only imagined. We build and we compete. It may be a well thought out process or a last minute jugaad but we get things done. And we take pride in what we do. A very Happy Engineers' Day to all of you out there!</p>";
			 		}
			 		if(this.index==2)
			 		{
			 			this.title = "<h3>Formula Student Germany 2015</h3><P>A mixed bag of results in Formula Student Germany e.V. this year. A significant improvement over last year saw us achieving amazing results in static events but the dynamic events did not go as planned. Lots of scope to improve. We will be back stronger next year.</p>";
			 		}
			 		if(this.index==3)
			 		{
			 			this.title = "<h3>Marketing Campaign for Engaeg Deodrants</h3><P>We thank ITC Ltd. for all thier support. Visit PR Activities section to see the complete campaign.</p>";
			 		}
			 	}
			 });


			/*
			 *  Thumbnail helper. Disable animations, hide close button, arrows and slide to next gallery item if clicked
			 */

			 $('.fancybox-thumbs').fancybox({
			 	prevEffect : 'none',
			 	nextEffect : 'none',

			 	closeBtn  : true,
			 	arrows    : true,
			 	nextClick : true,

			 	helpers : {
			 		thumbs : {
			 			width  : 50,
			 			height : 50
			 		}
			 	}
			 });

			/*
			 *  Media helper. Group items, disable animations, hide arrows, enable media and button helpers.
			 */
			 $('.fancybox-media')
			 .attr('rel', 'media-gallery')
			 .fancybox({
			 	openEffect : 'none',
			 	closeEffect : 'none',
			 	prevEffect : 'none',
			 	nextEffect : 'none',

			 	arrows : false,
			 	helpers : {
			 		media : {},
			 		buttons : {}
			 	}
			 });

			/*
			 *  Open manually
			 */

			 $("#fancybox-manual-a").click(function() {
			 	$.fancybox.open('1_b.jpg');
			 });

			 $("#fancybox-manual-b").click(function() {
			 	$.fancybox.open({
			 		href : 'iframe.html',
			 		type : 'iframe',
			 		padding : 5
			 	});
			 });

			 $("#fancybox-manual-c").click(function() {
			 	$.fancybox.open([
			 	{
			 		href : '1_b.jpg',
			 		title : 'My title'
			 	}, {
			 		href : '2_b.jpg',
			 		title : '2nd title'
			 	}, {
			 		href : '3_b.jpg'
			 	}
			 	], {
			 		helpers : {
			 			thumbs : {
			 				width: 75,
			 				height: 50
			 			}
			 		}
			 	});
			 });


			});