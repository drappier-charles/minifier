function compressFile() {
    var formData = new FormData($('form')[0]);
    $.ajax({
        url: BASE_URL_API+'compress.php',  //Server script to process data
        type: 'POST',
        //Ajax events$
        success: function(response) {
            $('#download').attr('href',BASE_URL_API+response.file).show();
        },
        // Form data
        data: formData,
        //Options to tell jQuery not to process data or worry about content-type.
        cache: false,
        contentType: false,
        processData: false
    });
}

function addFileField() {
    $('form').append("<input type='file' class='file' name='file[]'/>")
}

$(document).ready(function() {
    $('#compress').bind('click',function() {
        compressFile(); 
        return false;
    });
    $('#addFileField').bind('click',function() {
        addFileField();
    })
});
