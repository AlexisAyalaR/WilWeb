var r = new XMLHttpRequest();

r.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
        myObj = JSON.parse(this.responseText);
        document.getElementById("request").innerHTML = myObj;
    }
};
r.open("POST", "http://localhost/WilWeb/Wil/app/Http/Controllers/paul.php", true);
r.send();