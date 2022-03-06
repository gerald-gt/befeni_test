<!DOCTYPE html>

<html>
	<head>
		<title>Befeni Test - Basic Test</title>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		 
		<link href="bootstrap.min.css" rel="stylesheet">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
      <script type="text/javascript">
      function calculate() {

           var s_number = parseInt($("#input_number").val()) ; 
           var old_number  = parseInt($("#output").text()) ; 

           var total_value = s_number ; 
           $("#old_number").val(s_number) ;  
           
          
            // select operator
           var operator = $('#operation :selected').val();

           if ( operator == "+" && !!old_number )  {
            total_value =  s_number +  old_number ; 
           } 
           if ( operator == "-" && !!old_number) {
            total_value =  s_number - old_number ; 
           } 
           if ( operator == "*" && !!old_number) {
            total_value =  s_number *  old_number ; 
           } 
           if ( operator == "/" && !!old_number ) {
            total_value =  s_number /  old_number ; 
           } 

          $("#input_number").val('') ;
          $("#output").html(total_value) ;

      }

      function clear_calc() {

       
         $("#input_number").val('') ; 
         $("#old_number").val('') ;
         $("#output").empty();
      }
      </script>
	</head>
	<body>
		
		<div class="container" style="margin-top: 50px">
		
			<h3>calculator - By Gerald </h3>
		    
		    <!-- Calculator design by Gerald  -->
		  
		        <input name="input_number" id="input_number" type="text" class="form-control" style="width: 150px; display: inline" />
              <input name="old_number" type="hidden" id="old_number" />
		        <select name="operation" id="operation">
		        	<option value="+">+</option>
		            <option value="-">-</option>
		            <option value="*">*</option>
		            <option value="/">/</option>
		        </select>
		       
		        <input name="calc" type="button" value="Calculate" class="btn btn-primary" onclick="calculate();" />
              <input name="calc_clear" type="button" value="clear" class="btn btn-primary" onclick="clear_calc();" />
	           
              <br/><br/>
              <label id="output"> </label>
		</div>
	
	</body>
</html>
