<html lang="pl"><meta charset="utf-8" />
    <title>Dane JSON</title> 
    <script src="jquery-1.10.2.min.js"></script>
    <body>
    <div id="content"> </div>
    <script> $.getJSON('dane.json', function (data) {
            var output = "<ul>";
            for (var i in data.products) {
                output += "<li>" + data.products[i].name + "</li>";
                output += "<li>" + data.products[i].price + "</li>";
                output += "<li>" + data.products[i].category + "</li>";
            }
            output += "</ul>";
            document.getElementById('content').innerHTML = output;
        });</script>
    
    </body>