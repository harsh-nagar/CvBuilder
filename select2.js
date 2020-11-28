$('#attending').click(function() {
    toggleSelection('year', $(this).is(':checked'));
   
});

function toggleSelection(sel, chk) {
    $('#' + sel).attr('disabled', chk);
}