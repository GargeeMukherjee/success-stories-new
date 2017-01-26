
<html>
<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: arial;
                font-weight: 100;
                height: 100vh;
                margin: 0;
                 font-size: 30;
                 padding-left: 50px;
                  padding-top: 50px;
                   padding-right: 50px;
            }

            .form-control
            {
            	width: 100%;
                padding: 12px 20px;
                margin: 8px 0;
                box-sizing: border-box;
                font-size: 30;

            }
           </style>

           <script>
function textCounter(field,field2,maxlimit)
{
 var countfield = document.getElementById(field2);
 if ( field.value.length > maxlimit ) {
  field.value = field.value.substring( 0, maxlimit );
  return false;
 } else {
  countfield.value = maxlimit - field.value.length;
 }
}
</script>
    </head>
    
<body>
<div class="container">
	<form action="localhost/addStoryAction" method="POST">
	{{csrf_field()}}
	NAME<input name="donorName" id="donorName" type="text" class="form-control" required>
	<br>
	DATE OF DONATION

	<input name="dateOfDonation" id="dateOfDonation" type="date" class="form-control" required>
		<br>
   HOSPITAL NAME<input name="hospitalName" id="hospitalName" type="text" class="form-control" required>
  <br>

	ANY MESSAGE YOU WANNA SHARE
	
<textarea onkeyup="textCounter(this,'counter',200);" class="form-control" name="message" id="message" required>
</textarea><input disabled  maxlength="3" size="3" value="200" id="counter" style="float:right;">


		<br>

	<input class="btn form-control"  type="submit" value="DONE"></input>
	
	</form>
</div>
</body></html>
