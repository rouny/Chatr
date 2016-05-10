function postMessage(){
	//console.log('postMessage');
	
	var usermsg=document.getElementById("usermsg").value;
	document.getElementById("usermsg").value=null;
	

	var xhttp=new XMLHttpRequest();
	xhttp.onreadystatechange=function(){
		if(xhttp.readyState==4 && xhttp.status==200){
			console.log(xhttp.responseText);
			var message='You : '+usermsg+'<br/>';
			$('#chatbox').append(message);
			window.setTimeout(function() {
  			var elem = document.getElementById("chatbox");
  			elem.scrollTop = elem.scrollHeight;
			}, 2000);
		}
	};
			console.log(usermsg);

	xhttp.open("GET","http://localhost/Project/postMessage.php?q="+usermsg,true);
	xhttp.send();
}