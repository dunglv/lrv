$(function(){
	var $add = $('.add');
	$add.on('click', function(){
		var getId = $(this).attr('id');
		var id = getId.substr(4, 10);
		// alert(id);
		$.ajax({
			type: 'GET',
			url: '/order/store',
			data: 'idP='+id,//{'idP':id, 'quantity': 1},
			success: function(data){
				console.log(data);
			},
			error: function(){
				console.log('fail');
			}
		});
	});
});