

<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<meta name="keywords" content="@yield('keywords')">
	<meta name="description" content="@yield('description')"> 

	<title> @yield('title')</title>
	
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />

	<!--         <meta name="viewport" content="width=device-width, initial-scale=1"> -->
	<meta name="csrf-token" content="{!! csrf_token() !!}">
	<!-- Favicon -->
	<link rel="shortcut icon" type="image/png" href="/assets/images/mk-logo.png">
				<!-- CSS
					============================================ -->
					<!-- Icon Font CSS -->
					<link rel="stylesheet" href="/assets/css/icon-font.min.css">
					<!-- Plugins CSS -->
			
					<!-- Main Style CSS -->
					<link rel="stylesheet" href="/assets/css/style.css">
					<link rel="stylesheet" href="/assets/css/slider.css">
				
				<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

				
					<link rel="stylesheet" type="text/css" href="/assets/css/alertify.css">
					<link href="https://fonts.googleapis.com/css?family=Unica+One&display=swap" rel="stylesheet">
					<link rel="stylesheet" type="text/css" href="https://malihu.github.io/custom-scrollbar/jquery.mCustomScrollbar.min.css">
					<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/nprogress/0.2.0/nprogress.css">
						
					<style type="text/css">


						input[type='text'],
						input[type='number'],
						textarea {
						  font-size: 16px;
						}


						body{
							cursor:pointer;
						}

					#nprogress .spinner{
						display:none;
					}	

#nprogress .bar {
    background: #C19A6B;
    position: fixed;
    z-index: 111111;
    top: 0;
    left: 0;
    width: 100%;
    height: 2px;
}
						.flex-center {
  width: 100%;
/*  min-height: 50vh;
  background: #000;*/
  display: -webkit-box;
  display: -webkit-flex;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-pack: center;
  -webkit-justify-content: center;
  -ms-flex-pack: center;
  justify-content: center;
  -webkit-box-align: center;
  -webkit-align-items: center;
  -ms-flex-align: center;
  align-items: center;
}






						.icon-3d {
						  padding: 10px;
						  -webkit-animation: icon3d 200ms 10;
						  animation: icon3d 200ms 10;
						  color: #C19A6B;
						  font-size:23px;
						}
						.icon-3d:hover {
						  -webkit-animation: icon3d 200ms infinite;
						  animation: icon3d 200ms infinite;
						}

						@keyframes icon3d {
						  0% {
						    text-shadow: 5px 4px #f44336, -5px -6px #2196f3;
						  }
						  25% {
						    text-shadow: -5px -6px #f44336, 5px 4px #2196f3;
						  }
						  50% {
						    text-shadow: 5px -4px #f44336, -8px 4px #2196f3;
						  }
						  75% {
						    text-shadow: -8px -4px #f44336, -5px -4px #2196f3;
						  }
						  100% {
						    text-shadow: -5px 0 #f44336, 5px -4px #2196f3;
						  }
						}






						.chat_conversion {

						}

						.chat_converse {
							position: relative;
							background: #fff;
							margin: 6px 0 0px 0;
							height: 75%;
							min-height: 0;
							font-size: 12px;
							line-height: 18px;
							overflow-y: auto;
							width: 100%;
							float: right;
							padding-bottom: 100px;
						}
						.chat_converse2{
							height: 100%;
							max-height: 800px
						}
						.chat_list {
							opacity: 0;
							visibility: hidden;
							height: 0;
						}

						.chat_list .chat_list_item {
							opacity: 0;
							visibility: hidden;
						}

						.chat .chat_converse .chat_msg_item {
							position: relative;
							margin: 8px 0 15px 0;
							padding: 8px 10px;
							max-width: 60%;
							display: block;
							word-wrap: break-word;
							border-radius: 3px;
							-webkit-animation: zoomIn .5s cubic-bezier(.42, 0, .58, 1);
							animation: zoomIn .5s cubic-bezier(.42, 0, .58, 1);
							clear: both;
							z-index: 999;
						}




						#floating-button{
							width: 55px;
							height: 55px;
							border-radius: 50%;
							background: #000000;
							position: fixed;
							bottom: 8px;
							left: 10px;
							cursor: pointer;
							box-shadow: 0px 2px 5px #666;
						}
						.plus-chat img{
							width:45px;
						} 

						.closecharticon{
							background: #000000;
							border-radius: 50%;
							cursor: pointer;
							box-shadow: 0px 2px 5px #666;
						}

						.plus-chat{
							color: white !important;
							position: absolute;
							top: 12px;
							display: block;
							bottom: 0;
							left: 0;
							right: 0;
							text-align: center;
							padding: 0;
							margin: 0;
							line-height: 55px;
							font-size: 29px;
							font-family: 'Roboto';
							font-weight: 300;
							/*  animation: plus-out 0.3s;*/
							transition: all 0.3s;
						}

						#container-floating{
							position: fixed;
							width: 70px;
							height: 70px;
							bottom: 30px;
							left: : 30px;
							z-index: 50;
						}

						#container-floating:hover{
							height: 400px;
							width: 90px;
							padding: 30px;
						}


						.edit{
							position: absolute;
							top: 0;
							display: block;
							bottom: 0;
							left: 0;
							display: block;
							right: 0;
							padding: 0;
							opacity: 0;
							margin: auto;
							line-height: 65px;
							transform: rotateZ(-70deg);
							transition: all 0.3s;
							animation: edit-out 0.3s;
						}

						#container-floating .edit{
							animation: edit-in 0.2s;
							animation-delay: 0.1s;
							animation-fill-mode: forwards;
						}

						@keyframes edit-in{
							from {opacity: 0; transform: rotateZ(-70deg);}
							to {opacity: 1; transform: rotateZ(0deg);}
						}

						@keyframes edit-out{
							from {opacity: 1; transform: rotateZ(0deg);}
							to {opacity: 0; transform: rotateZ(-70deg);}
						}

						@keyframes plus-in{
							from {opacity: 1; transform: rotateZ(0deg);}
							to {opacity: 0; transform: rotateZ(180deg);}
						}

						@keyframes plus-out{
							from {opacity: 0; transform: rotateZ(180deg);}
							to {opacity: 1; transform: rotateZ(0deg);}
						}

						.nds{
							width: 40px;
							height: 40px;
							border-radius: 50%;
							position: fixed;
							z-index: 300;
							transform:  scale(0);
							cursor: pointer;
						}

						.nd1{
							background: #d3a411;
							right: 40px;
							bottom: 120px;
							animation-delay: 0.2s;
							animation: bounce-out-nds 0.3s linear;
							animation-fill-mode:  forwards;
						}

						.nd3{
							background: #3c80f6;
							left: 20px;
							bottom: 77px;
							animation-delay: 0.15s;
							animation: bounce-out-nds 0.15s linear;
							animation-fill-mode:  forwards;
						}

						.nd4{
							left: 20px;
							bottom: 137px;
							animation-delay: 0.1s;
							animation: bounce-out-nds 0.1s linear;
							animation-fill-mode:  forwards;
						}

						.nd5{
							background-image: url('https://lh3.googleusercontent.com/-X-aQXHatDQY/Uy86XLOyEdI/AAAAAAAAAF0/TBEZvkCnLVE/w140-h140-p/fb3a11ae-1fb4-4c31-b2b9-bf0cfa835c27');
							background-size: 100%;
							left: 40px;
							bottom: 300px;
							animation-delay: 0.08s;
							animation: bounce-out-nds 0.1s linear;
							animation-fill-mode:  forwards;
						}

						@keyframes bounce-nds{
							from {opacity: 0;}
							to {opacity: 1; transform: scale(1);}
						}

						@keyframes bounce-out-nds{
							from {opacity: 1; transform: scale(1);}
							to {opacity: 0; transform: scale(0);}
						}

						#container-floating .nds{
							
							animation: bounce-nds 0.1s linear;
							animation-fill-mode:  forwards;
						}

						#container-floating:hover .nd3{
							animation-delay: 0.08s;
						}
						#container-floating:hover .nd4{
							animation-delay: 0.15s;
						}
						#container-floating:hover .nd5{
							animation-delay: 0.2s;
						}

						.letter{
							font-size: 23px;
							font-family: 'Roboto';
							color: white;
							position: absolute;
							left: 0;
							right: 0;
							margin: 0;
							top: 0;
							bottom: 0;
							text-align: center;
							line-height: 40px;
						}

						.reminder{
							position: absolute;
							left: 0;
							right: 0;
							margin: auto;
							top: 0;
							bottom: 0;
							line-height: 40px;
						}

						.profile{
							border-radius: 50%;
							width: 40px;
							position: absolute;
							top: 0;
							bottom: 0;
							margin: auto;
							right: 20px;
						}





						.fabs {
							bottom: 0px;
							position: fixed;
							margin: 1em;
							left: -5px;
							display:none;
							z-index: 998;
							
						}

						.fabchat {
							display: block;
							width: 56px;
							height: 56px;
							border-radius: 50%;
							text-align: center;
							color: #f0f0f0;
							margin: 25px auto 0;
							box-shadow: 0 0 4px rgba(0, 0, 0, .14), 0 4px 8px rgba(0, 0, 0, .28);
							cursor: pointer;
							-webkit-transition: all .1s ease-out;
							transition: all .1s ease-out;
							position: relative;
							z-index: 998;
							overflow: hidden;
							background: #000000;
						}

						.fabchat > i {
							font-size: 2em;
							line-height: 55px;
							-webkit-transition: all .2s ease-out;
							-webkit-transition: all .2s ease-in-out;
							transition: all .2s ease-in-out;
						}

						.fabchat:not(:last-child) {
							width: 0;
							height: 0;
							margin: 20px auto 0;
							opacity: 0;
							visibility: hidden;
							line-height: 40px;
						}

						.fabchat:not(:last-child) > i {
							font-size: 1.4em;
							line-height: 40px;
						}

						.fabchat:not(:last-child).is-visible {
							width: 40px;
							height: 40px;
							margin: 15px auto 10;
							opacity: 1;
							visibility: visible;
						}
						.fabchat:nth-last-child(1) {
							-webkit-transition-delay: 25ms;
							transition-delay: 25ms;
						}

						.fabchat:not(:last-child):nth-last-child(2) {
							-webkit-transition-delay: 20ms;
							transition-delay: 20ms;
						}

						.fabchat:not(:last-child):nth-last-child(3) {
							-webkit-transition-delay: 40ms;
							transition-delay: 40ms;
						}

						.fabchat:not(:last-child):nth-last-child(4) {
							-webkit-transition-delay: 60ms;
							transition-delay: 60ms;
						}

						.fabchat:not(:last-child):nth-last-child(5) {
							-webkit-transition-delay: 80ms;
							transition-delay: 80ms;
						}

						.fabchat(:last-child):active,
						.fabchat(:last-child):focus,
						.fabchat(:last-child):hover {
							box-shadow: 0 0 6px rgba(0, 0, 0, .16), 0 6px 12px rgba(0, 0, 0, .32);
						}
						/*Chatbox*/

						.chat {
							position: fixed;
							left: 20px;
							bottom: 20px;
							width: 400px;
							font-size: 12px;
							line-height: 22px;
							font-family: 'Roboto';
							font-weight: 500;
							-webkit-font-smoothing: antialiased;
							font-smoothing: antialiased;
							opacity: 0;
							box-shadow: 1px 1px 100px 2px rgba(0, 0, 0, 0.22);
							border-radius: 10px;
							-webkit-transition: all .2s ease-out;
							-webkit-transition: all .2s ease-in-out;
							transition: all .2s ease-in-out;
						}

						.chat_fullscreen {
							position: fixed;
							right: 0px;
							bottom: 0px;
							top: 0px;
						}
						.chat_header {
							/* margin: 10px; */
							font-size: 13px;
							font-family: 'Roboto';
							font-weight: 500;
							color: #f3f3f3;
							height: 55px;
							background: #000000;
							border-top-left-radius: 10px;
							border-top-right-radius: 10px;
							padding-top: 8px;
						}
						.chat_header2 {
							/* margin: 10px; */
							border-top-left-radius: 0px;
							border-top-right-radius: 0px;
						}
						.chat_header .span {
							float:right;
						}

						.chat_fullscreen_loader {
							display: none;
							float: right;
							cursor: pointer;
							/* margin: 10px; */
							font-size: 20px;
							opacity: 0.5;
							/* padding: 20px; */
							margin: -10px 10px;
						}

						.chat.is-visible {
							opacity: 1;
							-webkit-animation: zoomIn .2s cubic-bezier(.42, 0, .58, 1);
							animation: zoomIn .2s cubic-bezier(.42, 0, .58, 1);
						}
						.is-hide{
							opacity: 0
						}

						.chat_option {
							float: left;
							font-size: 15px;
							list-style: none;
							position: relative;
							height: 100%;
							width: 100%;
							text-align: relative;
							margin-right: 10px;
							letter-spacing: 0.5px;
							font-weight: 400
						}


						.chat_option img {
							border-radius: 50%;
							width: 55px;
							float: left;
							margin: -30px 20px 10px 20px;
							border: 4px solid rgba(0, 0, 0, 0.21);
						}

						.change_img img{
							width: 35px;
							margin: 0px 20px 0px 20px;
						}
						.chat_option .agent {
							font-size: 12px;
							font-weight: 300;
						}
						.chat_option .online{
							opacity: 0.4;
							font-size: 11px;
							font-weight: 300;
						}
						.chat_color {
							display: block;
							width: 20px;
							height: 20px;
							border-radius: 50%;
							margin: 10px;
							float: left;
						}


						.chat_body {
							background: #fff;
							width: 100%;

							display: inline-block;
							text-align: center;
							overflow-y: auto;

						}
						#chat_body{
							height: 450px;
						}
						.chat_logins p,.chat_body li, p, a{
							-webkit-animation: zoomIn .5s cubic-bezier(.42, 0, .58, 1);
							animation: zoomIn .5s cubic-bezier(.42, 0, .58, 1);
						}
						.chat_body p {
							padding: 10px;
							color: #888;
							font-weight: 300;
							font-size: 15px;font-family: "lato", sans-serif;
						}
						.chat_body a {
							width: 10%;
							text-align: center;
							border: none;
							box-shadow: none;
							line-height: 40px;
							font-size: 15px;
						}

						.chat_field {
							position: relative;
							margin: 5px 0 5px 0;
							width: 50%;
							font-family: 'Roboto';
							font-size: 12px;
							line-height: 30px;
							font-weight: 500;
							color: #4b4b4b;
							-webkit-font-smoothing: antialiased;
							font-smoothing: antialiased;
							border: none;
							outline: none;
							display: inline-block;
						}

						.chat_field.chat_message {
							height: 30px;
							resize: none;
							font-size: 13px;
							font-weight: 400;
							background :transparent;
						}
						.chat_category{
							text-align: left;
						}

						.chat_category{
							margin: 20px;
							background: rgba(0, 0, 0, 0.03);
							padding: 10px;
						}

						.chat_category ul li{
							width: 80%;
							height: 30px;
							background: #fff;
							padding: 10px;
							box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
							margin-bottom: 10px;
							border-radius: 3px;
							border: 1px solid #e0e0e0;
							font-size: 13px;
							cursor: pointer;
							line-height: 30px;
							color: #888;
							text-align: center;
						}

						.chat_category li:hover{
							background: #83c76d;
							color: #fff;
						}
						.chat_category li.active{
							background: #83c76d;
							color: #fff;
						}


						.tags{
							margin: 20px;
							bottom: 0px;
							display: block;
							width: 120%
						}
						.tags li{
							padding: 5px 10px;
							border-radius: 40px;
							border: 1px solid rgb(3, 117, 208);
							margin: 5px;
							display: inline-block;
							color: rgb(3, 117, 208);
							cursor: pointer;

						}
						.fab_fields {
							width: 100%;
							display: inline-block;
							text-align: center;
							background: #fff;
							border-top: 1px solid #eee;
							border-bottom-right-radius: 10px;
							border-bottom-left-radius: 10px;

						}
						.fab_fields2 {
							bottom: 0px;
							position: absolute;
							border-bottom-right-radius: 0px;
							border-bottom-left-radius: 0px;
							z-index: 999;
						}

						.fab_fields a {
							display: inline-block;
							text-align: center;
						}

						#fab_camera {
							float: left;
							background: rgba(0, 0, 0, 0);
						}

						#fab_send {
							float: right;
							background: rgba(0, 0, 0, 0);
						}

						.fab_fields .fab {
							width: 35px;
							height: 35px;
							box-shadow: none;
							margin: 5px;
						}

						.fab_fields .fab>i {
							font-size: 1.6em;
							line-height: 35px;
							color: #bbb;
						}
						.fab_fields .fab>i:hover {
							color: #000000;
						}
						.chat_conversion {

						}

						.chat_converse {
							position: relative;
							background: #fff;
							margin: 6px 0 0px 0;
							height: 75%;
							min-height: 0;
							font-size: 12px;
							line-height: 18px;
							overflow-y: auto;
							width: 100%;
							float: right;
							padding-bottom: 100px;
						}
						.chat_converse2{
							height: 100%;
							max-height: 800px
						}
						.chat_list {
							opacity: 0;
							visibility: hidden;
							height: 0;
						}

						.chat_list .chat_list_item {
							opacity: 0;
							visibility: hidden;
						}

						.chat .chat_converse .chat_msg_item {
							position: relative;
							margin: 8px 0 15px 0;
							padding: 8px 10px;
							max-width: 60%;
							display: block;
							word-wrap: break-word;
							border-radius: 3px;
							-webkit-animation: zoomIn .5s cubic-bezier(.42, 0, .58, 1);
							animation: zoomIn .5s cubic-bezier(.42, 0, .58, 1);
							clear: both;
							z-index: 999;
						}
						.status {
							margin: 45px -50px 0 0;
							float: right;
							font-size: 11px;
							opacity: 0.3;
						}
						.status2 {
							margin: -10px 20px 0 0;
							float: right;
							display: block;
							font-size: 11px;
							opacity: 0.3;
						}
						.chat .chat_converse .chat_msg_item .chat_avatar {
							position: absolute;
							top: 0;
						}

						.chat .chat_converse .chat_msg_item.chat_msg_item_admin .chat_avatar {
							left: -52px;
							background: rgba(0, 0, 0, 0.03);
						}

						.chat .chat_converse .chat_msg_item.chat_msg_item_user .chat_avatar {
							right: -52px;
							background: rgba(0, 0, 0, 0.6);
						}

						.chat .chat_converse .chat_msg_item .chat_avatar, .chat_avatar img{
							width: 40px;
							/*  height: 40px;*/
							text-align: center;
							border-radius: 50%;
						}

						.chat .chat_converse .chat_msg_item.chat_msg_item_admin {
							margin-left: 60px;
							float: left;
							background: rgba(0, 0, 0, 0.03);
							color: #666;
						}

						.chat .chat_converse .chat_msg_item.chat_msg_item_user {
							margin-right: 63px;
							float: right;
							background: #000000;
							color: #eceff1;
						}

						.chat .chat_converse .chat_msg_item.chat_msg_item_admin:before {
							content: '';
							position: absolute;
							top: 15px;
							left: -12px;
							z-index: 998;
							border: 6px solid transparent;
							border-right-color: rgba(255, 255, 255, .4);
						}

						.chat_form .get-notified label{
							color: #077ad6;
							font-weight: 600;
							font-size: 11px;
						}

						.chat_form .message_form {
							margin: 10px 0 0 0;
						}
						.chat_form .message_form input{
							margin: 5px 0 5px 0;
							border: 1px solid #e0e0e0;
						}
						.chat_form .message_form textarea{
							margin: 5px 0 5px 0;
							border: 1px solid #e0e0e0;
							position: relative;
							width: 90%;
							font-family: 'Roboto';
							font-size: 12px;
							line-height: 20px;
							font-weight: 500;
							color: #4b4b4b;
							-webkit-font-smoothing: antialiased;
							font-smoothing: antialiased;
							outline: none;
							background: #fff;
							display: inline-block;
							resize: none;
							padding: 5px;
							border-radius: 3px;
						}
						.chat_form .message_form button{
							margin: 5px 0 5px 0;
							border: 1px solid #e0e0e0;
							position: relative;
							width: 95%;
							font-family: 'Roboto';
							font-size: 12px;
							line-height: 20px;
							font-weight: 500;
							color: #fff;
							-webkit-font-smoothing: antialiased;
							font-smoothing: antialiased;
							outline: none;
							background: #fff;
							display: inline-block;
							resize: none;
							padding: 5px;
							border-radius: 3px;
							background: #83c76d;
							cursor: pointer;
						}
						strong.chat_time {
							padding: 0 1px 1px 0;
							font-weight: 500;
							font-size: 8px;
							display: block;
						}

						/*Chatbox scrollbar*/

/*::-webkit-scrollbar {
	width: 6px;
}

::-webkit-scrollbar-track {
	border-radius: 0;
}

::-webkit-scrollbar-thumb {
	margin: 2px;
	border-radius: 10px;
	background: #cc984e;
	}*/
	/*Element state*/

	.is-active {
		-webkit-transform: rotate(180deg);
		transform: rotate(180deg);
		-webkit-transition: all 1s ease-in-out;
		transition: all 1s ease-in-out;
	}

	.is-float {
		box-shadow: 0 0 6px rgba(0, 0, 0, .16), 0 6px 12px rgba(0, 0, 0, .32);
	}

	.is-loading {
		display: block;
		-webkit-animation: load 1s cubic-bezier(0, .99, 1, 0.6) infinite;
		animation: load 1s cubic-bezier(0, .99, 1, 0.6) infinite;
	}
	/*Animation*/

	@-webkit-keyframes zoomIn {
		0% {
			-webkit-transform: scale(0);
			transform: scale(0);
			opacity: 0.0;
		}
		100% {
			-webkit-transform: scale(1);
			transform: scale(1);
			opacity: 1;
		}
	}

	@keyframes zoomIn {
		0% {
			-webkit-transform: scale(0);
			transform: scale(0);
			opacity: 0.0;
		}
		100% {
			-webkit-transform: scale(1);
			transform: scale(1);
			opacity: 1;
		}
	}

	@-webkit-keyframes load {
		0% {
			-webkit-transform: scale(0);
			transform: scale(0);
			opacity: 0.0;
		}
		50% {
			-webkit-transform: scale(1.5);
			transform: scale(1.5);
			opacity: 1;
		}
		100% {
			-webkit-transform: scale(1);
			transform: scale(1);
			opacity: 0;
		}
	}

	@keyframes load {
		0% {
			-webkit-transform: scale(0);
			transform: scale(0);
			opacity: 0.0;
		}
		50% {
			-webkit-transform: scale(1.5);
			transform: scale(1.5);
			opacity: 1;
		}
		100% {
			-webkit-transform: scale(1);
			transform: scale(1);
			opacity: 0;
		}
	}
	/* SMARTPHONES PORTRAIT */

	@media only screen and (min-width: 300px) {
		.chat {
			width: 100%;
			height: 100%;
			left: 0;
			position: relative;
		}

		.fabs{
			height:75%
		}
		.chat_body{
			height:80%;
		}
	}
	@media (max-width: 300px) {
		.chat {
			width: 100%;
			height: 100%;
			left: 0;
			position: relative;
		}

		.fabs{
			height:75%
		}
		.chat_body{
			height:80%;
		}
		.chat_option{
			font-size: 12px;
		}
		.close-chatwindow{
			font-size: 24px;
			right: 22px;
		}
	}
	/* SMARTPHONES LANDSCAPE */

	@media only screen and (min-width: 480px) {
		.chat {
			width: 100%;
			height: 100%;
			left: 0;
			position: relative;
		}
		.chat_field {
			width: 65%;
		}

		.fabs{
			height:75%
		}
		.chat_body{
			height:80%;
		}
	}
	/* TABLETS PORTRAIT */

	@media only screen and (min-width: 768px) {
		.chat {
			width: 300px;
		}
		.chat_field {
			width: 65%;
		}
	}
	/* TABLET LANDSCAPE / DESKTOP */

	@media only screen and (min-width: 1024px) {
		.chat {
			width: 300px;
		}
		.chat_field {
			width: 65%;
		}
	}
	/*Color Options*/



	.blue .fab {
		background: #000000;
		color: #fff;
		border-radius:60%;
	}



	.blue .chat {
		background: #000000;
		color: #999;
	}


	/* Ripple */

	.ink {
		display: block;
		position: absolute;
		background: rgba(38, 50, 56, 0.4);
		border-radius: 100%;
		-moz-transform: scale(0);
		-ms-transform: scale(0);
		webkit-transform: scale(0);
		-webkit-transform: scale(0);
		transform: scale(0);
	}
	/*animation effect*/

	.ink.animate {
		-webkit-animation: ripple 0.5s ease-in-out;
		animation: ripple 0.5s ease-in-out;
	}

	@-webkit-keyframes ripple {
		/*scale the element to 250% to safely cover the entire link and fade it out*/
		
		100% {
			opacity: 0;
			-moz-transform: scale(5);
			-ms-transform: scale(5);
			webkit-transform: scale(5);
			-webkit-transform: scale(5);
			transform: scale(5);
		}
	}

	@keyframes ripple {
		/*scale the element to 250% to safely cover the entire link and fade it out*/
		
		100% {
			opacity: 0;
			-moz-transform: scale(5);
			-ms-transform: scale(5);
			webkit-transform: scale(5);
			-webkit-transform: scale(5);
			transform: scale(5);
		}
	}
	::-webkit-input-placeholder { /* Chrome */
		color: #bbb;
	}
	:-ms-input-placeholder { /* IE 10+ */
		color: #bbb;
	}
	::-moz-placeholder { /* Firefox 19+ */
		color: #bbb;
	}
	:-moz-placeholder { /* Firefox 4 - 18 */
		color: #bbb;
	}

	.chat-email{
		margin-top: 40px;
		height: 30px;
		resize: none;
		font-size: 13px;
		font-weight: 400;
		background: transparent;
		border: none;
		background: #0000000a;
		padding: 14px;
		border-radius: 4px;
	}

	.chat-name{
		margin-top: 10px;
		height: 30px;
		resize: none;
		font-size: 13px;
		font-weight: 400;
		background: transparent;
		border: none;
		background: #0000000a;
		padding: 14px;
		border-radius: 4px;
	}

	.close-chatwindow{
		position: absolute;
		font-size: 34px;
		right: 9px
	}

	canvas {
    padding: 17px;
        max-width: 100%;
  /*  position: absolute;
    left: 4px;
    top: 37px;*/
}

	a.disabled {
		pointer-events: none;
		cursor: default;
	}
	.fab > i {
		font-size: 2em;
		line-height: 55px;
		-webkit-transition: all .2s ease-out;
		-moz-transition: all .2s ease-out;
		-o-transition: all .2s ease-out;
		transition: all .2s ease-in-out;
	}

	.fab:not(:last-child) {
		width: 0;
		height: 0;
		margin: 20px auto 0;
		opacity: 0;
		visibility: hidden;
	}

	.fab:not(:last-child) > i {
		font-size: 1.4em;
		line-height: 40px;
	}

	.fab:not(:last-child).is-visible {
		width: 40px;
		height: 40px;
		margin: 15px auto 10;
		opacity: 1;
		visibility: visible;
	}

	.fab:nth-last-child(1) {
		-webkit-transition-delay: 25ms;
		-moz-transition-delay: 25ms;
		-o-transition-delay: 25ms;
		transition-delay: 25ms;
	}

	.fab:not(:last-child):nth-last-child(2) {
		-webkit-transition-delay: 20ms;
		-moz-transition-delay: 20ms;
		-o-transition-delay: 20ms;
		transition-delay: 20ms;
	}

	.fab:not(:last-child):nth-last-child(3) {
		-webkit-transition-delay: 40ms;
		-moz-transition-delay: 40ms;
		-o-transition-delay: 40ms;
		transition-delay: 40ms;
	}

	.fab:not(:last-child):nth-last-child(4) {
		-webkit-transition-delay: 60ms;
		-moz-transition-delay: 60ms;
		-o-transition-delay: 60ms;
		transition-delay: 60ms;
	}

	.fab:not(:last-child):nth-last-child(5) {
		-webkit-transition-delay: 80ms;
		-moz-transition-delay: 80ms;
		-o-transition-delay: 80ms;
		transition-delay: 80ms;
	}

	.fab:not(:last-child):active,
	.fab:not(:last-child):focus,
	.fab:not(:last-child):hover {
		box-shadow: 0 0 6px rgba(0, 0, 0, .16), 0 6px 12px rgba(0, 0, 0, .32);
	}

	@media (max-width: 767px) {


		#npTitle{
			width: 154px;
			float: left;
		}
		#tracks{
			float: left;
			margin-top:1px;
			margin-right: 6px;
		}
		#npTitle{
			float: right;    font-size: 11px;
		}
		.title-mp3{
			left: 10%;
		}

		.plyr--audio .plyr__controls {
			background: black !important;
			padding-top: 4px !important;
			margin-bottom: 4px;
		}

		.plyr--audio .plyr__controls {
			width: 98%;
			margin-left: 10px;
		}

	}

	 a.disabled {
  pointer-events: none;
  cursor: default;
}




	.overlayss {
		height: 100%;
		width: 100%;
		display: none;
		position: fixed;
		z-index: 111111;
		top: 0;
		left: 0;
		background-color: rgb(0,0,0);
		background-color: rgba(0,0,0, 0.9);
	}

	.overlayss-content {
		position: relative;
		top: 46%;
		width: 80%;
		text-align: center;
		margin-top: 30px;
		margin: auto;
	}

	.overlayss .closebtn {
		position: absolute;
		top: 20px;
		right: 45px;
		font-size: 60px;
		cursor: pointer;
		color: white;
	}

	.overlayss .closebtn:hover {
		color: #ccc;
	}

	.overlayss input[type=text] {
		padding: 15px;
		font-size: 17px;
		border: none;
		float: left;
		width: 80%;
		background: white;
		height: 47px;
	}

	.overlayss input[type=text]:hover {
		background: #f1f1f1;
	}

	.overlayss button {
		float: left;
		width: 20%;
		padding: 15px;
		background: #3e3d3d80;
		font-size: 17px;
		border: none;
		cursor: pointer;
	}

	.overlayss button:hover {
		background: #13131313;
	}

	.mCSB_inside>.mCSB_container{
		margin-right:1px;
	}
	.mCSB_scrollTools {
		position: absolute;
		width: 7px;
		height: auto;
		left: auto;
		top: 0;
		right: 0;
		bottom: 0;
		opacity: 01;
		filter: "alpha(opacity=75)";
		-ms-filter: "alpha(opacity=75)";
	}

	.tooltip2 {
		display: inline;
		position: relative;
	}
	.tooltip2:hover:after{
		display: -webkit-flex;
		/* display: flex; */
		-webkit-justify-content: center;
		/* justify-content: center; */
		background: #444;
		border-radius: 8px;
		bottom: -52px;
		left: -57px;
		position: absolute;
		color: #fff;
		content: attr(title);
		/* margin: 6px auto 0; */
		font-size: 15px;
		padding: 3px;
		width: 130px;
	}





	.dropbtn {
		background-color: #4CAF50;
		color: white;
		padding: 16px;
		font-size: 16px;
		border: none;
	}

	.dropdown {
		position: relative;
		display: inline-block;
	}

	.dropdown-content {
		display: none;
		position: absolute;
		background-color: #f1f1f1;
		min-width: 160px;
		box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
		z-index: 1;
	}

	.dropdown-content a {
		color: black;
		padding: 12px 16px;
		text-decoration: none;
		display: block;
	}

	.dropdown-content a:hover {background-color: #ddd;}

	.dropdown:hover .dropdown-content {display: block;}

	.dropdown:hover .dropbtn {background-color: #3e8e41;}







.select-spin{
    position: absolute;
    width: 38px;
    left: 158px;
}


	.the_wheel
{
    background-image: url('/assets/images/wheel_back.png');
    background-position: center;
    background-size: 100%;
    position: relative;
    width: 100%;
    padding:33px;
    background-repeat: no-repeat;
}

@media only screen and (max-width: 480px) {
.the_wheel{
	    margin-left: 0px !important;
}

	canvas {
   		 padding: 10px;
        max-width: 100%;
    }
}
/*.tooltip2:hover:before{
	border: solid;
	border-color: #444 transparent;
	border-width: 12px 6px 0 6px;
	content: "";
	left: 45%;
	bottom: 30px;
	position: absolute;
}
*/

.font-14{
	font-size: 14px !important;
    font-weight: 100 !important;
    line-height: 21px !important;
    padding-bottom: 0px;
    margin-bottom: 0px !important;
}

.footer .text-center{
	display:none;
}
</style>
</head>

<!-- <div class="loading" style="display:none">Loading&#8230;</div> -->




<div class="fabs">
	<div class="chat">
		<div class="chat_header">
			<div class="chat_option">
				<div class="header_img">
					<img src="https://www.shutterstock.com/image-vector/man-icon-flat-vector-260nw-1371568223.jpg"/>
				</div>
				<span id="chat_head">Mkelly - Support</span> 
				<i class="fa fa-window-close close-chatwindow" aria-hidden="true"></i>

				
			</div>
		</div>
		<div class="chat_body chat_logins">
			<div>
				<label>Email</label>
				<input type="email" ng-mdoel="form.email" placeholder="Enter Your email" class="chat-email" name="chatmail">
				
			</div>
			

			<label>Name</label>
			<input type="text" ng-mdoel="form.username" placeholder="Enter Your User name" class="chat-name" name="chaname">

			<br>
			<a id="chat_first_screen" ng-click="send()" class="fab openchatscreen"><i class="fas fa-arrow-right"></i></a>
			<p>Welcome to Mkelly, we are happy to assist you with anything from 10AM to 6PM every day.</p>
			
		</div>
		<div id="chat_converse" class="chat_conversion chat_converse">
			
			<span class="chat_msg_item chat_msg_item_admin">
				<div class="chat_avatar">
					<img src="https://www.shutterstock.com/image-vector/man-icon-flat-vector-260nw-1371568223.jpg"/>
				</div>
				Hey there! Any question?
			</span>
			
		</div>
		<input type="file" name="files[]" id="my-file" class="myfile" style="visibility:hidden;display:none;">

		<div class="fab_fields">
			<a id="fab_camera" class="fab"><i class="fas fa-camera"></i></a>
			<a id="fab_send" class="fab"><i class="fas fa-paper-plane"></i></a>
			<textarea id="chatSend" name="chat_message" placeholder="Send a message" class="chat_field chat_message"></textarea>

			 <input type="button" class="btn" id="audioInput" value="click and hold to record" />
		</div>
	</div>
	
</div>

<div id="container-floating">
	<div class="nd4 nds" style="display:none"><img class="reminder">
		<p class="letter"> 
			<a href="https://api.whatsapp.com/send?phone=+353208920230208998&text=Hi%20how%20can%20i%20help%20you&source=&data=" target="_blank"><img src="/images/MK-Whatsapp-icon.png" style="width: 100%"></a>
		</p>
	</div>
	<div class="nd3 nds openchartwindow"  style="display:none"><img class="reminder" src="/images/MK-Live-Chat-Icon.png" style="width: 100%"/></div>
	<div id="floating-button" class="openchart">
		<p class="plus-chat opencharticon"> <i class='fa fa-comments'></i></p>
		<p class="plus-chat closecharticon" style="display:none"> <i class='fa fa-close'></i>
			
		</p>

		
	</div>

</div>


<body class="theme-dark">
	<div id="myOverlay" class="overlayss">
		<span class="closebtn" onclick="closeSearch()" title="Close Overlay">×</span>
		<div class="overlayss-content">
			<form action="/search" class="mainsearch">
				<input type="text" class="productname" required="" placeholder="search.." name="productname">
				<button type="submit" class="search-btn-p"><i class="fa fa-search"></i></button>
			</form>
		</div>
	</div>
	<input type="file" name="files[]" id="my-file" class="myfile" style="visibility:hidden;display:none;">
	<div class="column add-bottom">
		<div id="mainwrap">
			<div id="audiowrap">
				<div id="audio0">
					<div class="title-mp3">
						<span id="npTitle"></span>
						<div id="tracks" >
							<a id="btnPrev"><i class="fa fa-backward" aria-hidden="true"></i>
							</a><a id="btnNext"><i class="fa fa-forward" aria-hidden="true"></i></i>
							</a>
						</div>
					</div>
					<audio id="audio1" preload controls>Your browser does not support HTML5 Audio! 😢</audio>
				</div>
			</div>
		</div>
	</div>
		 <!--    <button class="chatbox-open button">
				<i class="fa fa-comment fa-2x" aria-hidden="true" style="margin-left:-2px;"></i>
				</button>
				<button class="chatbox-close button">
				<i class="fa fa-close fa-2x" aria-hidden="true"></i>
			</button> -->
			<section class="chatbox-popup">
				<header class="chatbox-popup__header">
					<aside style="flex:3">
						<i class="fa fa-user-circle fa-2x chatbox-popup__avatar" aria-hidden="true"></i>
					</aside>
					<aside style="flex:8">
						<h1>Ramesh </h1>
						(Online)
					</aside>
					<aside style="flex:1">
						<button class="chatbox-maximize button"><i class="fa fa-window-maximize" aria-hidden="true"></i></button>
					</aside>
				</header>
				<main class="chatbox-popup__main">
					We make it simple and seamless for<br> bussiness and people to talk to each<br> other. Ask us anything.
				</main>
				<footer class="chatbox-popup__footer">
					<aside style="flex:1;color:#888;text-align:center;">
						<i class="fa fa-camera" aria-hidden="true"></i>
					</aside>
					<aside style="flex:10">
						<textarea type="text" placeholder="Type your message here..." autofocus></textarea>
					</aside>
					<aside style="flex:1;color:#888;text-align:center;">
						<i class="fa fa-paper-plane" aria-hidden="true"></i>
					</aside>
				</footer>
			</section>
			<section class="chatbox-panel">
				<header class="chatbox-panel__header">
					<aside style="flex:3">
						<i class="fa fa-user-circle fa-2x chatbox-popup__avatar" aria-hidden="true"></i>
					</aside>
					<aside style="flex:6">
						<h1>Sussanah Austin</h1>
						Agent (Online)
					</aside>
					<aside style="flex:3;text-align:right;">
						<button class="chatbox-minimize button"><i class="fa fa-window-restore" aria-hidden="true"></i></button>
						<button class="chatbox-panel-close  button"><i class="fa fa-close" aria-hidden="true"></i></button>
					</aside>
				</header>
				<main class="chatbox-panel__main" style="flex:1">
					We make it simple and seamless for<br> bussiness and people to talk to each<br> other. Ask us anything.
				</main>
				<footer class="chatbox-panel__footer">
					<aside style="flex:1;color:#888;text-align:center;">
						<i class="fa fa-camera" aria-hidden="true"></i>
					</aside>
					<aside style="flex:10">
						<textarea type="text" placeholder="Type your message here..." autofocus></textarea>
					</aside>
					<aside style="flex:1;color:#888;text-align:center;">
						<i class="fa fa-paper-plane" aria-hidden="true"></i>
					</aside>
				</footer>
			</section>

</div>
																			</div>
																		</div>
																	</div>
																	<!-- Footer Widget End -->
																</div>
															</div>
														</div>

											
								

								</body>

								<script type="text/javascript" src="{{asset('jquery.min.js')}}"></script>
								<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/AlertifyJS/1.13.1/alertify.js"></script>
							 <script type="text/javascript"  src="https://cdnjs.cloudflare.com/ajax/libs/js-cookie/2.2.1/js.cookie.js"></script>

								<script src="/js/jquery.ui.widget.js"></script> 
								<script src="/js/jquery.fileupload.js"></script>
							

								<script src="/assets/js/main.js"></script>
								


								<script type="text/javascript">



            function validateEmail($email) {
              var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
              return emailReg.test( $email );
            }
            

           
            



									var delay = alertify.get('notifier','delay');
									alertify.set('notifier','delay', 3);

									 

								


				

			@yield('javascript');



			
	

	




	$(document).on("click", "body", function (e){
		
		if(e.target.className  == 'menuproductname'){
			return false;
		}
		console.log(e.target.className);
		if(e.target.className != ''  ){

			if(e.target.className  == 'has-submenu'){
				return false;
			}

			if(e.target.className  == 'search-input'){
				return false;
			}
			if (e.target.parentElement.className != 'navbar-toggler') {

				if ($('.zeynep-overlay').css('display') == 'block')
				{
					zeynep.close();
					$('body').css("overflow-y", "scroll");
      
				}

			}
		}

	});





	toggleFab();

//define chat color
if (typeof(Storage) !== "undefined") {
	if (localStorage.getItem('fab-color') === null) {
		localStorage.setItem("fab-color", "blue");
	}
	$('.fabs').addClass(localStorage.getItem("fab-color"));
} else {
	$('.fabs').addClass("blue");
}



//Toggle chat and links
function toggleFab() {
	$('.prime').toggleClass('zmdi-plus');
	$('.prime').toggleClass('zmdi-close');
	$('.prime').toggleClass('is-active');
	$('#prime').toggleClass('is-float');
	$('.chat').toggleClass('is-visible');
	$('.fab').toggleClass('is-visible');
	
}

//User msg


//Admin msg


//Send input using enter and send key
$('#chatSend').bind("enterChat", function(e) {
	userSend($('#chatSend').val());
	//adminSend('How may I help you.');
});
$('#fab_send').bind("enterChat", function(e) {
	userSend($('#chatSend').val());
	//adminSend('How may I help you.');
});
$('#chatSend').keypress(function(event) {
	if (event.keyCode === 13) {
		event.preventDefault();
		if (jQuery.trim($('#chatSend').val()) !== '') {
			$(this).trigger("enterChat");
		}
	}
});

$('#fab_send').click(function(e) {
	if (jQuery.trim($('#chatSend').val()) !== '') {
		$(this).trigger("enterChat");
	}
});

//Listen user voice
$('#fab_listen').click(function() {
	var recognition = new webkitSpeechRecognition();
	recognition.onresult = function(event) {
		userSend(event.results[0][0].transcript);
	}
	recognition.start();
});

// Color options
$(".chat_color").click(function(e) {
	$('.fabs').removeClass(localStorage.getItem("fab-color"));
	$('.fabs').addClass($(this).attr('color'));
	localStorage.setItem("fab-color", $(this).attr('color'));
});

$('.chat_option').click(function(e) {
	$(this).toggleClass('is-dropped');
});

//Loader effect
function loadBeat(beat) {
	beat ? $('.chat_loader').addClass('is-loading') : $('.chat_loader').removeClass('is-loading');
}

// Ripple effect
var target, ink, d, x, y;
$(".fab").click(function(e) {
	target = $(this);
	//create .ink element if it doesn't exist
	if (target.find(".ink").length == 0)
		target.prepend("<span class='ink'></span>");

	ink = target.find(".ink");
	//incase of quick double clicks stop the previous animation
	ink.removeClass("animate");

	//set size of .ink
	if (!ink.height() && !ink.width()) {
		//use parent's width or height whichever is larger for the diameter to make a circle which can cover the entire element.
		d = Math.max(target.outerWidth(), target.outerHeight());
		ink.css({
			height: d,
			width: d
		});
	}

	//get click coordinates
	//logic = click coordinates relative to page - parent's position relative to page - half of self height/width to make it controllable from the center;
	x = e.pageX - target.offset().left - ink.width() / 2;
	y = e.pageY - target.offset().top - ink.height() / 2;

	//set the position and add class .animate
	ink.css({
		top: y + 'px',
		left: x + 'px'
	}).addClass("animate");
});

//Cookies handler
function createCookie(name, value, days) {
	var expires;

	if (days) {
		var date = new Date();
		date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
		expires = "; expires=" + date.toGMTString();
	} else {
		expires = "";
	}
	document.cookie = encodeURIComponent(name) + "=" + encodeURIComponent(value) + expires + "; path=/";
}

function readCookie(name) {
	var nameEQ = encodeURIComponent(name) + "=";
	var ca = document.cookie.split(';');
	for (var i = 0; i < ca.length; i++) {
		var c = ca[i];
		while (c.charAt(0) === ' ') c = c.substring(1, c.length);
		if (c.indexOf(nameEQ) === 0) return decodeURIComponent(c.substring(nameEQ.length, c.length));
	}
	return null;
}

function eraseCookie(name) {
	createCookie(name, "", -1);
}

//User login
function logUser() {
	hideChat(true);
	$('#chat_send_email').click(function(e) {
		var email = $('#chat_log_email').val();
		if (jQuery.trim(email) !== '' && validateEmail(email)) {
			$('.chat_login_alert').html('');
			loadBeat(true);
			createCookie('fab_chat_email', email, 100);
			if (checkEmail(email)) {
				//email exist and get and set username in session
				hideChat(false);
			} else {
				setTimeout(createUsername, 3000);
			}
		} else {
			$('.chat_login_alert').html('Invalid email.');
		}
	});
}

function createUsername() {
	loadBeat(false);
	$('#chat_log_email').val('');
	$('#chat_send_email').children('i').removeClass('zmdi-email').addClass('zmdi-account');
	$('#chat_log_email').attr('placeholder', 'Username');
	$('#chat_send_email').attr('id', 'chat_send_username');
	$('#chat_log_email').attr('id', 'chat_log_username');
	$('#chat_send_username').click(function(e) {
		var username = $('#chat_log_username').val();
		if (jQuery.trim(username) !== '') {
			loadBeat(true);
			if (checkUsername(username)) {
				//username is taken
				$('.chat_login_alert').html('Username is taken.');
			} else {
				//save username in DB and session
				createCookie('fab_chat_username', username, 100);
				hideChat(false);
			}
		} else {
			$('.chat_login_alert').html('Please provide username.');
		}
	});
}

function hideChat(hide) {
	if (hide) {
		$('.chat_converse').css('display', 'none');
		$('.fab_field').css('display', 'none');
	} else {
		$('#chat_head').html(readCookie('fab_chat_username'));
		// Help
		$('#fab_help').click(function(){userSend('Help!');});
		$('.chat_login').css('display', 'none');
		$('.chat_converse').css('display', 'block');
		$('.fab_field').css('display', 'inline-block');
	}
}

function checkEmail(email) {
	//check if email exist in DB
	return false;
}

function checkUsername(username) {
	//check if username exist in DB
	return false;
}

function validateEmail(email) {
	var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
	if (!emailReg.test(email)) {
		return false;
	} else {
		return true;
	}
}

if (readCookie('fab_chat_username') === null || readCookie('fab_chat_email') === null) {
	logUser();
} else {
	hideChat(false);
}








	takee = 20;
    skip = 10;





   

	document.getElementById("myOverlay").style.display = "none";



	var acc = document.querySelectorAll(".accordion a");
	</script>
	<script type="text/javascript">
		$('#mainwrap').hide()
		$(document).ready(function (e) {
			$('.search-panel .dropdown-menu').find('a').click(function (e) {
				e.preventDefault();
				var param = $(this).attr("href").replace("#", "");
				var concept = $(this).text();
				$('.search-panel span#search_concept').text(concept);
				$('.input-group #search_param').val(param);
			});
		});
		
		
						// $('#musicwave').click(function (e) {
						//     e.preventDefault();
						
						//     $('#mainwrap').fadeIn()
						//     $(this).addClass('musicwave');
						// });
						$(document).on('click', '#musicwave', function (){
							 // $(this).addClass('musicwave');
							 
							 
							 if($(this).hasClass('musicwave')){
							 	$(this).removeClass('musicwave');
							 	audio.pause();
							 	$('#mainwrap').fadeOut();
							 }else{
							 	$(this).addClass('musicwave');
							 	playTrack(1)

							 	setTimeout(function(){
							 		
							 	},2000)
							 	
							 	$('#mainwrap').fadeIn();
							 }
							}), function() { 
							
							
						};
						function playmusic(){
							if($(this).hasClass('musicwave')){
								$(this).removeClass('musicwave');
								audio.pause();
								$('#mainwrap').fadeOut();
							}else{
								$(this).addClass('musicwave');
								
								audio.play();
								$('#mainwrap').fadeIn();
							}
						}
						
						
						
						
						function slider(){
							var app = new Vue({
								el: '#app',
								data: {
									currentSlide: 0,
									isPreviousSlide: true,
									isFirstLoad: true,
									slides: [{
										headlineFirstLine: "Interior Design",
										headlineSecondLine: " All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary",
										sublineFirstLine: "Nihil sub sole",
										sublineSecondLine: "novum",
										bgImg: "img/33.jpg",
										des: ' All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary',
										rectImg: "https://i.postimg.cc/vTW0XkvM/slide-rect0.jpg"
									},
									{
										headlineFirstLine: "Hand Picked",
										headlineSecondLine: "All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary",
										sublineFirstLine: "Il n'y a rien de neuf sous",
										sublineSecondLine: "le soleil",
										bgImg: "img/44.jpg",
										des: ' All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary',
										rectImg: "https://i.postimg.cc/ryWZ8R2b/slide-rect1.jpg"
									},
									{
										headlineFirstLine: "Elegant Design",
										headlineSecondLine: "All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary",
										sublineFirstLine: "Τίποτα καινούργιο κάτω από",
										sublineSecondLine: "τον ήλιο",
										bgImg: "img/55.jpg",
										des: ' All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary',
										rectImg: "https://i.postimg.cc/3JFLGMRF/slide-rect2.jpg"
									}
									]
								},
								mounted: function () {
									var productRotatorSlide = $('body.wrapper');
									var startX = 0;
									var endX = 0;
									
									 // productRotatorSlide.addEventListener("touchstart", (event) => startX = event.touches[0].pageX);
									 
									 // productRotatorSlide.addEventListener("touchmove", (event) => endX = event.touches[0].pageX);
									 
										// productRotatorSlide.addEventListener("touchend", function (event) {
										//     var threshold = startX - endX;
										
										//     if (threshold < 150 && 0 < this.currentSlide) {
										//         this.currentSlide--;
										//     }
										//     if (threshold > -150 && this.currentSlide < this.slides.length - 1) {
										//         this.currentSlide++;
										//     }
										// }.bind(this));
									},
									methods: {
										updateSlide(index) {
											index < this.currentSlide ? this.isPreviousSlide = true : this.isPreviousSlide = false;
											this.currentSlide = index;
											this.isFirstLoad = false;
											move();
										}
									}
								});
						}
						
						
						
						
						
						setTimeout(function () {
							move();
						}, 2000);
						
						// setInterval(function(){
							
						//     for(var i=0; i<3;i++){
						//          setTimeout(function(){
						//             $('.pagination-item').next().click();
						//         },2000);
						
						//         if(i==2){
						//             i==0;
						//         }
						//     }
						// },2000);
						
		
						
						
						function move() {
							
							var width = 1;
								//$('.process').css('display','none');
								var id = setInterval(frame, 20);
								
								function frame() {
										//$('.process').css('display','block');
										
										if (width >= 100) {
											$('.process').css('width', '0%');
											clearInterval(id);
										} else {
											width++;
											elem = $('.process').css('width', width + '%');
												// elem.style.width = ; 
											}
										}
									}

									
									
									window.onscroll = function () {
										var currentScrollPos = window.pageYOffset;
										if (currentScrollPos > 200) {
											$('.navbar-toggler').show();
										} else {
											$('.navbar-toggler').hide()
										}
										
									}
									
									
					//  var chatbox = $.noConflict();
					
					$(".chatbox-open").click(function(){
						$(".chatbox-popup, .chatbox-close").fadeIn()
					});
					
					
					$(".chatbox-close").click(function(){
						$(".chatbox-popup, .chatbox-close").fadeOut()
					});
					
					
					$(".chatbox-maximize").click(function(){
						$(".chatbox-popup, .chatbox-open, .chatbox-close").fadeOut();
						$(".chatbox-panel").fadeIn();
						$(".chatbox-panel").css({ display: "flex" });
					});
					
					
					
					
					$(".chatbox-minimize").click(function() {
						$(".chatbox-panel").fadeOut();
						$(".chatbox-popup, .chatbox-open, .chatbox-close").fadeIn();
					});
					
					$(".chatbox-panel-close").click(function() {
						$(".chatbox-panel").fadeOut();
						$(".chatbox-open").fadeIn();
					});
					
					
					
					
					var supportsAudio = !!document.createElement('audio').canPlayType;
					
					
					
							
									var myid = null;
									$('.fab_fields').hide();


			
			if(Cookies.get('useremail')){
				// setTimeout(function(){
				// 	myid = socket.io.engine.id;
				// 	socket.emit('updatechatid',{chatid:myid,email:Cookies.get('useremail')}); 

				// 	$.ajax({
				// 		headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'), }, 
				// 		url: '/update/chatid',
				// 		data: {chatid:myid,email:Cookies.get('useremail')},
				// 		dataType: 'json',
				// 		type: 'POST',
				// 		async: false,
				// 		success: function(res){

				// 		}});

				// },1000);
				
				$('.fab_fields').show();
			}


			// var messagesdata = [];
			// socket.on('sendMsg',function(messages){
			// 	messagesdata.push({msg:messages.msg,name:messages.name,type:'admin'});
			// 	console.log(messages);
			// 	//adminSend(messages.msg);
				
			// });




			function userSendimg(url) {
				var text = {text:'',url:url};
				//socket.emit('sendtoadmin',{text:text,email:Cookies.get('useremail')});  
				$.ajax({
						url: 'http://chat.ashanaturals.in/api/usermessage/update',
					data: {file_type:'mp3',url:url,fromid:'',toid :myid,msg :text,name : 'user' ,type:'user',email:Cookies.get('useremail')},
					type: 'get',
					success: function(res){
						if(res.status == 'success'){
							console.log(res.history);
						}
						return false;
					}, error: function(e){
						
					}
				});
			} 


			function get() {

				$.ajax({
					url: 'http://chat.ashanaturals.in/api/get/messages',
					data: {email:Cookies.get('useremail')},
					type: 'get',
					crossDomain: true,
					success: function(res){
						if(res.status == 'success'){
							console.log(res.history);
							for(var i = 0; i<res.history.length; i++){
								adminSend(res.history[i]);
							}
						}
						return false;
					}, error: function(e){
						
					}
				});
			}

			setInterval(function(){ get(); }, 3500);



		






			/* Set the width of the side navigation to 250px */

			$('#fab_camera').click(function(){
				$('#my-file').click();
			});

			$('.user-wrap').hover(function(){
						// alert();
						$('.dropdown-content').css('display','block');
					},function(){
						$('.dropdown-content').css('display','none');
					});

			$('.content').click(function(){
				
				$('.dropdown-content').css('display','none');
			});
			
			
			function openNav() {
				
				if(screen.width<700){

					document.getElementById("mySidenav").style.width = "100%";
				}
				else{
					document.getElementById("mySidenav").style.width = "50%";
				}
			}


			

			
			

			function validateEmail($email) {
				var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
				return emailReg.test( $email );
			}
			

			
			console.log(Cookies.get('userchatdata'));
			if(Cookies.get('userchatdata')){

				hideChat(1); 
				getAllHistory();
				console.log(Cookies.get('userchatdata'));
			}else{
				hideChat(0);

			}


			

			

						

						

						function hideChat(hide) {
							switch (hide) {
								case 0:
								$('#chat_converse').css('display', 'none');
								$('#chat_body').css('display', 'none');
								$('#chat_form').css('display', 'none');
								$('.chat_logins').css('display', 'block');
								$('.chat_fullscreen_loader').css('display', 'none');
								$('#chat_fullscreen').css('display', 'none');
								break;
								case 1:
								$('#chat_converse').css('display', 'block');
								$('#chat_body').css('display', 'none');
								$('#chat_form').css('display', 'none');
								$('.chat_logins').css('display', 'none');
								$('.chat_fullscreen_loader').css('display', 'block');
								break;
								case 2:
								$('#chat_converse').css('display', 'none');
								$('#chat_body').css('display', 'block');
								$('#chat_form').css('display', 'none');
								$('.chat_logins').css('display', 'none');
								$('.chat_fullscreen_loader').css('display', 'block');
								break;
								case 3:
								$('#chat_converse').css('display', 'none');
								$('#chat_body').css('display', 'none');
								$('#chat_form').css('display', 'block');
								$('.chat_logins').css('display', 'none');
								$('.chat_fullscreen_loader').css('display', 'block');
								break;
								case 4:
								$('#chat_converse').css('display', 'none');
								$('#chat_body').css('display', 'none');
								$('#chat_form').css('display', 'none');
								$('.chat_logins').css('display', 'none');
								$('.chat_fullscreen_loader').css('display', 'block');
								$('#chat_fullscreen').css('display', 'block');
								break;
							}
						}



						











					</script>

					<script type="text/javascript">
						

						$(window).unload(function () {
							$.ajax({
								headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'), },
								url: '/user/disconnected',
								data: { email : Cookies.get('useremail') } ,
								dataType: 'json',
								type: 'POST',
								success: function(res){
									if(res.status == 'success'){
										
									}
									return false;
								}, error: function(e){
									
								}
							});
						});						

					</script>

					<script type="text/javascript">
						

					


						



						$(document).on('click','.saveprofile', function(e){
							e.preventDefault();


							$.ajax({
								headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'), },
								url: '/save/profile',
								data: $('.saveprofiledata').serialize(),
								type: 'POST',
								success: function(res){
									alert('Updated');
								}, error: function(e){
									console.log(e.responseText);
									return false;
								}
							});
						});

						$(document).on('click','.updatepassword', function(e){
							e.preventDefault();

							if($('.newpassword').val() == ''){
								alertify.success('Please enter your password ');
								return false;
							}

							$.ajax({
								headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'), },
								url: '/updatepassword',
								data: {newpassword:$('.newpassword').val()},
								type: 'POST',
								success: function(res){
									
									alertify.success('Your password is updated');
									$('.newpassword').val('');
									//alert('Updated');
								}, error: function(e){
									console.log(e.responseText);
									return false;
								}
							});
						});

						$(document).on('click','.forgerpassword', function(e){
							e.preventDefault();

							if($('.foremail').val() == ''){
								alertify.success('Please enter your email');
								return false;
							}

							$.ajax({
								headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'), },
								url: '/forgetpassword',
								data: {email:$('.foremail').val()},
								type: 'POST',
								success: function(res){
									$('.foremail').val('');
									if(res.status == true){
											alertify.success('Please check your email');
									}else{
										alertify.success('Your email is donts not exits try again other');
									}
									
									//alert('Updated');
								}, error: function(e){
									console.log(e.responseText);
									return false;
								}
							});
						});

						


						


				
							
					</script>

					<script type="text/javascript">
            // courtesy https://medium.com/@bryanjenningz/how-to-record-and-play-audio-in-javascript-faa1b2b3e49b
            const recordAudio = () => {
              return new Promise(async resolve => {
                const stream = await navigator.mediaDevices.getUserMedia({ audio: true });
                const mediaRecorder = new MediaRecorder(stream);
                const audioChunks = [];

                mediaRecorder.addEventListener("dataavailable", event => {
                  audioChunks.push(event.data);
                });

                const start = () => mediaRecorder.start();

                const stop = () =>
                  new Promise(resolve => {
                    mediaRecorder.addEventListener("stop", () => {
                      const audioBlob = new Blob(audioChunks);
                      const audioUrl = URL.createObjectURL(audioBlob);
                      const audio = new Audio(audioUrl);
                      const play = () => audio.play();
                      resolve({ audioBlob, audioUrl, play });
                    });

                    mediaRecorder.stop();
                  });

                resolve({ start, stop });
              });
            }

            /* simple timeout */
            const sleep = time => new Promise(resolve => setTimeout(resolve, time));

            /* init */
            (async () => {
                const btn = document.getElementById("audioInput");
                const recorder = await recordAudio();
                let audio; // filled in end cb

                console.log(btn);
                const recStart = e => {
                    recorder.start();
                    btn.initialValue = btn.value;
                    btn.value = "recording...again click to send";
                }
                const recEnd = async e => {
                    btn.value = btn.initialValue;
                    audio = await recorder.stop();
                  //  audio.play();
                    uploadAudio(audio.audioBlob);
                }

                const uploadAudio = a => {
                    if (a.size > (10 * Math.pow(1024, 2))) {
                        document.body.innerHTML += "Too big; could not upload";
                        return;
                    }
                    const f = new FormData();
                   // f.append("nonce", window.nonce);
                    f.append("files[]", a);

                 //    $.ajax({
					            //     url: 'http://chat.ashanaturals.in/api/imageupload',
					            //     data: f,
					           
					            //     type: 'get',
					            //     success: function(res){
					            //         console.log(res);
					            //         return false;
					            //     }, error: function(e){
					                   
					            //     }
					            // });



                    fetch("http://chat.ashanaturals.in/api/imageupload", {
                        method: "POST",
                        body: f
                    }).then(response => response.json())
										  .then(data => {
										     
										      
                    	 userSendimg(data.files[0].url);

                    	 var datas = data.files[0].url;


                    	  var text =  '<audio controls><source src="'+datas+'" type="audio/mpeg"></audio>';
              				 var img = '<i class="zmdi zmdi-account"></i>';
        							  $('#chat_converse').append('<div style="background:white!important" class="chat_msg_item chat_msg_item_user"><div class="chat_avatar"><img src="/images/default-user.jpg" />' + img + '</div>' + text + '</div>');
           
										 })

                }


                btn.addEventListener("mousedown", recStart);
                btn.addEventListener("touchstart", recStart);
                 btn.addEventListener("mouseup", recEnd);
              // window.addEventListener("mouseup", recEnd);
               // window.addEventListener("touchend", recEnd);
            })();
        </script>

				
					</html>