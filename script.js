$(document).ready(function() {
		$('#navigationMenu').prepend('<div id="bg-one"></div><div id="bg-two"></div><div id="bg-three"></div><div id="bg-four"></div>');
	});

function toggleVisibility(id){
	var e = document.getElementById(id);
	if(e.style.top == '97px'){
		e.style.top = '-2000px';
	}else{
		e.style.top = '97px';
	}
}


