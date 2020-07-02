function filterAJAX() {
    console.log($('#filter').val());
    var query = "filter=" + $('#filter').val();
    $('tbody').empty();
    $('tbody').load('/rezepte_ajax?' + query);
}

module.exports =  {
    filterAJAX : filterAJAX
};
