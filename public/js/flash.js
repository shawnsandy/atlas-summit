Messenger.options = {
    extraClasses: 'messenger-fixed messenger-on-bottom messenger-on-right',
    theme: 'flat',
    showCloseButton: true
}

$(function() {
    if($('.alert').length){
        var message = $('.alert').text()
        Messenger().post({
            message:message,
            type: 'success'
        })
    }
})