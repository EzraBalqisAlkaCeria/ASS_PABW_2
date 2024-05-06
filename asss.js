var xhr = new XMLHttpRequest();
xhr.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
        var manuscripts = JSON.parse(this.responseText);
        console.log(naskah);
    }
};
xhr.open("GET", "ass.php", true);
xhr.send();

