<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<script language="javascript">
   function loadData1()
   {
	   $(document).ready(function(){

			$.ajax({
				type: "GET",
				async:true,
				url: 'api.php',
				data: {
					cmd : '1st_task',
					first_name: 'Jon',
					last_name : 'Smith',
					address: 'new York'
				},
				success: function (results) {
					$("#display1").html(results);
					
				},
				error: function (request, status, error) {
						alert(request.responseText);
					}
			});
			
	   });
   }
   
  function loadData2(){
	 $(document).ready(function(){

			$.ajax({
				type: "GET",
				async:true,
				url: 'api.php',
				data: {
					cmd : '2nd_task',
					first_name: 'Jon',
					last_name : 'Smith',
					address: 'new York'
				},
				success: function (results) {
					
					obj = JSON.parse(results);
					console.log(obj);
					$("#display2").html(obj[0].first_name);
					
				},
				error: function (request, status, error) {
						alert(request.responseText);
					}
			});
			
	   }); 
	  
  }
</script>

<div id="display1"></div>
<br><br>

<a href="javascript:void();" onClick="loadData1()">Load 1</a> 


<div id="display2"></div>
<a href="javascript:void();" onClick="loadData2()">Load 2</a> 