$('#checkall').click(function(){
	if($(this).prop('checked')){
		$('.checkboxestd').prop('checked',true);
		$('#delete_all_button').show();
		$('#mark_as_read').show();
	}else{
		$('.checkboxestd').prop('checked',false);
		$('#delete_all_button').hide();
		$('#mark_as_read').hide();
	}
})

$('#delete_all_button').click(function(){
	var all_list = [];
	$('.checkboxestd').each(function(){
		if($(this).prop('checked')){
			all_list.push($(this).val());
		}
	})

	$('#delete_list').val(all_list);
	$('#contact_delete_form').submit();

});

$('.delete-single-contact').click(function(){
		var all_list = [];
		var id = $(this).data('id');
		all_list.push(id);
		$('#delete_list').val(all_list);
		$('#contact_delete_form').submit();
})

$('#mark_as_read').click(function(){
	var all_list = [];
	$('.checkboxestd').each(function(){
		if($(this).prop('checked')){
			all_list.push($(this).val());
		}
	})

	$('#read_list').val(all_list);
	$('#contact_read_form').submit();

});

$('.submit_modal_form').click(function(){
	var form_id = $(this).attr('data-form_id');
	$('#'+form_id).submit();
});