
        on('success.form.bv', function(e) {
            $('#success_message').slideDown({ opacity: "show" }, "slow") // Do something ...
                $('#contact_form').data('bootstrapValidator').resetForm();

            // Prevent form submission
            e.preventDefault();
            $.ajax({
                type: 'post',
                url: 'post.php',
                data: $('contact_form').serialize(),
                success: function () {
                alert('form was submitted');
            }
          });
        });
});

