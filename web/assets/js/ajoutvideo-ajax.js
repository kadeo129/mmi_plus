
$(function() {
    $('.form-group').on('click', '#submitlien',function() {

    	var lien = $('.get-link').val();
    	console.log('api/index.php?url='+lien);
    	
        $.ajax({

            type: 'get',
            url: 'api/index.php?url='+lien,
            success: function(data) {

                var videoData = JSON.parse(data);
                var source = lien.replace("watch?v=", "v/");

                $('#titre').attr({value : videoData.title});
                $('#inputdes').val(videoData.desc);
                $('#ytplayer').attr({src : source});
            },
            
            error: function() {
              	alert('La requête n\'a pas abouti'); 
            }
        });    
    });  
});