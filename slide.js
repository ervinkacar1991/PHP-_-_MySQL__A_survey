
var i = 0; 			
var images = [];	
var time = 3000;	
	 

images[0] = 'Slike/pozadina1.jpg';
images[1] = 'Slike/pozadina2.jpg';
images[2] = 'Slike/pozadina3.jpg';


function changeImg(){
	document.slide.src = images[i];

	if(i < images.length - 1){
	  i++; 
	} else { 
		i = 0;
	}
	setTimeout("changeImg()", time);
}

window.onload=changeImg;
