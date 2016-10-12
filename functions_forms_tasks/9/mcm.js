/**
 * 
 */
function getInput(){
	$.ajax({
		url: '9/controller.php',
		data: {'value' : this.value},
		dataType: 'html',
		success: function(data, textStatus, jqXHR){
			$('#r_word').text(data);
		},
		error: function(data, textStatus, jqXHR){
			alert(jqXHR);
		}
	});
}

$('#word').on('input', getInput);