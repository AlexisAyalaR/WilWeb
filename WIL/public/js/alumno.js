var request = new XMLHttpRequest();

request.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
        myObj = JSON.parse(this.responseText);
        document.getElementById("section3").innerHTML = myObj.name;
    }
};
request.open("GET", "loginController.php", true);
request.send();