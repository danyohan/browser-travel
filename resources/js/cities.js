    $(document).ready(function(){
        $('#cities').on('change', function () {
    
            $.ajax({
                type: 'GET',
                dataType: "json",
                url : 'weather/city/' + document.getElementById('cities').value,
                success: function(data) {
                    $("#map").html(data.html);
                },
            });
        });
    
    });