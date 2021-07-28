$('#departCode').on('change', function(){
    console.log('Change option text ' + $(this).find('option').filter(':selected').text())
    $('#departName').val($(this).find('option').filter(':selected').text())
})