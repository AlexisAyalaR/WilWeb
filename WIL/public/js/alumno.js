var request = new XMLHttpRequest();

request.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
        myObj = JSON.parse(this.responseText);
        document.getElementById("request").innerHTML = myObj;
    }
};
request.open("GET", "loginController.php", true);
request.send();