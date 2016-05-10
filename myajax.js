var userid=null;

function loadMessage(){
// console.log(userid);
	var xhttp=new XMLHttpRequest();
	xhttp.onreadystatechange=function(){
		if(xhttp.readyState==4 && xhttp.status==200){
			document.getElementById("chatbox").innerHTML=xhttp.responseText;
			//console.log(xhttp.responseText);
			//$('#chatbox').append(xhttp.responseText);
			window.setTimeout(function() {
  			var elem = document.getElementById("chatbox");
  			elem.scrollTop = elem.scrollHeight;
			}, 2000);

		}
	};

	xhttp.open("GET","http://localhost/Project/getMessage.php?q="+userid,true);
	xhttp.send();

}
setInterval(loadMessage,1000);
