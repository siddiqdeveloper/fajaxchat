
 function adminSend(text) {
    if(text.msg != ''){
        text = text.msg;
       
        text = "</i>"+"</div>" +text + "</div>";
        $('#chat_converse').append("<div class='chat_msg_item chat_msg_item_admin'><div class='chat_avatar'><img src='https://www.shutterstock.com/image-vector/man-icon-flat-vector-260nw-1371568223.jpg'><i class='zmdi zmdi-headset-mic'>"+text);
        
    }else{
    
        var text = '<img src="'+text.url+'" style="width:100%"/>'
        var img = '<i class="zmdi zmdi-account"></i>';
        $('#chat_converse').append('<div class="chat_msg_item chat_msg_item_admin"><div class="chat_avatar"><img src="https://www.shutterstock.com/image-vector/man-icon-flat-vector-260nw-1371568223.jpg" />' + img + '</div>' + text + '</div>');
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
                   
                    url: 'http://chat.ashanaturals.in/api/usermessage/update',
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

/*
*  Category Menu Default Close for Mobile & Tablet Device
*  And Open for Desktop Device and Above
*/
function categoryMenuToggle() {
    var screenSize = windows.width();
    if ( screenSize <= 1199) {
        categoryMenu.slideUp();
    } else {
        categoryMenu.slideDown();
    }
}

/*-- Category Menu Toggles --*/
function categorySubMenuToggle() {
    var screenSize = windows.width();
    if ( screenSize <= 1199) {
        $('.category-menu .menu-item-has-children > a').prepend('<i class="expand menu-expand"></i>');
        $('.category-menu .menu-item-has-children ul').slideUp();
//        $('.category-menu .menu-item-has-children i').on('click', function(e){
//            e.preventDefault();
//            $(this).toggleClass('expand');
//            $(this).siblings('ul').css('transition', 'none').slideToggle();
//        })
    } else {
        $('.category-menu .menu-item-has-children > a i').remove();
        $('.category-menu .menu-item-has-children ul').slideDown();
    }
}
categoryMenuToggle();
windows.resize(categoryMenuToggle);
categorySubMenuToggle();
windows.resize(categorySubMenuToggle);

categoryToggle.on('click', function(){
    categoryMenu.slideToggle();
});
    
/*-- Category Sub Menu --*/
$('.category-menu').on('click', 'li a, li a .menu-expand', function(e) {
    var $a = $(this).hasClass('menu-expand') ? $(this).parent() : $(this);
    if ($a.parent().hasClass('menu-item-has-children')) {
        if ($a.attr('href') === '#' || $(this).hasClass('menu-expand')) {
            if ($a.siblings('ul:visible').length > 0) $a.siblings('ul').slideUp();
            else {
                $(this).parents('li').siblings('li').find('ul:visible').slideUp();
                $a.siblings('ul').slideDown();
            }
        }
    }
    if ($(this).hasClass('menu-expand') || $a.attr('href') === '#') {
        e.preventDefault();
        return false;
    }
});


 $(document).on('change','.color-size',function(){
               
              
                var attr =   $(this).val();
                var productId = $('.productId').val();
                      $.ajax({
                    headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'), }, 
                    url: '/product/price',
                    data: { productId: productId,attr:attr},
                    dataType: 'json',
                    type: 'POST',
                    success: function(res){
                       $('.price').text('€ '+res.price);
                    },error: function(e){
                        console.log(e.responseText);
                        return false;
                    }
                });


});

/*-- Sidebar Category --*/
var categoryChildren = $('.sidebar-category li .children');
    
    categoryChildren.slideUp();
    categoryChildren.parents('li').addClass('has-children');
    
$('.sidebar-category').on('click', 'li.has-children > a', function(e) {
    
    if ($(this).parent().hasClass('has-children')) {
        if ($(this).siblings('ul:visible').length > 0) $(this).siblings('ul').slideUp();
        else {
            $(this).parents('li').siblings('li').find('ul:visible').slideUp();
            $(this).siblings('ul').slideDown();
        }
    }
    if ($(this).attr('href') === '#') {
        e.preventDefault();
        return false;
    }
});

/*--
    Header Search
------------------------*/
var searchToggle = $('.search-toggle');
var searchContainer = $('.header-search-container');

searchToggle.on('click', function(){
    
    if( !$(this).hasClass('active') ) {
        $(this).addClass('active').find('i').removeClass('icofont-search-alt-1').addClass('icofont-close');
        searchContainer.slideDown();
    } else {
        $(this).removeClass('active').find('i').removeClass('icofont-close').addClass('icofont-search-alt-1');
        searchContainer.slideUp();
    }
    
});
/*--
    Header Cart
------------------------*/
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

$(document).on('click','.open-wish-list', function(e){
    e.preventDefault();
    $('body .cart-overlay').addClass('visible');
    musiccat.addClass('open');
});
closefa.on('click', function(e){
    e.preventDefault();
    $('.cart-overlay').removeClass('visible');
    musiccat.removeClass('open');
     minifaWrap.removeClass('open');
});
    


  


function getwishlist(){


      $.ajax({
            method: 'POST',
            url: '/products/postwishDetails/details',
            data: null,
            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
            dataType: 'json',
            success: function(res){
                console.log(res);

                if(res.success == false && res.status == 'error'){
                    alert('Error processing your request, please try later');
                }

                if(res.success == true){
                    $("#mini_cart_div_holder2").empty().html(res.cart);
                    $(".mini-cart-wrap2").mCustomScrollbar();
                                    $(".mini-cart-products").mCustomScrollbar();
                }

                return false;
            },
            error: function(e){
                console.log(e.responseText);
                return false;
            }
        });/* end of ajax */
}


getwishlist();

$(document).on('click','.header-cart', function(e){
       $("#mini_cart_div_holder").empty();
        e.preventDefault();
        $.ajax({
            method: 'POST',
            url: '/products/add-to-cart/details',
            data: null,
            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
            dataType: 'json',
            success: function(res){
                console.log(res);

                if(res.success == false && res.status == 'error'){
                    alert('Error processing your request, please try later');
                }

                if(res.success == true){
                    $("#mini_cart_div_holder").empty().html(res.cart);
                    $(".mini-cart-wrap2").mCustomScrollbar();
                                    $(".mini-cart-products").mCustomScrollbar();
                }

                return false;
            },
            error: function(e){
                console.log(e.responseText);
                return false;
            }
        });/* end of ajax */
    $('.cart-overlay').addClass('visible');
    minifaWrap.addClass('open');
});



closefa.on('click', function(e){
    e.preventDefault();
    $('.cart-overlay').removeClass('visible');
    minifaWrap.removeClass('open');
});
    


$(document).ready(function(){
  
});


/*--
    Hero Slider

    
/*----- 
	Team Slider
--------------------------------*/

    
/*----- 
	Testimonial Slider

/*--
	Brand Slider
-----------------------------------*/
 
/*--
    Product View Mode
------------------------*/
$(document).on('click','.product-view-mode a', function(e){
    e.preventDefault();
    var shopProductWrap = $('.shop-product-wrap');
    var viewMode = $(this).data('target');
    
    $('.product-view-mode a').removeClass('active');
    $(this).addClass('active');
    shopProductWrap.removeClass('grid list').addClass(viewMode);
})

/*--
    Product Tab Filter Select Style For Mobile
--------------------------------------------*/
function productTabFilterInit() {
    var productTabFilter = $('.product-tab-filter');
    
    productTabFilter.each(function(){
        var filterToggle = $(this).find('.product-tab-filter-toggle');
        var filterToggleCatElement = $(this).find('.product-tab-filter-toggle span');
        var filterList = $(this).find('.product-tab-list');
        var filterListItem = $(this).find('.product-tab-list li a');
        
        var filterCatText =  filterList.find('.active').text();
        
        filterToggleCatElement.text(filterCatText);
        
        /*-- Open Filter Tab List --*/
        filterToggle.on('click', function(){
            $(this).siblings('.product-tab-list').slideToggle();
        });
        
        /*-- Close Filter Tab List On Select a Category --*/
        filterListItem.on('click', function(){
            var screenSize = windows.width();
            var filterCatText= $(this).text();
            filterToggleCatElement.text(filterCatText);
            
            if ( screenSize < 767) {
                filterList.slideToggle();
            }
            
        });
        
    });
    
}
productTabFilterInit();
    
/*-- Product Tab Filter Show Hide For Mobile & Desktop --*/
function productTabFilterScreen() {
    var screenSize = windows.width();
    var filterList = $('.product-tab-list');
    
    if ( screenSize < 767) {
        filterList.slideUp();
    } else {
        filterList.slideDown();
    }
}
productTabFilterScreen();
productTabFilterInit();

windows.resize(productTabFilterScreen);
    
/*--     Add To Cart Animation ------------------------*/
$(document).on('click', '.add-to-cart', function(e){     
    e.preventDefault();
    var clicked = $(this),
    product_id = clicked.attr('data-product'),
    page = clicked.attr('data-page'),
    product_quantity = 0;

    if(page == "products"){
        product_quantity = 1;
    } else{
        product_quantity = $("#product_quantity").val();
    }

    if(product_quantity > 10){
        alert("You're exceeding maximum no.of quantity");
        return false;
    }

    var attributeId = '';

    if($('.color-size').val() != ''){
        attributeId = $('.color-size').val();
    }

    $.ajax({
        method: 'POST',
        url: '/products/add-to-cart',
        data: {product_id:product_id, product_quantity:product_quantity,attributeId:attributeId},
        headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
        dataType: 'json',
        success: function(res){
            console.log(res);

            if(res.success == false){
                alert(res.error);
            }

            if(res.success == true){
                $("#header-cart").html('<i class="ti-shopping-cart"></i><span class="number">'+res.count+'</span>');
                
                if(res.status == "added"){
                    clicked.removeClass('added').addClass('added').find('i').addClass('ti-check').removeClass('ti-shopping-cart').siblings('span').text('added'); 
                }else{
                     clicked.removeClass('added').addClass('add-to-cart').find('i').addClass('ti-check').removeClass('ti-shopping-cart').siblings('span').text('ADD TO CART'); 
                }
                
            }
        },
        error: function(e){
            console.log(e.responseText);
        }
    });/* end of ajax */

    // if($(this).hasClass('added')){
    //    $(this).removeClass('added').find('i').removeClass('ti-check').addClass('ti-shopping-cart').siblings('span').text('add to cart'); 
    // } else{
    //     $(this).addClass('added').find('i').addClass('ti-check').removeClass('ti-shopping-cart').siblings('span').text('added'); 
    // }

    return false;
});


$(document).on('click', '.add-to-cartfromwishlist', function(e){     
    e.preventDefault();
    var clicked = $(this),
    product_id = clicked.attr('data-product');
    var product_quantity = 1;
  
    var attributeId = '';

    $.ajax({
        method: 'POST',
        url: '/products/add-to-cartfromwishlist',
        data: {product_id:product_id, product_quantity:product_quantity,attributeId:attributeId},
        headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
        dataType: 'json',
        success: function(res){
            console.log(res);

            if(res.success == false){
                alert(res.error);
            }
            if(res.success == true){
                $("#header-cart").html('<i class="ti-shopping-cart"></i><span class="number">'+res.count+'</span>');
                
                if(res.status == "added"){
                    clicked.removeClass('added').addClass('added').find('i').addClass('ti-check').removeClass('ti-shopping-cart').siblings('span').text('added'); 
                }else{
                     alertify.success('Already in wishlist');
                     clicked.removeClass('added').addClass('add-to-cart').find('i').addClass('ti-check').removeClass('ti-shopping-cart').siblings('span').text('ADD TO CART'); 
                }   
            }
        },
        error: function(e){
            console.log(e.responseText);
        }
    });/* end of ajax */

    // if($(this).hasClass('added')){
    //    $(this).removeClass('added').find('i').removeClass('ti-check').addClass('ti-shopping-cart').siblings('span').text('add to cart'); 
    // } else{
    //     $(this).addClass('added').find('i').addClass('ti-check').removeClass('ti-shopping-cart').siblings('span').text('added'); 
    // }

    return false;
});



/*--
	Wishlist
------------------------*/
$(document).on('click', '.wishlist-compare a', function(e){
    var clicked = $(this),
    product_id = clicked.attr('data-product'),
    page = clicked.attr('data-page');

    if(page = "products"){
        var product_quantity = 1;
    } else{
        var product_quantity = $("#product_quantity").val();
    }


    $.ajax({
        method: 'POST',
        url: '/products/wishlist',
        data: {product_id:product_id, product_quantity:product_quantity},
        headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
        dataType: 'json',
        success: function(res){
            console.log(res);

            if(res.success == true){
                $("#header-wishlist").html('<i class="ti-heart"></i> <span class="number">'+res.count+'</span>');
                  alertify.success(res.message);

                if(res.status == "success"){
                    $(this).addClass('added');
                     getwishlist();
                }

                if(res.status == "removed"){
                    $(this).removeClass('added');
                }
            }

            if(res.success == false && res.status == "login"){
                  alertify.success(res.message);
            }

            if(res.success == false && res.status == "error"){
                  alertify.success(res.message);
            }

            return false;
        },
        error: function(e){
            console.log(e.responseText);
            return false;
        }
    });/* end of ajax */   
});

$(document).on('click', '.remove_cart_product', function(){
    var clicked = $(this);
    var product_id = $(this).attr('data-product');
    var page = $(this).attr("data-page");

  //   alertify.confirm("Are you sure to remove this product from cart?",
  // function(){
  //   alertify.success('Ok');
  //   var ensure = true;
  // },
  // function(){
  //   alertify.error('Cancel');
  //   var ensure = false;
  // });

   

    var ensure = true;

   // var ensure = confirm("Are you sure to remove this product from cart?");

    if(ensure == true){
        $.ajax({
            method: 'POST',
            url: '/products/cart/remove',
            data: {product_id:product_id},
            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
            dataType: 'json',
            success: function(res){
                console.log(res);

                if(res.success == true){
                    $("#header-cart").html('<i class="ti-shopping-cart"></i><span class="number">'+res.count+'</span>');
                     alertify.success('Removed Successfully');
                    if(page == "header"){
                        clicked.closest("li").remove();
                    } else{
                        clicked.closest("tr").remove();
                    }
                }

                return false;
            },
            error: function(e){
                console.log(e.responseText);
                return false;
            }
        });/* end of ajax */  
    }
});

$(document).on('click', '.remove_wish_product', function(){
    var clicked = $(this);
    var product_id = $(this).attr('data-product');
    var page = $(this).attr("data-page");

    var ensure = true;

    if(ensure == true){
        $.ajax({
            method: 'POST',
            url: '/products/wishlist',
            data: {product_id:product_id},
            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
            dataType: 'json',
            success: function(res){
                console.log(res);

                if(res.success == true){
                    $("#header-wishlist").html('<i class="ti-shopping-cart"></i><span class="number">'+res.count+'</span>');
                      alertify.success('Removed Successfully');
                    if(page == "header"){
                        clicked.closest("li").remove();
                    } else{
                        clicked.closest("tr").remove();
                    }
                }

                return false;
            },
            error: function(e){
                console.log(e.responseText);
                return false;
            }
        });/* end of ajax */  
    }
});








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
                url: 'http://chat.ashanaturals.in/api/usermessage/update',
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
        url: 'http://chat.ashanaturals.in/api/imageupload',
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
                  
                }else{

              

                }

                socket.emit('username',temp); 

              });

              $('#chat_second_screen').click(function(e) {
                    hideChat(2);
              });

              $('#fab_send').click(function(){
                //userSend('hai');
              });


    
})(jQuery);	


