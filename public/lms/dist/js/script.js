$(document).ready(function () {

	$("a.delete").click(function () {
		var sure = window.confirm("Are You Sure You Want To Delete This...");
		if (!sure) {
			event.preventDefault();
		}
	});

	// validation of forms 
	$('#demo-form').submit(function () {
		var shelf_no = $('#shelf_no').val();
		var category = $('#category').val();
		var flag = true;

		if (category == 'null') {
			flag = false;
			$('#category-error').show();
		}

		if (shelf_no == 'null') {
			flag = false;
			$('#shelf-no-error').show();
		}

		return flag;
	});


});
