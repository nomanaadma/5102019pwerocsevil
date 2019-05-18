$(document).ready( () => {

	$('.show_more_countries').click( e => {

		e.preventDefault();

		var $this = $(e.currentTarget);
		$('.nation_list').find('.d-none').removeClass('d-none');
		$this.remove();


	});

	$('.tournament-list li span.mini span.down-icon').click(function () {

		jQuery(this).parent().parent().parent().toggleClass('active-torn');
		jQuery('ul.sub-details').toggle();
	});

	$('.tournament-list > li span.checkbox input').click(function () {
		jQuery('ul.sub-details input[type="checkbox"]').prop('checked', this.checked)
	});

	jQuery('ul.top-list li').click( e =>  {
		
		e.preventDefault();
		let $this = $(e.currentTarget);
		
		let loader_div = $this.find('a.main-anchor');

		if (loader_div.next().length > 0) { // already loaded leagues 

			$this.find('.drop-menu').toggle();

		} else { // loading leagues first time

			css_loader(loader_div, 'show', $);

			$.ajax({
				url: "/wp-admin/admin-ajax.php",
				method: "POST",
				data: { 'action': 'leagues_data', 'data': $this.attr('data-leagues') },
				success: response => {
	
					if(response.length > 5) {
						
						let dropdown = $(response).insertAfter(loader_div);
						dropdown.show();
	
					}
	
					css_loader(loader_div, 'hide', $);
				}
			});

		}
		
    });

});


const css_loader = (el, action, $) => {

	if (action == 'hide') { // show loader
		el.find('.lds-ring').remove();
	} else { // hide loader
		
		let loader = $('<div class="lds-ring"><div></div><div></div><div></div><div></div></div>');
		loader.appendTo(el);

	}

}
