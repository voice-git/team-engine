// スライダー
$('.engine07main_slider').slick({
    dots: false,
    prevArrow: '<img src="https://team-engine.jp/wp-content/themes/mitani_recruit/assets_mitani/img/slider_prev.svg" width="44" height="30" class="slide-arrow prev-arrow">',
    nextArrow: '<img src="https://team-engine.jp/wp-content/themes/mitani_recruit/assets_mitani/img/slider_next.svg" width="44" height="30" class="slide-arrow next-arrow">',
    pauseOnFocus: false,
    pauseOnHover: false,
    pauseOnDotsHover: false,
    slidesToShow: 1,
    asNavFor: ".engine07sub_slider",
/*
    responsive: [
	    {
		    breakpoint: 559,
		    settings: {
			    slidesToShow: 1,
			    centerMode: true,
			    centerPadding: '40px',
		    }
	    }
	]
*/
});
$('.engine07sub_slider').slick({
    dots: false,
    pauseOnFocus: false,
    pauseOnHover: false,
    pauseOnDotsHover: false,
    slidesToShow: 4,
    asNavFor: ".engine07main_slider",
    focusOnSelect: true,
});



// メニュー表示
$(function() {
	var windowWidth = $(window).width();
	var windowLuxy = 559;
	if (windowLuxy <= windowWidth) {
	    $(window).scroll(function (){
	        if ($(this).scrollTop() > 700) {
	            $('.header_pc').fadeIn();
	            $('.fixbtn_pagetop').fadeIn();
	            $('.fixbtn_movie').fadeIn();
	        } else {
	            $('.header_pc').fadeOut();
	            $('.fixbtn_pagetop').fadeOut();
	            $('.fixbtn_movie').fadeOut();
	        }
	    });
	}else{
	    $(window).scroll(function () {
	        if ($(this).scrollTop() > 700) {
	            $('.header_sp').fadeIn();
	            $('.fixbtn_movie').fadeIn();
	        } else {
	            $('.header_sp').fadeOut();
	            $('.fixbtn_movie').fadeOut();
	        }
	    });
		// スライダー
		function loopTopSlider(){
			var sliderSize = $('.sp_moveimg_inner').width();
			$('.sp_moveimg_wrap').css({'width':sliderSize*2+'px'});
			$('.sp_moveimg_wrap').find('ul').clone().appendTo('.sp_moveimg_wrap');
		};
		function loopsliderPosition(){
			var sliderSize = $('.sp_moveimg_inner:first-of-type').width();
			$('.sp_moveimg_wrap').css({left:'0'});
			$('.sp_moveimg_wrap').stop().animate({left:'-'+(sliderSize)+'px'},20000,'linear');
			setTimeout(function(){
				loopsliderPosition();
			},20000);
		};
		$(function(){
			loopTopSlider();
			loopsliderPosition();
		});
	}
	
	$('.sp_menuwrap .linewrap').on('click', function() {
		$('.sp_menu').toggleClass('open');
		$('body').toggleClass('open')
		$('.fixbtn_movie').toggle();
	});
	$('.sp_menu .block,.sp_menu .headertel,.sp_menu .headercontact,.sp_menu .closewrap').on('click', function(){
		$('.sp_menu').removeClass('open');
		$('body').removeClass('open');
        $('.fixbtn_movie').fadeIn();
	});
});



//動画サイズ トップ
$(function(){
	var windowWidth = $(window).width();
	var windowLuxy = 559;
	if (windowLuxy <= windowWidth) {
		var window_width = window.innerWidth;
		var window_height = window.innerHeight;
		var v001width = window_width+100;
		var v001height = window_height+100;
		if(window_height < v001width*0.5625){
			var video_height = v001width*0.5625;
			var video_left = (window_width /2) - (v001width /2);
			var video_top = (window_height /2) - (video_height /2);
			$('#video,#video0').css('left', video_left);
			$('#video,#video0').css('top', video_top);
			$('#video,#video0').css('width', v001width);
			$('#video,#video0').css('height', video_height);
		}else{
			var video_left = (window_width /2) - (v001height*1.7778)/2;
			var video_top = (window_height /2) - (v001height /2);
			var video_width = v001height*1.7778;
			$('#video,#video0').css('left', video_left);
			$('#video,#video0').css('top', video_top);
			$('#video,#video0').css('width', video_width);
			$('#video,#video0').css('height', v001height);
		}

	}else{
/*
			var video_left = (window_width /2) - (v001height*1.7778)/2;
			var video_top = (window_height /2) - (v001height /2);
			var video_width = v001height*1.7778;
			$('#video,#video0').css('left', video_left);
			$('#video,#video0').css('top', video_top);
			$('#video,#video0').css('width', video_width);
			$('#video,#video0').css('height', v001height);
*/
	}
});
$(window).resize(function(){
	var windowWidth = $(window).width();
	var windowLuxy = 559;
	if (windowLuxy <= windowWidth) {
		var window_width = window.innerWidth;
		var window_height = window.innerHeight;
		var v001width = window_width+100;
		var v001height = window_height+100;
		if(window_height < v001width*0.5625){
			var video_height = v001width*0.5625;
			var video_left = (window_width /2) - (v001width /2);
			var video_top = (window_height /2) - (video_height /2);
			$('#video,#video0').css('left', video_left);
			$('#video,#video0').css('top', video_top);
			$('#video,#video0').css('width', v001width);
			$('#video,#video0').css('height', video_height);
		}else{
			var video_left = (window_width /2) - (v001height*1.7778)/2;
			var video_top = (window_height /2) - (v001height /2);
			var video_width = v001height*1.7778;
			$('#video,#video0').css('left', video_left);
			$('#video,#video0').css('top', video_top);
			$('#video,#video0').css('width', video_width);
			$('#video,#video0').css('height', v001height);
		}

	}else{
/*
			var video_left = (window_width /2) - (v001height*1.7778)/2;
			var video_top = (window_height /2) - (v001height /2);
			var video_width = v001height*1.7778;
			$('#video,#video0').css('left', video_left);
			$('#video,#video0').css('top', video_top);
			$('#video,#video0').css('width', video_width);
			$('#video,#video0').css('height', v001height);
*/
	}
});


//クッキー保持で動画スキップ
var visitsite = $.cookie('teamengine_visit');
$('.loading').hide();
if(visitsite == null){
	$('.loading').show();
	$.cookie('teamengine_visit', '1', { expires: 1 });
	// ローディングアニメーション
	var images = document.querySelectorAll('img');
	var imgCount = 0;
	var baseCount = 0;
	var gaugeMax = 60;
	var current;
	var v1 = document.getElementById("video");
	 
	// 画像の読み込み
	for (var i = 0; i < images.length; i++) {
	    var img = new Image(); 
	    // 画像読み込み完了したとき
	    img.onload = function() {
	        imgCount += 1;
	    }
	    // 画像読み込み失敗したとき
	    img.onerror = function() {
	        imgCount += 1;
	    }
	    img.src = images[i].src;
	};
	 
	// ローディング処理
	var nowLoading = setInterval(function() {
	    if(baseCount <= imgCount) {
	        current = Math.floor(baseCount / images.length * 100);
	        baseCount += 1;
	        if(baseCount == images.length) {
				v1.play();
		        $('.loading').fadeOut();
		        $('body').addClass('comp');
	        }
	    }
	}, 20);
}else{
	var v1 = document.getElementById("video");
	v1.play();
    $('body').addClass('comp');
}


// タブ切り替え
$(function(){
	$('.outline .tab').on('click', function() {
		$('.outline .tab').removeClass('active');
		$(this).addClass('active');
		if($(this).hasClass('highschool')){
			$('.outline .content').fadeOut();
			$('.outline .content').removeClass('active');
			$('.outline .highschool').fadeIn();
			$('.outline .highschool').addClass('active');
		}else if($(this).hasClass('college')){
			$('.outline .content').fadeOut();
			$('.outline .content').removeClass('active');
			$('.outline .college').fadeIn();
			$('.outline .college').addClass('active');
		}else if($(this).hasClass('fouryear')){
			$('.outline .content').fadeOut();
			$('.outline .content').removeClass('active');
			$('.outline .fouryear').fadeIn();
			$('.outline .fouryear').addClass('active');
		}else if($(this).hasClass('midcareer')){
			$('.outline .content').fadeOut();
			$('.outline .content').removeClass('active');
			$('.outline .midcareer').fadeIn();
			$('.outline .midcareer').addClass('active');
		}
	});
	$('.guide .tab').on('click', function() {
		$('.guide .tab').removeClass('active');
		$(this).addClass('active');
		if($(this).hasClass('highschool')){
			$('.guide .content').fadeOut();
			$('.guide .content').removeClass('active');
			$('.guide .highschool').fadeIn();
			$('.guide .highschool').addClass('active');
		}else if($(this).hasClass('college')){
			$('.guide .content').fadeOut();
			$('.guide .content').removeClass('active');
			$('.guide .college').fadeIn();
			$('.guide .college').addClass('active');
		}else if($(this).hasClass('fouryear')){
			$('.guide .content').fadeOut();
			$('.guide .content').removeClass('active');
			$('.guide .fouryear').fadeIn();
			$('.guide .fouryear').addClass('active');
		}else if($(this).hasClass('midcareer')){
			$('.guide .content').fadeOut();
			$('.guide .content').removeClass('active');
			$('.guide .midcareer').fadeIn();
			$('.guide .midcareer').addClass('active');
		}
	});
});


// スムーズスクロール
var scrollElm = (function() {
  if('scrollingElement' in document) {
    return document.scrollingElement;
  }
  if(navigator.userAgent.indexOf('WebKit') != -1) {
    return document.body;
  }
  return document.documentElement;
})();
 
$('a[href^="#"],area[href^="#"]').not('.noscroll').on('click', function() {
  var speed = 500;
  var easing = 'swing';
  var href= $(this).attr("href");
  $(scrollElm).animate({
    scrollTop: $(href == "#" ? 'html' : href).offset().top
  }, speed, easing);
  return false;
});