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
			url: '/master/z001/getAllCate',
			dataType: 'html',
			loading: true,
			data: data,
			success: function (res) {
				$("#listcontent").empty();
				$("#listcontent").append(res);
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
		$(document).on('click', '#btn-add-new', function () {
			if($('#content_cate').val()!=""){
				var data ={};
				data['content'] = $('#content_cate').val();
				console.log(data['content']);

				$.ajax({
					type:'post',
					url : '/master/z001/save',
					dataType: 'json',
					loading: true,
					data:data,
					success: function(res){
						switch(res['status']){
							case '200':
								getListContent();
								break;
						}
					}
				})
			}
		});

		//delete
		var delBtns = document.getElementsByClassName('btn-delete')
		for(var i=0 ;i<delBtns.length;i++){
			delBtns[i].addEventListener('click',function(){
				var categoryId = this.dataset.product
				// console.log(categoryId)	;	
				var data ={};
				data['id'] = categoryId;
				$.ajax({
					type:'post',
					url : '/master/z001/delete',
					dataType: 'json',
					loading: true,
					data:data,
					success: function(res){
						// switch(res['status']){
						// 	case '200':
						// 		getListContent();
						// 		break;
						// }
						console.log(res)
					}
				})
			})
		}
		

		//edit
		var editBtns = document.getElementsByClassName('btn-edit')
		for(var i=0 ;i<editBtns.length;i++){
			editBtns[i].addEventListener('click',function(){
				var content = this.dataset.content
				
				$("#content_cate").val(content);
			})
		}

    }catch(e){
        alert('initEvents: ' + e.message)
    }
}