$(document).ready(function() {

	$("a.delete").click(function() {
		var sure = window.confirm("Are You Sure You Want To Delete This...");
		if(!sure) {
			event.preventDefault();
		}
	});

});
