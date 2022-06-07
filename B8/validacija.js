function Validacija() {
	
    var name = document.getElementById("ime").value;
	var mail=document.getElementById("email").value;
	var com=document.getElementById("comment").value;
	const re = /^(([^<>()[\]\.,;:\s@\"]+(\.[^<>()[\]\.,;:\s@\"]+)*)|(\".+\"))@(([^<>()[\]\.,;:\s@\"]+\.)+[^<>()[\]\.,;:\s@\"]{2,})$/i;

    if(name == ""||mail==""||comment=="" )
    {
        alert("Sva polja moraju biti popunjena!");
        return false;
    }
    if(!re.test(mail)) {
        alert("Mail nije u dobrom formatu!");
        return false;
    }
}