(function ($) {
	"use strict";
	$(function () {
		// Place your public-facing JavaScript here
		$('.extra-widget-archive-handles > li > a').on('click', function (event) {
			event.preventDefault();
			var $this = $(this),
				$container = $this.parents('.extra-widget-archive-class'),
				$toOpen = $container.find('.'+$this.attr('href').substring(1)),
				$contents = $container.find('.extra-widget-archive-content > div'),
				$toOpenHandle = $this.parent(),
				$handles = $container.find('.extra-widget-archive-handles > li');

			$contents.removeClass('active');
			$toOpen.addClass('active');

			$handles.removeClass('active');
			$toOpenHandle.addClass('active');
		});
	});
}(jQuery));