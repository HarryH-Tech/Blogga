function showCart() {
		if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                let id = document.getElementById("id").innerHTML;
                let price = document.getElementById("price").innerHTML;
                let cart = document.getElementById("cart").innerHTML = this.responseText;
				console.log(id);
				console.log( this.responseText);
				
			}
        };
        xmlhttp.open("GET","cart.php?q="+id,true);
        xmlhttp.send();
    
}