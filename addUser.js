function addUser(){

	console.log('adduser');
	var username=document.getElementById("user").value;
	document.getElementById("user").value=null;
	var xhttp=new XMLHttpRequest();
	xhttp.onreadystatechange=function(){
		if(xhttp.status==200 && xhttp.readyState==4){
			
			console.log(xhttp.responseText);
			if(xhttp.responseText!='User')
				$('#listview').append('<li><a href="#" data-toggle="pill" class="text1" onclick="userid=this.id" id="'+username+'">'+username+'</a></li>');
		}
	};

	xhttp.open("GET","http://localhost/Project/addUser.php?q="+username,true);
	xhttp.send();

}
