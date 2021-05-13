$(document).ready(function () {
	try {
		initEvents();
	} catch (e) {
		alert('ready: ' + e.message);
	}
});

function getListContent() {
	try {
		var data = {};
		//
		$.ajax({
			type: 'POST',
			url: '/master/z002/getAll',
			dataType: 'html',
			loading: true,
			data: data,
			success: function (res) {
				$("#products").empty();
				$("#products").append(res);
			},
			// Ajax error
			error: function (res) {
			}
		});
	} catch (e) {
		alert('' + e.message);
	}
}

function initEvents(){
    try{
        //btn-add-new
		$(document).on('click', '#btn-new-product', function () {
			if($('#product_name').val()==""||$('#product_price').val()=="" || $('#product_path').val().split('\\').pop()=="" ||$('#product_stock').val()==""||$('#product_content').val()==""){
				alert("Nhập đủ thông tin để thêm mới")
			}
			else{
				var data ={};
				data['name'] = $('#product_name').val();
				data['price'] = $('#product_price').val();
				data['memory'] = $('#product_memory option:selected').text();
				data['path'] = 'img/'+$('#product_path').val().split('\\').pop();
				data['content'] = $('#product_content').val();
				data['stock'] = $('#product_stock').val();
				console.log(data['name']);
				$.ajax({
					type:'post',
					url : '/master/z002/create',
					dataType: 'json',
					loading: true,
					data:data,
					success: function(res){
						switch(res['status']){
							case '200':
								getListContent();
								console.log(res['data'])
								break;
						}
					}
				})
			}
		});

		//update
		$(document).on('click', '#btn-update-product', function () {
			
		});
		//press edit
		$(document).on('click', '#btn-edit-product', function () {
			// console.log("press")
			var data ={};
			data['id'] = this.dataset.product
			$.ajax({
				type:'post',
				url : '/master/z002/show',
				dataType: 'json',
				loading: true,
				data:data,
				success: function(res){
					switch(res['status']){
						case '200':
							// getListContent();
							console.log(res['data'])
							console.log(res['data']);
							// console.log(
							// 	$('#product_memory option')
							// );
							$('#product_name').val(res['data']['name']);
							$('#product_price').val(res['data']['price']);
							// $('#product_memory option').val()
							var opts = $('#product_memory option');
							for (var opt, j = 0; opt = opts[j]; j++) {
								console.log(opt.value,res['data']['memory']);
								if (opt.value == res['data']['memory']) {
									$('#product_memory').selectedIndex = j;
									break;
								}
							}
							// $('#product_path').val(res['data']['path']);
							$('#product_content').val(res['data']['content']);
							$('#product_stock').val(res['data']['stock']);
							break;
					}
				}
			})
			if(!document.getElementById('btn-new-product').classList.contains('d-none')){
				var btnCreate = document.getElementById('btn-new-product').classList.add("d-none");
				var btnCreate = document.getElementById('btn-update-product').classList.remove("d-none");
			}
		})


		//cancel
		$(document).on('click', '#btn-cancel-product', function () {
			$('#product_name').val("");
			$('#product_price').val("");
			$('#product_memory option:selected').text("");
			$('#product_path').val("");
			$('#product_content').val("");
			$('#product_stock').val("");
			console.log(document.getElementById('btn-new-product').classList.contains('d-none'));
			if(document.getElementById('btn-new-product').classList.contains('d-none')){
				document.getElementById('btn-new-product').classList.remove("d-none");
				document.getElementById('btn-update-product').classList.add("d-none");
			}
		});
		
		//delete
		$(document).on('click', '#btn-delete-product', function () {
			var data ={};
			data['id'] = this.dataset.product
			$.ajax({
				type:'post',
				url : '/master/z002/delete',
				dataType: 'json',
				loading: true,
				data:data,
				success: function(res){
					switch(res['status']){
						case '200':
							getListContent();
							console.log(res['data'])
							break;
					}
				}
			})
		});

    }catch(e){
        alert('initEvents: ' + e.message)
    }

}