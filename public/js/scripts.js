window.onscroll = function() {scrollFunction()};
function scrollFunction() {
    // console.log("document.documentElement.scrollTop" ,document.documentElement.scrollTop)
    // 122
    if (document.documentElement.scrollTop > 123) {
        document.querySelector(".navbar-drop").classList.add("navbar-scroll")
    } else {
        document.querySelector(".navbar-drop").classList.remove("navbar-scroll")
    }
  }
if(document.getElementById("timer")!=undefined){
    
    var myVar = setInterval(myTimer, 1000);
}
function myTimer() {
    // Set the date we're counting down to
    var countDownDate = new Date("Apr 20, 2021 15:37:00").getTime();

    // Get today's date and time
    var now = new Date().getTime();
    
    // Find the distance between now and the count down date
    var distance = countDownDate - now;
    
    // Time calculations for days, hours, minutes and seconds
    var days = Math.floor(distance / (1000 * 60 * 60 * 24));
    var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    var seconds = Math.floor((distance % (1000 * 60)) / 1000);
    var d = new Date();
    document.getElementById("timer").innerHTML = `<strong> ${hours} </strong><span> : </span><strong> ${minutes} </strong><span> : </span><strong> ${seconds} </strong>`
}

var xmlhttp = new XMLHttpRequest();
xmlhttp.open("GET", "http://localhost:8008/homemodule/post", true);
xmlhttp.send();
xmlhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      dataFunction(JSON.parse(this.responseText));
    }
};    
function dataFunction(data){
    alert(data)
    console.log(data)
}
var detailBtns = document.getElementsByClassName('product-item')
for(var i=0 ;i<detailBtns.length;i++){
	detailBtns[i].addEventListener('click',function(){
		var productId = this.dataset.product
		var action = this.dataset.action

		console.log("item: ",productId)
        fetch('/hoangha/detailProduct', {
            method:'POST',
            headers:{
                'Content-Type':'application/json',
            }, 
            body:JSON.stringify({'productId':productId, 'action':action})
        })
        .then((response) => {
            console.log("test response")
            return response.json();
        })
	})
} 

//detail
var detailProduct = document.getElementsByClassName('product-item');
for(var i=0 ;i<detailProduct.length;i++){
	detailProduct[i].addEventListener('click',function(){
		var productId = this.dataset.product
		var action = this.dataset.action
        var data = {};
        data['id'] = productId;
// 		//
		$.ajax({
			type: 'POST',
			url: '/hoangha/detail',
			dataType: 'json',
			loading: true,
			data: data,
			success: function(res){
                switch(res['status']){
                    case '200':
                        console.log(res['data'])
                        break;
                }
            }
		});

	})
} 