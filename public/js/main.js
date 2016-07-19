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

	var $no_field = $('.number_dot');
	var space = 1;
	var numdot =0;
	$no_field.on('keyup', function(e){
		if(e.keyCode!=8){
			var valueo = $(this).val();
			// console.log($(this).val().replace(/\./g, '').length%3);
				console.log(auto_insert_dot(valueo));

			if(auto_insert_dot(valueo)==true){
			// 	// var tll = valueo.replace('.').length;
				var first = valueo.slice(0, space);
				var after = valueo.slice(space);
				var str = first+'.'+after;
				// numdot++;
				space=space+1+3;
			// 	// space=space+3;
				// console.log(space);
				$(this).val(str);
			}
		}
	});

	// AJAX SUBMIT PRODUCT
	$('.submit-product').on('click', function(e){
		$.ajax({
			url: '/product/store',
			type: 'POST',
			data: {'name_p': $('input[name=name_p]').val(), 'desc_p': $('textarea[name=desc_p]').val(), 'price_p': $('input[name=price_p]').val(), 'stock_p': $('input[name=stock_p]').val(),'_token': $('input[name=_token').val(), 'status_p':$('input[name=status_p').val()},
			success:function(data){
				console.log('ok');
			},
			error: function(){
				console.log('fail');
			},
			beforeSend: function(){
				$('.notied').remove();
				$('.form-product').prepend('<div class="notied" style="color:pink">Loading...</div>');
			}
		}).done(function(){
			$('.notied').remove();
			$('.form-product').prepend('<div class="notied" style="color:green">Added to a product</div>');
		}).fail(function(){
			$('.notied').remove();
			$('.form-product').prepend('<div class="notied" style="color:red">Error</div>');
		});
		e.preventDefault();
		// return false;
	});

});


function auto_insert_dot(number){
	var tl = number.replace(/\./g,'').length;
	for (var i = 0; i < tl; i++) {
		if(tl >=3 && tl%3==1){
			return true;
			// var first = number.substring(1, 3);
			// // number=first;
			// console.log('first');

		}else{
			return false
		}
	}
	// // console.log(number);
	// return false;
}