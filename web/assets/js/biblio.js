

		
	// Organisation blocs aperçu vidéo

	$('#triul li h1').click(function() {  					
		$(".actual h1").css('color', '#000');
        $('#triul li').removeClass('actual');
		
        var parent = $(this).parent();
        if (!parent.hasClass('actual')) {

            parent.addClass('actual');
        }
        
    });

    $(window).on('resize load', function hauteur() {

	    	var a = $('.apercu').height(); 
	    	var v = $('.visu').height(); 
	    	var u = $('.auteur').innerHeight(); 

	    	var p = $('.profil').innerWidth(); 
	    	var p1 = $('.photo').innerWidth(); 
	    	var p2 = $('.promo').innerWidth(); 
	    	var p3 = $('.nbvideos').innerWidth(); 

	    	var p4 = p - p1 - p2 - p3 - 20


	    	var i = a - v; 
	    	var d = i - u; 
	    	var d = d - 40; 
	    
	    	$('.info').height(i);
	    	$('.description').outerHeight(d);
	    	$('.nom').innerWidth(p4);

	}).trigger('resize');




		// Nav tri biblio

	$(function() {

		// var = new Array('tous', 'actus', 'visuel', 'techno', 'ateliers', 'fun', '#aftermmi');
		// console.log('hello');

	    var $el, leftPos, newWidth;
	        $nav = $("#triul");
	    
	    $nav.append("<li id='magic' class='oblikd'></li>");
	    
	    var $magic = $("#magic");

	    var current = $('.actual h1');
	    
	    $magic
	        .width($(".actual").width())
	        .height($nav.height())
	        .css("left", $(".actual h1").position().left)
	        .data("origLeft", $(".actual h1").position().left)
	        .data("origWidth", $magic.width())
	        .data("origColor", $(".actual h1").attr("rel"));


	    $("#triul h1").hover(function nav() {
	        $el = $(this);
	        $el.css('color', '#fff');

	        var father = $el.parent();

	    	if (!father.hasClass('actual')) {
	    		$(".actual h1").css('color', '#7ee4d7');
        	}

	        leftPos = $el.position().left;
	        newWidth = $el.parent().width();
	        $magic.stop().animate({
	            left: leftPos,
	            width: newWidth
	        })

	    }, function() {

	    	$magic.stop().animate({
	            left: $magic.data("origLeft"),
	            width: $magic.data("origWidth")
	        });

	        $el.css('color', '#000');	
    		$(".actual h1").css('color', '#fff');
		 
	    });

	    $(window).on('resize', function() {

   	    $magic
	        .width($(".actual").width())
	        .height($nav.height())
	        .css("left", $(".actual h1").position().left)
	        .data("origLeft", $(".actual h1").position().left)
	        .data("origWidth", $magic.width())
	        .data("origColor", $(".actual h1").attr("rel"));

	    }).trigger('resize');

	    $("#triul h1").click(function() {

	        $el = $(this);
	        leftPos = $el.position().left;
	        newWidth = $el.parent().width();

	        $magic.data("origLeft", $(".actual h1").position().left);
	        $magic.data("origWidth", $magic.width());
	        $(".actual h1").css('color', '#fff');
	        $magic.data("origColor", $(".actual h1").attr("rel"));

	    });
	    
	    $(".actual h1").mouseenter();

	}); 









		$(function () {
		
			var filterList = {
				init: function () {

					$('.list').mixItUp({
	  				selectors: {
	    			  target: '.portfolio',
	    			  filter: '.filter'	
		    		},

			    	load: {
			      	filter: '.all'  
			      	}     

				});								
			}
		};

		filterList.init();
	});	
