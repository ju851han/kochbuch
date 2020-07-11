function filterAJAX() {
    var query = "filter=" + $('#filter').val();
    $('tbody').empty();
    $('tbody').load('/rezepte_ajax?' + query);
}

function show_details(rID) {
    if ($('#z_' + rID).length === 0) {
        $.getJSON('/api/v1/zutaten/' + rID, function (zutaten) {
            var zutaten_html = "<tr id=\"z_" + rID + "\"><td colspan=\"5\" class=\"bg-white\"><br>\n" +
                " <table class=\" col-8 col-md-6 align-self-center\">\n" +
                "                    <thead>\n" +
                "                    <tr>\n" +
                "                        <th class=\"bg-white\">Menge</th>\n" +
                "                        <th class=\"bg-white\">Zutat</th>\n" +
                "                    </tr>\n" +
                "                    </thead>\n" +
                "                    <tbody id=\"zutaten\" class=\"background2ndTR\">\n";
            for (var i = 0; i < zutaten.length; i++) {
                var zutat = zutaten[i];
                zutaten_html = zutaten_html + "<tr><td> " + zutat.menge + " " + zutat.mengeneinheit + "</td><td>" + zutat.zName + "</td></tr>";
            }
            zutaten_html = zutaten_html + "</tbody></table></tr>";
            $('#' + rID).last().after(zutaten_html);
            $('#z_' + rID).fadeIn('fast');

        });
    } else {
        $('#z_' + rID).fadeIn('fast');
    }
    $('#btn_' + rID).replaceWith("<button id=\"btn_" + rID + "\" class=\"btn-primary\" onclick=\"rezepte.hide_details(" + rID + ");\">-</button>");
}


function hide_details(rID) {
    $('#z_' + rID).fadeOut('slow'); /*oder:  $('#z_' + rID).hide*/
    $('#btn_' + rID).replaceWith("<button id=\"btn_" + rID + "\" class=\"btn-primary\" onclick=\"rezepte.show_details(" + rID + ");\">+</button>");
}


module.exports = {
    filterAJAX: filterAJAX,
    show_details: show_details,
    hide_details: hide_details
};
