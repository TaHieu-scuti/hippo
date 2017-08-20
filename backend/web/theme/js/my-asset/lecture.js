jQuery(function () {
	"use strict";
		$(document).on('click','[data-rel=lecture-modal]',function(e){
			e.stopPropagation();
			e.preventDefault();
			if($('#lecture-modal').length){
				jQuery('.modal-title').html('Thêm bài học');
			    jQuery('#lecture-modal').find('.caption').html('<i class="fa fa-gift"></i>Nhập thông tin');
				jQuery('#tab-lession').remove();
				jQuery('#open-lession').remove();
				jQuery('#name').val('');
	    	 	jQuery('#duration').val('');
	    	 	jQuery('#number_lession').val('');
	    	 	CKEDITOR.instances['description'].setData('');			
			}
		});

		$("#form-lecture").validate({
		    rules: {
		      name: "required",
		      duration: "required",
		      num_lession: "required",
		    },

		    messages: {
		      name: "Tên không được để trống",
		      duration: "Thời gian không được để trống",
		      num_lession: "Số tiết không được để trống",
		    },
		    submitHandler: function(form) {
		      form.submit();
		    }
		});
		// $("#form-lecture-pattern").validate({
		//     rules: {
		//       category: "required",
		//       duration: "required",
		//       quantity: "required",
		//       pattern: { valueNotEquals: "default" }
		//     },

		//     messages: {
		//       category: "Mục không được để trống",
		//       duration: "Thời gian không được để trống",
		//       quantity: "Số lượng không được để trống",
		//       pattern: "Vui lòng chọn pattern" ,
		//     },
		//     submitHandler: function(form) {
		//       form.submit();
		//     }
		// });

		$(".remove").click(function() {
		  	var	lecture_id = jQuery(this).data('id');

		  	if (confirm("Xóa bài học?")) {
		  		if (lecture_id != undefined && lecture_id > 0) {
					$.ajax({
					    	type : "GET",
					    	url: BASER_URL+"/lectures/"+lecture_id+"/delete",
					    	 success: function(result){
					    	 	toastr['success']('Xóa bài học thành công', "Thông báo");
					    	}
				    });					
				}
		  	}else{
		  		location.reload();
		  	}	
		});

		$(".row_lecture_pattern").click(function() {
		  	var	pattern_id = jQuery(this).data('id');
		  	$( ".toggle"+pattern_id ).toggle();
		  	// $.ajax({
		   //  	type : "GET",
		   //  	url: BASER_URL+"/lecture-pattern/"+lecture_id+"/"+pattern_id+"/edit",
		   //  	 success: function(result){
		   //  	 	jQuery('#form-lecture-pattern-edit').find('#name').val(result.name);
		   //  	}
	    // 	});		
		});

		$(".lecture-pattern-delete").click(function() {
		  	var	lecture_id = jQuery(this).data('lecture_id');
		  	var	pattern_id = jQuery(this).data('pattern_id');

		  	if(confirm('Xóa mục vừa chọn?')){
		  		$.ajax({
			    	type : "GET",
			    	url: BASER_URL+"/lecture-pattern/"+lecture_id+"/"+pattern_id+"/delete",
			    	 success: function(result){	 
			    	 	location.reload();  	 		
			    	 	window.location.replace(BASER_URL+"/lectures/"+lecture_id+"/edit#tab-lession");
			    	}
		    	});	
		  	}	  		
		});
});
