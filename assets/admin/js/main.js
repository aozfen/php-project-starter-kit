jQuery(document).ready(function($) {
	
    /* ----------------------------------------------------------------------- */
    /* ------------------------------- ADMİN LOGİN---------------------------- */
    /* ----------------------------------------------------------------------- */
    $('#frmAdminLogin').ajaxForm({
		beforeSubmit: function() {	
		
			var count = 0;
			var user_name = $('input[name=username]').val();
			var password = $('input[name=password]').val();
			var soru = $('textarea[name=soru]').val();
			
			if (user_name == "") {
				$('input[name=username]').css('border-color', 'red');
				
				count = 1;
			}else{
				$("#frmAdminLogin input, #frmAdminLogin textarea").css('border-color', '');
			}
			if (password == "") {
				$('input[name=password]').css('border-color', 'red');
				count = 1;
			}else{
				$("#frmAdminLogin input, #frmAdminLogin textarea").css('border-color', '');
			}
		    if( count > 0){
		    	return false;
		    } 		 
	    },
		
		beforeSend:function(){
           $('.overlay').show();
           	
		},
	    success: function(msg) {
            	
	    },
		complete: function(xhr) {   
            var  output = '';	
            $('#error_div').html('');
		
            var result = '';
			result = xhr.responseText;
			result = $.parseJSON(result);
			
			if( result.type == 'success' ){

				output =   result.text;
				$('.alert-danger').hide();
				$('.alert-success').hide().slideDown().delay(4000).slideUp();
				$('#alertSuccess').html(output);
				$('input[name=username]').prop('disabled', true);
				$('input[name=password]').prop('disabled', true);
				setTimeout(function(){ location.href = admin_url; }, 2000);
   
			} else if( result.type == 'error' ){
				output =   result.text;
				$('.alert-danger').hide().slideDown().delay(4000).slideUp();
				$('#alertError').html(output);
                $('input[name=password]').val('');
                
            }
			$('.overlay').hide();

		}
    }); 


	/* ------------------------------------------------------------------------ */
    /* -------------------------- NEW FOOTER BOX SAVE-------------------------- */
	/* ------------------------------------------------------------------------ */
	
	
    $('#frmFooterBoxSave').ajaxForm({
		beforeSubmit: function() {	
			
			var count = 0;
			var title = $('input[name=title]').val();
			var type = $('#type').val();
			var statu = $('input[name=rbStatu]:checked').val();
			var ranking = $('input[name=ranking]').val();

			if(type == 'link'){
				if(title == ""){
					$('input[name=title]').css('border-color', 'red');
					count = 1
				}else{
					$("input[name=title]").css('border-color', '');
					count = 0
				}
			}else{
				$("input[name=title]").css('border-color', '');
				count = 0
			}
			
			if(ranking == '')
			ranking = 1;
			
		    if( count > 0){
		    	return false;
			} 		 
		
	    },
		
		beforeSend:function(){
           $('.overlay').show();
		   $('input[name=title]').prop('disabled', true);
		   $('#type').prop('disabled', true);
		   $('input[name=ranking]').prop('disabled', true);
		   $('input[name=rbStatu]').prop('disabled', true);
		},
	    success: function(msg) {
            	
	    },
		complete: function(xhr) {   
            var  output = '';	
           
            var result = '';
			result = xhr.responseText;
			result = $.parseJSON(result);
			
			if( result.type == 'success' ){
				
				$('#newFooterBoxModal').modal('hide');
				/*$('input[name=title]').prop('disabled', false).val('');
				$('#type').prop('disabled', false);
				$('input[name=rbStatu]').prop('disabled', false);
				$('input[name=ranking]').prop('disabled', false).val('');*/
				
				location.reload();

				/*$.ajax({
				type: 'post',
				url: admin_ajax_url + 'footer.appendnewbox',
				data: {'id': 1},
				success: function(data){
				   if(data == 'bos'){
					
				   } else {
					 $('#tblFooterBox').append(data);
					 
				   }
				}
			  })*/
   
			} else if( result.type == 'error' ){
				alert('Hata! Yeni veri eklenemedi')
				$('input[name=title]').prop('disabled', false);
				$('#type').prop('disabled', false);
				$('input[name=rbStatu]').prop('disabled', false);
				$('input[name=ranking]').prop('disabled', false);
			
                
            }
			$('.overlay').hide();

		}
    }); 

	$('.footerBoxPassive').click(function(){
		var id = $(this).attr('id');
		$.ajax({
				type: 'post',
				url: admin_ajax_url + 'footer.activity',
				data: {'id': id, 'status': 'passive'},
				success: function(data){
				   if(data == 'success'){
					$('#spn' + id).text('Pasif').css('color','#ff6961');
					$('.footerBoxPassive a').text('Aktif et');
					$('.footerBoxPassive').removeClass('footerBoxPassive').addClass('footerBoxActive');
					
				   } else {
					   alert('Hata !')
				   }
				}
		})
	});
	$('.footerBoxActive').click(function(){
		var id = $(this).attr('id');
		$.ajax({
				type: 'post',
				url: admin_ajax_url + 'footer.activity',
				data: {'id': id, 'status': 'active'},
				success: function(data){
				   if(data == 'success'){
					$('#spn' + id).text('Aktif').css('color','#00a65a');
				   } else {
					   alert('Hata !')
				   }
				}
		})
	});
	
}); 