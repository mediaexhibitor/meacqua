		function SetFonts(fonts) { 
			for (var i = 0; i < fonts.items.length; i++) {      
			 $('#title_font, #subtitle_font, #body_font, #my_font')
				 .append($("<option></option>")
				 .attr("value", fonts.items[i].family)
				 .text(fonts.items[i].family));
			}    
		}
		var script = document.createElement('script');
		script.src = 'https://www.googleapis.com/webfonts/v1/webfonts?key=AIzaSyBAjJpTakqnTQIfC-6nCgOrXlWidoWiY4c&callback=SetFonts';
		document.body.appendChild(script);