$(document).ready(function() {
	if ($(".username").length > 0) {
		$(".username").addClass("hide")
	}
	
	//Get the form.
	var form = $('#form-contact');
	
	//Get the messages div.
	var formMessages = $('#success');
	
	//set up an event listener for contact form.
	$(form).submit(function(event){
		//Stop the browser from submitting the form.
		event.preventDefault();
		//alert($(form).attr('action'));
		//console.log($(form).attr('action'));
		//Serialize the form data.
		//var formData = $(form).serialize();
                var formData = new FormData(this);
                
		//console.log(formData);
		//Submit the forn useing AJAX.
		$.ajax({
			type: 'post',
			url: $(form).attr('action'),
			data: formData,
                        async: false,
                        cache: false,
                        processData: false,
                        contentType: false
		}).done(function(response){
			//Make sure that the formMessages div has the 'success' class.
			$(formMessages).removeClass('error');
			$(formMessages).addClass('success');
			
			//Set the message text
			$(formMessages).text(response);
			
			//Clear the form.
			/*$('#name').val('');
			$('#email').val('');
                           $('#upload').val('');
			$('#comments').val('');*/
                        $(form).trigger('reset');
		}).fail(function(data){
			//Make sure that the formMessages div has the 'error' class.
			$(formMessages).removeClass('success');
			$(formMessages).addClass('error');
			
			//Set the message text
			if(data.responseText !==''){
				$(formMessages).text(data.responseText);
			}else{
				$(formMessages).text('Oops! An error occured and your message could not be sent.');
				
			}
		});
		
	})
});