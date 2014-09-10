	function toggleVisibility(id){
		var e = document.getElementById(id);
		if(e.style.top == '102px'){
			e.style.top = '-2000px';
		}else{
			e.style.top = '102px';
		}
	}

$(document).ready(function() {
	$('#navigationMenu').prepend('<div id="bg-one"></div><div id="bg-two"></div><div id="bg-three"></div><div id="bg-four"></div>');

	$('#navigationMenu li').on("click", function() {
		$(this).addClass('active');
		var siblings = ($(this).siblings());
		siblings.each(function (index){
			$(this).removeClass('active');
		});
    });


	//Handles the event when a movie has been watched

	$('.watchedMovieButton').click(function() {
		var parent = $(this).parent();
		parent.slideUp('slow', function() {
			$(this).remove();
		});

		// Add watched movie Id into the database
		var movieID = $(this).parent().attr('id');
		$.post('movieDBHandler.php', {movieID: movieID});


	});

	// Handles the partial load of listitems

	list_size = $('.list li').size();
	init_size = 10;
	shown_items = 10;
	$('.list li:lt('+init_size+')').show();
	$('#loadLessButton').hide();

	$('#loadMoreButton').click(function() {
		$('#loadLessButton').show();
		shown_items = $('.list li:visible').size()+10;

		if(shown_items<list_size){
			$('.list li:lt('+shown_items+')').show();
		}else{
			$('.list li:lt('+list_size+')').show();
			$('#loadMoreButton').hide();
		}
	
	});

	$('#loadLessButton').click(function() {
		shown_items = $('.list li:visible').size()-10;
		$('.list li').not(':lt('+init_size+')').hide();
		if(shown_items=init_size){
			$('#loadLessButton').hide();
		}

	});

});