$(document).ready(function () {

    $('body').on('click', '.btn-add-comments', function (e) {
        e.preventDefault();
        var $this = $(this),
            url = $this.attr('route'),
            token = $('meta[name="csrf-token"]').attr('content'),
            form = $('.customers-form'),
            name = $('.name-text').val(),
            email = $('.email-text').val(),
            content = $('.content-text').val();
        console.log(name, email, content);
        $.ajax({
            url: url,
            data: {
                _token: token,
                name: name,
                email: email,
                content: content,
            },
            type: 'POST',
            beforeSend: function () {
            },
            success: function (data) {
                $('.name-text').val('');
                $('.email-text').val('');
                $('.content-text').val('');
                $('.success-added').removeClass('d-none');
            },
            error: function () {
            }
        });
    });

    $('body').on('click', '.btn-add-customers', function (e) {
        e.preventDefault();
        var $this = $(this),
            url = $this.attr('route'),
            token = $('meta[name="csrf-token"]').attr('content'),
            form = $('.customers-form'),
            name = $('.name-value').val(),
            email = $('.email-value').val(),
            message = $('.message-value').val();
        console.log(name, email, message);
        $.ajax({
            url: url,
            data: {
                _token: token,
                name: name,
                email: email,
                message: message,
            },
            type: 'POST',
            beforeSend: function () {
            },
            success: function (data) {
                $('.name-value').val('');
                $('.email-value').val('');
                $('.message-value').val('');
                $('.success-sent').removeClass('d-none');
            },
            error: function () {
            }
        });
    });
});
