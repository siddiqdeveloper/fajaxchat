
function getAllHistory(){

                $.ajax({
                   
              url: 'https://chat.ashanaturals.inturals.in/api/getAllHistory',
              data: {name : Cookies.get('username') ,type:'user',email:Cookies.get('useremail')},
              dataType: 'json',
              type: 'get',
              success: function(res){
                  if(res.status == 'success'){
                      for(var i = 0; i<res.data.length; i++){

                          if(res.data[i].type == 'admin'){
                          adminSend(res.data[i]);
                          }else{

                              var text = res.data[i].msg;

                              var img = '<i class="zmdi zmdi-account"></i>';
                                    $('#chat_converse').append('<div class="chat_msg_item chat_msg_item_user"><div class="chat_avatar"><img src="/images/default-user.jpg" />' + img + '</div>' + text + '</div>');
                                    $('#chatSend').val('');
                                    if ($('.chat_converse').height() >= 256) {
                                        $('.chat_converse').addClass('is-max');
                                    }
                                    $('.chat_converse').scrollTop($('.chat_converse')[0].scrollHeight);

                          }
                      }
                  }
                  return false;
              }, error: function(e){
                  
              }
          });



            }
            
 function adminSend(text) {
    if(text.msg != ''){
        text = text.msg;
       
        text = "</i>"+"</div>" +text + "</div>";
        $('#chat_converse').append("<div class='chat_msg_item chat_msg_item_admin'><div class='chat_avatar'><img src='https://www.shutterstock.com/image-vector/man-icon-flat-vector-260nw-1371568223.jpg'><i class='zmdi zmdi-headset-mic'>"+text);
        
    }else{

        if(text.file_type == 'mp3'){


             var text = '<audio controls><source src="'+text.url+'" type="audio/mpeg"></audio>';
        var img = '<i class="zmdi zmdi-account"></i>';
        $('#chat_converse').append('<div class="chat_msg_item chat_msg_item_admin"><div class="chat_avatar"><img src="https://www.shutterstock.com/image-vector/man-icon-flat-vector-260nw-1371568223.jpg" />' + img + '</div>' + text + '</div>');


        }else{

             var text = '<img src="'+text.url+'" style="width:100%"/>'
        var img = '<i class="zmdi zmdi-account"></i>';
        $('#chat_converse').append('<div class="chat_msg_item chat_msg_item_admin"><div class="chat_avatar"><img src="https://www.shutterstock.com/image-vector/man-icon-flat-vector-260nw-1371568223.jpg" />' + img + '</div>' + text + '</div>');

        }
    
       
    }
    
    if ($('.chat_converse').height() >= 256) {
        $('.chat_converse').addClass('is-max');
    }
    $('.chat_converse').scrollTop($('.chat_converse')[0].scrollHeight);
}


    function userSend(text) {
                // alert();
                console.log(Cookies.get('useremail'));
            //            .emit('sendtoadmin',{text:text,email:Cookies.get('useremail')});  
                $.ajax({
                   
                    url: 'https://chat.ashanaturals.inturals.in/api/usermessage/update',
                    data: {fromid:'',toid :myid,msg :text,name : Cookies.get('username') ,type:'user',email:Cookies.get('useremail')},
                    dataType: 'json',
                    type: 'get',
                    success: function(res){
                        if(res.status == 'success'){
                            console.log(res.history);
                            for(var i = 0; i<res.history.length; i++){
                                adminSend(res.history[i].msg);
                            }
                        }
                        return false;
                    }, error: function(e){
                        
                    }
                });


                var img = '<i class="zmdi zmdi-account"></i>';
                $('#chat_converse').append('<div class="chat_msg_item chat_msg_item_user"><div class="chat_avatar"><img src="/images/default-user.jpg" />' + img + '</div>' + text + '</div>');
                $('#chatSend').val('');
                if ($('.chat_converse').height() >= 256) {
                    $('.chat_converse').addClass('is-max');
                }
                $('.chat_converse').scrollTop($('.chat_converse')[0].scrollHeight);
            }



(function ($) {
    "use strict";




    
/*--
    Menu Sticky
-----------------------------------*/
var windows = $(window);
var screenSize = windows.width();
var sticky = $('.header-sticky');

windows.on('scroll', function() {
    var scroll = windows.scrollTop();
    if (scroll < 300) {
        sticky.removeClass('is-sticky');
    }else{
        sticky.addClass('is-sticky');
    }
});

/*--
    Mobile Menu
------------------------*/
var mainMenuNav = $('.main-menu nav');

/*--
    Category Menu
------------------------*/
    
/*-- Variables --*/
var categoryToggleWrap = $('.category-toggle-wrap');
var categoryToggle = $('.category-toggle');
var categoryMenu = $('.category-menu');




var headerCart = $('.header-cart');
var closeCart = $('.close-cart, .cart-overlay');
var miniCartWrap = $('.mini-cart-wrap');



// headerCart.on('click', function(e){
//     console.log(miniCartWrap);
//     e.preventDefault();
//     $('.cart-overlay').addClass('visible');
//     miniCartWrap.addClass('open');
// });
$(document).on('click','.close-cart, .cart-overlay', function(e){
    e.preventDefault();
    $('.cart-overlay').removeClass('visible');
    miniCartWrap.removeClass('open');


});
    

var headerfa = $('.header-cart');
var closefa = $('.close-fa, .cart-overlay');
var minifaWrap = $('.mini-fa-wrap-cat');
var musiccat = $('.mini-cart-wrap-music');
var songlist = $('.open-wish-list');











//chat







$('.openchartwindow').click(function() {
                $('.fabs').fadeIn();
                $('.opencharticon').fadeOut();
                $('.closecharticon').fadeIn();
            });

            $('.close-chatwindow').click(function(){
                    $('.fabs').fadeOut();
                    $('.opencharticon').fadeIn();
                    $('.closecharticon').fadeOut();
            });

            $('.openchart').click(function(){
                console.log($('.nps'));

                if($(this).hasClass('chartopen')){
                    $('.opencharticon').fadeIn();
                    $('.closecharticon').fadeOut();
                    $('.nds').fadeOut();
                    $('.openchart').removeClass('chartopen');
                }else{
                    $('.openchart').addClass('chartopen');
                    $('.nds').fadeIn();
                    $('.opencharticon').fadeOut();
                    $('.closecharticon').fadeIn();
                }
                
            });

//              $('#fab_camera').click(function(){
//     $('#my-file').click();
// });

  function userSendimg(url) {
          var text = {text:'',url:url};
         //  socket.emit('sendtoadmin',{text:text,email:Cookies.get('useremail')});  
            $.ajax({
                url: 'https://chat.ashanaturals.inturals.in/api/usermessage/update',
                data: {url:url,fromid:'',toid :myid,msg :text,name : 'user' ,type:'user',email:Cookies.get('useremail')},
           
                type: 'get',
                success: function(res){
                    if(res.status == 'success'){
                      
                    }
                    return false;
                }, error: function(e){
                   
                }
            });
          } 

          
             $('#my-file').fileupload({
        url: 'https://chat.ashanaturals.inturals.in/api/imageupload',
        type:'post',
        done: function (e, data) {
            $.each(data.result.files, function (index, file) {
               console.log(file);
                var datas = file.url;
                userSendimg(datas);
                var text = '<img src="'+datas+'" style="width:100%"/>'
               var img = '<i class="zmdi zmdi-account"></i>';
          $('#chat_converse').append('<div class="chat_msg_item chat_msg_item_user"><div class="chat_avatar"><img src="/images/default-user.jpg" />' + img + '</div>' + text + '</div>');
                //$('.imageurllist').append("<input type='hidden' name='imageurl' value='"+datas+"'>");

            });
        },
        progressall: function (e, data) {
            var progress = parseInt(data.loaded / data.total * 100, 10);
            
        }
    }).prop('disabled', !$.support.fileInput)
        .parent().addClass($.support.fileInput ? undefined : 'disabled');








              $('#chat_first_screen').click(function(e) {
                $('.error').remove();

                  if($('.chat-email').val() == ''){
                     alertify.success('Please enter you email');
                    // $('.chat-email').after("<em class='error'></em>");
                     return false;
                }

                function validateEmail(sEmail) {
                      var reEmail = /^(?:[\w\!\#\$\%\&\'\*\+\-\/\=\?\^\`\{\|\}\~]+\.)*[\w\!\#\$\%\&\'\*\+\-\/\=\?\^\`\{\|\}\~]+@(?:(?:(?:[a-zA-Z0-9](?:[a-zA-Z0-9\-](?!\.)){0,61}[a-zA-Z0-9]?\.)+[a-zA-Z0-9](?:[a-zA-Z0-9\-](?!$)){0,61}[a-zA-Z0-9]?)|(?:\[(?:(?:[01]?\d{1,2}|2[0-4]\d|25[0-5])\.){3}(?:[01]?\d{1,2}|2[0-4]\d|25[0-5])\]))$/;

                      if(!sEmail.match(reEmail)) {

                        return false;
                      }

                      return true;

                    }

                    if(!validateEmail($('.chat-email').val())){
                         alertify.success('Please check you email');
                         return false;
                    }


                 if($('.chat-name').val() == ''){
                      alertify.success('Please enter you name');
                    //$('.chat-name').after("<em class='error'></em>");
                    return false;
                }
               
                
                if($('.chat-email').val() !='' && $('.chat-name').val() != ''){
                     hideChat(1);
                    $('.fab_fields').fadeIn(); 

                    var temp = {username:$('.chat-email').val(),email:$('.chat-name').val()};
                    console.log(temp);
                     Cookies.set('username',$('.chat-name').val());
                    console.log(temp);
                    Cookies.set('useremail',$('.chat-email').val()); 
                      Cookies.set('useremail',$('.chat-email').val()); 

                    Cookies.set('userchatdata',temp);

                    getAllHistory();
                  
                }else{

              

                }

               // socket.emit('username',temp); 

              });

              $('#chat_second_screen').click(function(e) {
                    hideChat(2);
              });

              $('#fab_send').click(function(){
                //userSend('hai');
              });


    
})(jQuery);	


