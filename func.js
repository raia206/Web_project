$(document).ready(function() {
    $('#create_customer').submit(function(event) {
        event.preventDefault(); // prevent form from submitting normally

        // get form data
        let name = $('#loginInputName').val();
        let email = $('#loginInputEmail').val();
        let password = $('#loginInputPassword').val();

        // send form data using AJAX
        $.ajax({
            url: 'myaccount.php', // PHP script that will update the database
            type: 'POST',
            data: { loginInputName: name, loginInputEmail: email, loginInputPassword: password },
            success: function(response) {
                alert(response); // show response from PHP script
            },
            error: function(xhr, status, error) {
                console.log(xhr);
                console.log(status);
                console.log(error);
            }
        });
    });
});
