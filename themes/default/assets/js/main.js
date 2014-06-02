function adjustCarousels () {
  var width = $('.speakers .gradient').width();
  var iWidth = 140;
  var count = Math.floor(width/iWidth);
  for(var i = 0; i<bCarousels.length;i++) {
    bCarousels[i].slickSetOption('slidesToShow', count, false);
    bCarousels[i].slickSetOption('slidesToScroll', count, true);
    $(bCarousels[i]).css('width', (width-60)+'px');
  }
  for(var i = 0; i<cCarousels.length;i++) {
    cCarousels[i].slickSetOption('slidesToShow', count, false);
    cCarousels[i].slickSetOption('slidesToScroll', count, true);
    $(cCarousels[i]).css('width', (width-60)+'px');
  }
}

function Calculator() {
    if ( Calculator.i !== undefined )
        return Calculator.i;

   	Calculator.i = {
   		current: {
   			type: 0,
   			count: 1,
   			price: 0,
   		},
   		choiceTemplate: '<div class="row option oneChoice">'+
	                        '<div class="l">'+
	                            '<dl>'+
	                                '<dt>Категория:</dt>'+
	                                '<dd>{type}</dd>'+
	                                '<dt>Количество билетов:</dt>'+
	                                '<dd>{count}</dd>'+
	                                '<dt>Скидка:</dt>'+
	                                '<dd>{discount}</dd>'+
	                            '</dl>'+
	                        '</div>'+
	                        '<div class="r">'+
	                            '<p><del>{oldprice}</del></p>'+
	                            '<p><span>{newprice}</span></p>'+
	                        '</div>'+
	                    '</div>',
	    summaryTemplate: '<div class="row option summary">'+
                            '<div class="l">'+
                                'Общая стоимость<br> и экономия:'+
                            '</div>'+
                            '<div class="r">'+
                                '<p><del>{oldprice}</del></p>'+
                                '<p>{newprice}</p>'+
                            '</div>'+
                        '</div>',
   		hideInputs: function() {
   			$('.prices .inputs').fadeOut(200);
   		},
   		showInputs: function() {
   			Calculator.i.fillInputs();
   			if (! $('.inputs').is(":visible"))
   				$('.inputs').fadeIn(200);
   		},
   		fillInputs: function() {
   			Calculator.i.setCountText(Calculator.i.current.count);
   			$('#discount').val(Calculator.i.getDiscount(Calculator.i.current.count)+'%');
   			Calculator.i.calcOldPrice();
   			Calculator.i.calcPrice();
   		},
   		setCurrentType: function(type) {
   			Calculator.i.current.type = type;
   			Calculator.i.current.count = 1;
   			Calculator.i.current.price = terms[type].price;
   		},
   		getDiscount: function(count) {
   			var discount = 0;
   			for(var i = 0; i < discounts.length; i++) {
   				if (count >= discounts[i].min) {
   					discount = discounts[i].val;
   				}
   				else {
   					break;
   				}
   			}
   			return discount;
   		},
   		formatCurrency: function(price) {
   			return accounting.formatNumber(price, 0, " ");
   		},
   		setCountText: function(count) {
   			countSlider.slider('value', Calculator.i.current.count);
   			$('.ui-slider-handle').text(count);
   			$("#count").val(Calculator.i.current.count);
   		},
   		setCount: function(count) {
   			Calculator.i.current.count = count;
   			Calculator.i.setCountText(count);
   			Calculator.i.fillInputs();

   			Calculator.i.calcOldPrice();

   			Calculator.i.calcPrice();
   		},
   		calcOldPrice: function() {
   			$('#oldprice').val(Calculator.i.formatCurrency(Calculator.i.current.price*Calculator.i.current.count));
   		},
   		calcPrice: function(count) {
   			$('#newprice').val(Calculator.i.formatCurrency(Calculator.i.current.price*Calculator.i.current.count*(1-Calculator.i.getDiscount(Calculator.i.current.count)/100)));
   		},
   		addChoice: function() {
   			$('.total .row:first').after(Calculator.i.renderChoice());
   		},
   		calcTotal: function() {
   			$('.summary').remove();
   			$('.total .row:last').after(Calculator.i.renderTotal());
   		},
   		renderChoice: function() {
   			var rendered = Calculator.i.choiceTemplate;
   			rendered = rendered.replace('{type}', terms[Calculator.i.current.type].title);
   			rendered = rendered.replace('{count}', $('#count').val());
   			rendered = rendered.replace('{discount}', $('#discount').val());
   			rendered = rendered.replace('{oldprice}', $('#oldprice').val());
   			rendered = rendered.replace('{newprice}', $('#newprice').val());
   			return rendered;
   		},
   		renderTotal: function() {
   			var rendered = Calculator.i.summaryTemplate;
   			rendered = rendered.replace('{oldprice}', Calculator.i.formatCurrency(Calculator.i.getAllOldPrices()));
   			rendered = rendered.replace('{newprice}', Calculator.i.formatCurrency(Calculator.i.getAllPrices()));
   			return rendered;
   		},
   		getAllOldPrices: function() {
   			var allOldPrices = 0;
   			$('.oneChoice').each(function(){
				allOldPrices += parseInt($(this).find('del').text().replace(/\D/g, ''), 10);
   			});
   			return allOldPrices;
   		},
   		getAllPrices: function() {
   			var allPrices = 0;
   			$('.oneChoice').each(function(){
				allPrices += parseInt($(this).find('span').text().replace(/\D/g, ''), 10);
   			});
   			return allPrices;
   		},
   	}

   	$('#type').on('change', function(){
   		if ($(this).val() !== 'empty') {
   			calculator.setCurrentType($(this).val());
   			calculator.showInputs();
   		}
   		else {
   			calculator.hideInputs();
   		}
   	});

   	$("#count").on('change', function(){
   		if ($.isNumeric($(this).val())) {
   			calculator.setCount($(this).val());
   		}
   	});

   	$('#calc').on('click', function(){
   		calculator.addChoice();
   		calculator.calcTotal();
   		$('.total').fadeIn(200);
   		return false;
   	});

	return Calculator.i;
}


$(document).ready(function(){
	calculator = new Calculator();

	clock = $('.clock').FlipClock({
		countdown: true,
		language: 'russian',
	});

	$('nav a').hover(function() {
		var i = $(this).closest('li').index();
		if ($('nav li:eq('+(i-1)+')').length) {
			$('nav li:eq('+(i-1)+')').find('.dot').hide();
		}
		$('nav li:eq('+i+')').find('.dot').hide();
	}, function() {
		var i = $(this).closest('li').index();
		if ($('nav li:eq('+(i-1)+')').length) {
			$('nav li:eq('+(i-1)+')').find('.dot').show();
		}
		$('nav li:eq('+i+')').find('.dot').show();
	});

  bCarousels = [];
	$('.books .carousel').each(function(){
      bCarousels.push($(this).slick({
        infinite: true,
        slidesToShow: 3,
        slidesToScroll: 3,
      }));
  });

  cCarousels = [];
	$('.clients .carousel').each(function(){
      cCarousels.push($(this).slick({
        infinite: true,
        slidesToShow: 4,
        slidesToScroll: 4,
      }));
  });

	$('.participants .carousel').slick({
		  infinite: true,
      slidesToShow: 4,
      slidesToScroll: 4,
      dots: true,
    });

	$('.companies .carousel').slick({
		  infinite: true,
      slidesToShow: 4,
      slidesToScroll: 4,
    });

	$('section.history .carousel').slick({
  		infinite: true,
  		vertical: true,
    });


    // Create map
	var map = new GMaps({
	    div: '#map',
	    lat: 55.822033,
	    lng: 37.646229,
	    zoom: 16,
	    mapTypeId: google.maps.MapTypeId.ROADMAP,
	    scrollwheel: false,
	    styles: [{"featureType":"water","elementType":"geometry","stylers":[{"color":"#a2daf2"}]},{"featureType":"landscape.man_made","elementType":"geometry","stylers":[{"color":"#f7f1df"}]},{"featureType":"landscape.natural","elementType":"geometry","stylers":[{"color":"#d0e3b4"}]},{"featureType":"landscape.natural.terrain","elementType":"geometry","stylers":[{"visibility":"off"}]},{"featureType":"poi.park","elementType":"geometry","stylers":[{"color":"#bde6ab"}]},{"featureType":"poi","elementType":"labels","stylers":[{"visibility":"off"}]},{"featureType":"poi.medical","elementType":"geometry","stylers":[{"color":"#fbd3da"}]},{"featureType":"poi.business","stylers":[{"visibility":"off"}]},{"featureType":"road","elementType":"geometry.stroke","stylers":[{"visibility":"off"}]},{"featureType":"road","elementType":"labels","stylers":[{"visibility":"off"}]},{"featureType":"road.highway","elementType":"geometry.fill","stylers":[{"color":"#ffe15f"}]},{"featureType":"road.highway","elementType":"geometry.stroke","stylers":[{"color":"#efd151"}]},{"featureType":"road.arterial","elementType":"geometry.fill","stylers":[{"color":"#ffffff"}]},{"featureType":"road.local","elementType":"geometry.fill","stylers":[{"color":"black"}]},{"featureType":"transit.station.airport","elementType":"geometry.fill","stylers":[{"color":"#cfb2db"}]}],
	});

	// Create infoWindow
	var infoWindow = new google.maps.InfoWindow({
	    content: '<div class="map-content"><h3>г. Москва</h3><address>Проспект Мира 150, гостиница "Космос"</address><div class="text">В 1981 году Брайан Трейси создал «систему успеха», которая сначала называлась «Семинар Феникса». В 1985 году он выпустил перера</div></div>'
	});

	// Create marker
	var marker = map.addMarker({
	    lat: 55.821033,
	    lng: 37.646229,
	    infoWindow: infoWindow
	});

	// This opens the infoWindow
	infoWindow.open(map, marker);

	$('.form select').customSelect();
	countSlider = $('.form .slider').slider({
		min: 1,
		max: 100,
		value: 1,
		range: "min",
		slide: function( event, ui ) {
			//$(ui.handle).text(ui.value);
			calculator.setCount(ui.value);
		},
	});
	$('.form .slider .ui-slider-handle').text(1);

	$('body').on('click', '*[role="modal-trigger"]', function(){
		$.scrollTo($(this).offset().top-50, 500);
		$('.overlay').height($('body').height()).fadeIn(500);

		var modal = $($(this).data('modal'));
		if (typeof $(modal).data('left') !== 'undefined') {
			$(modal).css('right', 'auto');
			$(modal).css('left', ($(this).offset().left+$(modal).data('left'))+'px');
		}
		if (typeof $(modal).data('right') !== 'undefined') {
			$(modal).css('left', 'auto');
			var rt = ($(window).width() - ($(this).offset().left + $(this).outerWidth()));
			$(modal).css('right', (rt-$(modal).data('right'))+'px');
		}
		if (typeof $(modal).data('top') !== 'undefined') {
			$(modal).css('top', ($(this).offset().top+$(modal).data('top'))+'px');
		}
		if (typeof $(modal).data('bottom') !== 'undefined') {
			$(modal).css('top', ($(this).offset().top+$(this).outerHeight()-$(modal).data('bottom'))+'px');
		}

		$(modal).fadeIn(500);
		return false;
	});

	$("body").on('click', '.modal .close, .overlay', function(){
		$('.overlay').fadeOut(500);
		$('.modal').fadeOut(500);

		return false;
	});

	$("body").on('change', '.error', function(){
		$(this).removeClass('error');
	});

	$.localScroll({ offset:{ top: -100 }});

	$('.menu').sticky({topSpacing:0});

	$('#buy-trigger').on('click', function(){
		window.location.href = "http://tracyacademy22.ticketforevent.com/";
		return false;
	});

  adjustCarousels();
});

$(window).resize(function(){
	$('*[role="modal-trigger"]').each(function(){
		var modal = $($(this).data('modal'));
		if (typeof $(modal).data('left') !== 'undefined') {
			$(modal).css('right', 'auto');
			$(modal).css('left', ($(this).offset().left+$(modal).data('left'))+'px');
		}
		if (typeof $(modal).data('right') !== 'undefined') {
			$(modal).css('left', 'auto');
			var rt = ($(window).width() - ($(this).offset().left + $(this).outerWidth()));
			$(modal).css('right', (rt-$(modal).data('right'))+'px');
		}
		if (typeof $(modal).data('top') !== 'undefined') {
			$(modal).css('top', ($(this).offset().top+$(modal).data('top'))+'px');
		}
		if (typeof $(modal).data('bottom') !== 'undefined') {
			$(modal).css('top', ($(this).offset().top+$(this).outerHeight()-$(modal).data('bottom'))+'px');
		}
	});

  adjustCarousels();

});