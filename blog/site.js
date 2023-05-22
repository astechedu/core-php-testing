<script>


$(function(){

	   $("#logout").on('click', function(){
       let logout = $("#logout").attr('id');
    
      $.ajax({
        url: '',
        type:'get',
        data: {logout:logout},
        dataType:'json'
      });

   });   
	   
});
</script>