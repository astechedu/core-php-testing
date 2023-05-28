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


//Content.php Page Script


       $('#edit').on('click', function(){
         $('#msbt').css('display','none');
         $('#mbtn').text('Edit');
         //$('#msbt').attr('name','edit')
        // id = $("$id").val();
       });     

       $('#view').on('click', function(){         
           //$('#vid').attr('id');
           id = $("#vid").val();

          $.ajax({
             url:"",
             type:"post",
             data: {"id":id},
             dataType:'json'
           });

       }); 

       $('#mbtn').on('click', function(){

         id     = $('#id').val();
         name   = $('#name').val();
         salary = $('#salary').val();
         city   = $('#city').val();
         //data = {id:id,name:name,salary:salary,city:city};

         $.ajax({
           url:"",
           type:"post",
           data: {"id":id,"name":name,"salary":salary,"city":city},
           dataType:'json'
         });         

         //$('#mbtn').text('Edit');
         //$('#msbt').attr('name','edit')
        // id = $("$id").val();
       });
    
	   
});