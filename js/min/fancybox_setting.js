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
			 			this.title = "<h3>Formula Student Germany 2016</h3><p>Formula Student Germany is an annually held event in Germany. Pravega Racing has repeatedly emerged as one of the top Indian teams. In FSG'16, PRV'16 was the fastest among all the Indian teams. Visit Events section and Media section for more details.</p>";
			 		}
			 		if(this.index==1)
			 		{
			 			this.title = "<h3>Drag Race 2016</h3><P>With little help from BMW India we conducted a drag race between PRV 16 and BMW in our college campus.  Revving of engines raised the heartbeats of the audience to an unmatched level, like never seen before in VIT. Each time PRV was able to beat the Beemer. Visit PR Activities for more details.</p>";
			 		}
			 		if(this.index==2)
			 		{
			 			this.title = "<h3>Launch 2016</h3><P>Continuing the tradition, we orchestrated the Grand Rollout of our new car PRV16. The countdown got everybody’s heartbeat racing, we again had a staggering response from the freshers. Visit PR Activities for more details.</p>";
			 		}
			 		if(this.index==3)
			 		{
			 			this.title = "<h3>Formula Student India 2016</h3><P>Pravega Racing stood first in Acceleration, Skidpad, and Business Presentation Events. We also received Special Awards for Spirit of FSI and Cleanest Pit. Visit Events section for more details. </p>";
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