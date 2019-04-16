$(document).ready(function() {

	console.log('hi,i am outside id');
	$('#selectallboxes').click(function(event){
		console.log('hi,i am running');
		if(this.checked){
			$('.checkboxes').each(function(){
				this.checked = true;
				console.log('hi');
			});
		}
	
		else{
			$('.checkboxes').each(function(){
				this.checked = false;
				console.log('hi,i am inside id');
			});
		}
	});


});