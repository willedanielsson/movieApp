$(document).ready(function() {
		$('#navigationMenu').prepend('<div id="bg-one"></div><div id="bg-two"></div><div id="bg-three"></div><div id="bg-four"></div>');
	});

function toggleVisibility(id){
	var e = document.getElementById(id);
	if(e.style.display == 'block'){
		e.style.display = 'none';
	}else{
		e.style.display = 'block';
	}
}


