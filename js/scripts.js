$(function(){

	console.log("It's working");

	var demo = (function (window) {
	    
	    'use strict';
	        
	    var SELECTORS = {
	            textRows: '.row'
	        },
	        
	        CLASSES = {
	            drawingWord: 'drawing'
	        },
	        
	        textRows = document.querySelectorAll(SELECTORS.textRows);
	    
	        
	    
	    function applyDrawEffect (rowSVG) {        
	      rowSVG.classList.add(CLASSES.drawingWord);            
	    }
	        
	    
	    function drawWords () {        
	        [].forEach.call(textRows, applyDrawEffect);        
	    }
	    
	    
	    function init () {
	        drawWords();    
	    }
	    
	    
	    return {
	        init: init
	    };
	    
	}(window));




	window.addEventListener('DOMContentLoaded', demo.init, false);

});

//active Links 

    $("ul.menu li a").each(function() {
        if (this.href == window.location.href) {
            $(this).addClass("active");
        }
    });
//Menu toggle
        $('label').on('click', function(event) {
            // event.preventDefault();
            $('nav menu').toggleClass('away');
            



            

        });
        $('.fuckyou').on('click', function(event) {
            event.preventDefault();
            $('.menuContent').toggleClass('away');
            $('.Menuflex').toggleClass('menuFlexOpen');
            // $('#menuToggle').toggleClass('strikeMenu');



            

        });
        $('.fafa').click(function(){
                $('#nav-icon4').toggleClass('open');

                    $(".headerMenu").toggleClass('dropdown');

                    // $('.borderWhite').toggle();
                    // $(".fa-bars").toggleClass('fa-borderss');
                    $(".headerMenu a").on("click", function(){
                    // console.log('fuckyou');
                    $(".headerMenu").hide();


                    $("hamburger").hover(function() {
                        $(this).css("cursor", "pointer");
                    }, function() {
                        $(this).css("", "");
                    });

                }); 

            });