var tablaTesis = "";
$(document).ready( function () {
    tablaTesis = $('#tb3').DataTable({
        language: Lenguaje
    });
    $('#tb3 tbody').on('click', 'tr', function () {
    if ($(this).hasClass('selected')) {
        $(this).removeClass('selected');
    }
    else {
        $('#tb3 tbody tr.selected').removeClass('selected');
        $(this).addClass('selected');
        var data = tablaTesis.row(this).data();
    }
})
    $('#tb3 tbody').on('dblclick', 'tr', function () {
        var table = $('#tableSuspTemp').DataTable();
        var result = $(this).attr("tesisID");
        window.location.href = _appBaseURL+"/Usuario/verTesis/"+result;
    });
});