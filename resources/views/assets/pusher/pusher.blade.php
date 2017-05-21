
<script src="https://js.pusher.com/4.0/pusher.min.js"></script>
<script>

    // Enable pusher logging - don't include this in production
    Pusher.logToConsole = true;

    var pusher = new Pusher('58e24107a7800505a895', {
        cluster: 'us2',
        encrypted: true
    });

    var channel = pusher.subscribe('admin');
    channel.bind('new_scan', function(data) {
        toastr.options.closeButton = true;
        toastr.options.positionClass = "toast-bottom-right";
        toastr.success(data.message);
    });
</script>