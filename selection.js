$('#working').click(function() {
    toggleSelection('yearselect', $(this).is(':checked'));
    toggleSelection('monthselect', $(this).is(':checked'));
});

function toggleSelection(sel, chk) {
    $('#' + sel).attr('disabled', chk);
}