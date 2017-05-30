function validate() {
	$(document).ready(function () {
		$('#submit').on('click', function () {          
			//alert(dob);
			$("#signup-form").validate();
		});
	});
}