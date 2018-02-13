/*
 * Author: Abdullah A Almsaeed
 * Date: 4 Jan 2014
 * Description:
 *      This is a demo file used only for the main dashboard (index.html)
 **/

$(function () {

 
  "use strict";

  //Make the dashboard widgets sortable Using jquery UI
  $(".connectedSortable").sortable({
    placeholder: "sort-highlight",
    connectWith: ".connectedSortable",
    handle: ".box-header, .nav-tabs",
    forcePlaceholderSize: true,
    zIndex: 999999
  });
  $(".connectedSortable .box-header, .connectedSortable .nav-tabs-custom").css("cursor", "move");

  //jQuery UI sortable for the todo list
  $(".todo-list").sortable({
    placeholder: "sort-highlight",
    handle: ".handle",
    forcePlaceholderSize: true,
    zIndex: 999999
  });

  //bootstrap WYSIHTML5 - text editor
  $(".textarea").wysihtml5();

  //SLIMSCROLL FOR CHAT WIDGET
  $('#chat-box').slimScroll({
    height: '400px',
    start: 'bottom'
  });
  $('#chat-send').click(function(){
    var message = $('input[name=message]').val();
    
    $.ajax({
      type: 'post',
      url: admin_ajax_url + 'send-message',
      data: {'userID': session_id, 'message': message},
      success: function(data){
        if(data == 'error'){
          alert('Mesaj gönderilemedi');
        }else if (data == 'success'){
          $('input[name=message]').val("");
        }
      }
    })
  });
  $('#chat-box').scroll(function(){
    if($(this).scrollTop() === 0){
     $('.loader').show();
     var id = $('.item:first').attr('id');
     
     $.ajax({
       type: 'post',
       url: admin_ajax_url + 'more-message',
       data: {'id': id},
       success: function(data){
          if(data == 'bos'){
            $('.loader').html('Başka mesaj yok');
          }else if(data == 'NON'){
            
          }else{
            $('#chat-box').prepend(data);
            $('.loader').hide();
          }
       }
     })
   
    }
    if($(this).scrollTop() > 20){
      $('.loader').hide();
     }
  });

  if(chat_active){
    setInterval(function(){
      var id = $('.item:last').attr('id');
      $.ajax({
        type: 'post',
        url: admin_ajax_url + 'refresh-message',
        data: {'id': id},
        dataType: 'json',
        success: function(data){
          if(data.success == 'true'){
            $('#chat-box').append(data.data);
            if(data.music == 'true'){
              var audio = document.getElementById("music");
              audio.play();
            }
            $('#chat-box').scrollTop(400);
          }
        }
      })
    }, 2000);
  }else{
    $('.chat-disabled').show();
  }
  

  /* The todo list plugin */
  $(".todo-list").todolist({
    onCheck: function (ele) {
      window.console.log("The element has been checked");
      return ele;
    },
    onUncheck: function (ele) {
      window.console.log("The element has been unchecked");
      return ele;
    }
  });

});
