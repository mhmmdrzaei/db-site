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
