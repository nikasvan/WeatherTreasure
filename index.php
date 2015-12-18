<!doctype html>
<html>
<head>
<title>Weather Site</title>

<meta charset="utf-8" />
<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap-theme.min.css">


<style>

html, body{
    height: 100%;
}
.container{
    background-image: url("http://oi58.tinypic.com/2bqv7d.jpg");
    width: 100%;
    height: 100%;
    background-size: cover;
    background-position: center; 
    padding-top: 120px;
}
.center{
    text-align: center;
}
.color{
    color: #0A1433;
}
p{
    padding-top: 15px;
    padding-bottom: 15px;
}
button{
    margin-top: 20px;
    
}
.alert{
	margin-top: 20px;
	display: none;
}

</style>

</head>

<body> 

<div class="container">
    <div class="row">
        <div class="col-md-6 col-md-offset-3 center">
            
                <h1 class="center color">Weather Forecast</h1>
                <p class="lead center color">Enter Your City Below</p>

                <form>
                    <div class="form-group ">
                    <input type="text" class="form-control" name="city" id="city" placeholder="E.g. London,Paris,New-York,Sydney....">

                    </div>
                    <button class="btn btn-success btn-lg" id="findMyWeather">Find My Weather</button>
                </form>
         <div id="success" class="alert alert-success">Success</div>
		
		 <div id="fail" class="alert alert-danger">Please Enter Correct City</div>

          <div id="empty" class="alert alert-danger">Please Enter a City</div>

        </div>


</div>

</div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
<script>
	$("#findMyWeather").click(function(event){
		event.preventDefault();
		$(".alert").hide();

		if ($("#city").val()) {
			
		$.get("scraper.php?city="+$("#city").val(), function(data){
				if(!data){
				

				$("#fail").fadeIn();
				}
				else{
			

				$("#success").html(data).fadeIn();

				}
		});
	}
	else{
		$("#empty").fadeIn();
		
	}
	});
</script>

</body>
</html>