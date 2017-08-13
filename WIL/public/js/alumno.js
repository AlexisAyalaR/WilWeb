var r = new XMLHttpRequest();

r.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
        myObj = JSON.parse(this.responseText);
        document.getElementById("request").innerHTML = myObj.name;
    }
};
r.open("POST", "loginController.php", true);
r.send();