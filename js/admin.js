$( document ).ready(function() {
    $(".home").click(function(){
    	$(this).addClass("tick");
    	$(".cate").removeClass("tick");
    	$(".pro").removeClass("tick");
    	$(".table").removeClass("none");
    	$(".Category").addClass("none");
    	$(".Products").addClass("none");

    });
     $(".cate").click(function(){
    	$(this).addClass("tick");
    	$(".home").removeClass("tick");
    	$(".pro").removeClass("tick");
    	$(".Category").removeClass("none");
    	$(".table").addClass("none");
    	$(".Products").addClass("none");
    });
      $(".pro").click(function(){
    	$(this).addClass("tick");
    	$(".cate").removeClass("tick");
    	$(".home").removeClass("tick");
    	$(".Products").removeClass("none");
    	$(".table").addClass("none");
    	$(".Category").addClass("none");
    });



     $(".sb_cate").click(function(){
     	var cate_name = $(".cate_name").val();
     	if (cate_name == '') {
     		alert('Điền Đầy Đủ Thông Tin');
     	}
     	else{
     		$.ajax({
				async:true,
				url: "addCategory.php",
				type: "post",
				data: {
					cate_name:cate_name,
				},success: function(data) {
					alert(data);
				}
			});
     	}
     });

      $(".sb_pro").click(function(){
     	var pro_name = $(".pro_name").val();
     	var img_pro = $(".img_pro").val();
     	var price_pro = $(".price_pro").val();
     	var id_cate = $(".id_cate").val();
     	var MoTa = $(".MoTa").val();
     	if (pro_name == '' || img_pro == '' || price_pro == '' || MoTa == '') {
     		alert('Điền Đầy Đủ Thông Tin');
     	}
     	else{
     		$.ajax({
				async:true,
				url: "addProduct.php",
				type: "post",
				data: {
					pro_name:pro_name,
					img_pro:img_pro,
					price_pro:price_pro,
					id_cate:id_cate,
					MoTa:MoTa
				},success: function(data) {
					alert(data);
				}
			});
     	}
     });
});