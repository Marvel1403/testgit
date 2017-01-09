document.addEventListener("DOMContentLoaded", function () {
    function szukaj()
    {
        var wyswietlanie = document.getElementById("wyniki");
        var szukana = document.getElementById("szukajka").search.value;
        szukana = szukana.toLowerCase();

        $.ajax({
            type: "POST", 
            url: "owoce.php",
            dataType: 'json',
            data: {
                zmienna1: szukana
            },
            success: function (json) {
                wyswietlanie.textContent = "";
                var wynik = "";
                jQuery.each(json, function (i, ob) {
                    wynik += ob + "<br />";
                });
                wyswietlanie.innerHTML = wynik;
            },
            complete: function () {
                
            },
            error: function () {
                wyswietlanie.textConent = "Wystąpił błąd w połączeniu :";
            }
        });
    }

    var element = document.getElementById('pobierz');
    element.onclick = szukaj;
});
    