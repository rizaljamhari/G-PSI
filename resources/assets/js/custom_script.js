	window.onbeforeunload = function() {
		$.blockUI({message:  '<h4>Sila tunggu...</h4>',
		css: {border: 'none',
		padding: '1px',
		backgroundColor: '#000',
		'-webkit-border-radius': '5px',
		'-moz-border-radius': '5px',
		opacity: .5,
		'z-index': 99999,
		color: '#fff'},
		overlayCSS: { 'z-index': 99990 }
		});
	}

	$(document).bind("ajaxSend", function(){
		$.blockUI({message:  '<h4>Sila tunggu...</h4>',
		css: {border: 'none',
		padding: '1px',
		backgroundColor: '#000',
		'-webkit-border-radius': '5px',
		'-moz-border-radius': '5px',
		opacity: .5,
		'z-index': 99999,
		color: '#fff'},
		overlayCSS: { 'z-index': 99990 }
		});
	}).bind("ajaxComplete", function(){
		$.unblockUI();
	});


	$.fn.modal.Constructor.prototype.enforceFocus = function () {};

	$('.nav-link').click(function (event) {
	   event.preventDefault();
	   $('.main-page1').load($(this).attr('href'));
	});
	$('#ul_master li').click(function (event) {
	  var a = $(this).attr('id');
	  $("#"+a).addClass("active open");
	});
	$('#ul_sub li').click(function (event) {
	  $('.nav-item').removeClass("active open");
	  var a = $(this).attr('id');
	  $("#"+a).addClass("active open");
	});