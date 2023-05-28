    $(document).ready(function () {

        $("#wrong-alert").hide();
        $('#cities').on('change', function () {

            if ($('#cities').val() == "0") {
                $("#wrong-alert").show();
                window.setTimeout(function() {
                    $("#wrong-alert").fadeTo(1000, 0).slideUp(1000, function(){
                        $(this).remove(); 
                    });
                }, 5000);
            } else {

                $.ajax({
                    type: 'GET',
                    dataType: "json",
                    url: 'weather/city/' + document.getElementById('cities').value,
                    success: function (data) {
                        $("#map").html(data.html);
                    },
                });
            }
        });

    });
