const flashData = $('.flash-data').data('flashdata');

if (flashData) {
	Swal.fire({
		title: flashData,
		icon: 'success'
	});
}
