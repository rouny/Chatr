function getUserList(){
	console.log('getUserList');
	var xhttp=new XMLHttpRequest();

	xhttp.onreadystatechange=function(){
		if(xhttp.readyState==4 && xhttp.status==200){
			var data=$.parseJSON(xhttp.responseText);
			for(var i=0;i<data.length;i++){
				$('#listview').append('<li><a href="#" onclick="userid=this.id" data-toggle="pill" class="text1" id="'+data[i]+'">'+data[i]+'</a></li>');
			}
		}
	};

	xhttp.open("GET","http://localhost/Project/getUsers.php",true);
	xhttp.send();

}

setTimeout(getUserList,1000);