<!DOCTYPE html>
<html>
<head>
	<title></title>
	        <script src="template/js/jquery.js"></script> 


</head>
<body>



<label>Category <span>*</span> </label>
                                      <select  name="category_id" id="category" style="border-color: rgb(107, 213, 234)" >
                                        <option value="">---select------</option>
                                       @if(count($category))
                                         {
                                           @foreach($category as $categry)
                                            <option value="{{$categry->category_id}}">{{$categry->category_name}}</option>
                                           @endforeach
                                          }
                                       @endif
                                      </select>
                                      <br>
     <label>Category <span>*</span> </label>
                                      <select  name="sub" id="sub" style="border-color: rgb(107, 213, 234)" >
                                      	<option value="">---select------</option>
                                      </select>








<script type="text/javascript">
	$('#category').on('change',function()
	{
  
     var category_id = $(this).val();    
   if(category_id)
       {    
       // alert(category_id);

        $.ajax(
        {
           type:"GET",
           url:"{{url('subcategory_select')}}?category_id="+category_id,
           success:function(res)
           {       
                         
                $('select[name="sub"]').empty();
                $.each(res, function(key, value) {
                	
                    $('#sub').append('<option value="'+ value +'">'+ value.subcategory_name +'</option>');
                    });    
           }
        });
    } 
   });

</script>

</body>
</html> 