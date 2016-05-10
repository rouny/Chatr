function exit(){
	var r=confirm("Do you really want to logout?");
	if(r){
		window.location.href='logout.php';
	}
}