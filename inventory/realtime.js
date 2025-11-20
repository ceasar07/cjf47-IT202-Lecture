function getRealTime() {
    var domcategories = document.getElementById("categorycount");
    var domitems = document.getElementById("itemcount");
    var domlistpricetotal = document.getElementById("listpricetotal");

    var request = new XMLHttpRequest();
    request.open("GET", "realtime.php", true);

    request.onreadystatechange = function () {
        if (request.readyState == 4 && request.status == 200) {
            var xmldoc = request.responseXML;

            var xmlcategories = xmldoc.getElementsByTagName("categories")[0];
            var categories = xmlcategories.childNodes[0].nodeValue;

            var xmlitems = xmldoc.getElementsByTagName("items")[0];
            var items = xmlitems.childNodes[0].nodeValue;

            var xmllistpricetotal = xmldoc.getElementsByTagName("listpricetotal")[0];
            var listpricetotal = xmllistpricetotal.childNodes[0].nodeValue;

            domcategories.innerHTML = categories;
            domitems.innerHTML = items;
            domlistpricetotal.innerHTML = listpricetotal;
        }
    };

    request.send();
}