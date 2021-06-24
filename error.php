<html>
<head>
	<meta charset="UTF-8">
	<meta http-equiv="Refresh" content="5;url=../">
	<link rel="icon" href="img/sbfav.png" type="image/x-icon">
	<link rel="shortcut icon" href="img/sbfav.png" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css2?family=Rajdhani:wght@300;400;500;600;700&display=swap" rel="stylesheet">
	<title>StreamBase.pl - ERROR</title>
	<style>
	
body {
background-color: #111111;
}

hr {
    
    margin-bottom: 1rem;
    border: 0;
    border-top: 2px solid rgba(255, 255, 255, 0.1);
}

span.err-error {
    text-transform: uppercase;
    font-size: 7em;
    font-family: 'Rajdhani';
    font-weight: 500;
    color: #B4100B;
    letter-spacing: 25px;

}

span.err-status {
    text-transform: uppercase;
    font-size: 2em;
    font-family: 'Rajdhani';
    font-weight: 500;
    color: #CECECE;
    letter-spacing: 10px;
}

span.err-statuscode {
    text-transform: uppercase;
    font-size: 2em;
    font-family: 'Rajdhani';
    font-weight: 500;
    color: #626262;
    letter-spacing: 10px;
}
span.err-junk {
    text-transform: uppercase;
    font-size: 1em;
    font-family: 'Rajdhani';
    font-weight: 500;
    color: #CECECE;
    letter-spacing: 10px;
}

span.err-boxed {
    border: 2px solid rgba(255, 255, 255, 0.1);
    text-transform: uppercase;
    font-family: 'Rajdhani';
    font-weight: 600;
    letter-spacing: 7px;
    padding: 0px 6px 0px 6px;
    margin: 0px 25px 0px 0px;
}
span.err-boxed.wht{
    color: #000;
    background-color:#CECECE;
}
span.err-boxed.red{
    border: 0px solid rgba(255, 255, 255, 0.1);
    color: #000;
    background-color:#B4100B;
    margin-left: -20px;
}
.err-container {
        margin: 5% 50% 0 25%;
        width: 50%;
        display: block;
        padding: 80px 0;

      
}

a.err-link {
    text-align: center;
    text-transform: uppercase;
    font-size: 1em;
    font-family: 'Rajdhani';
    font-weight: 500;
    color: #c9b311d0;
    letter-spacing: 10px;
    text-decoration: none;

}

a.err-link:hover{
    text-transform: uppercase;
    font-size: 1em;
    font-family: 'Rajdhani';
    font-weight: 500;
    color: #e9cf0ae5;
    letter-spacing: 10px;
    text-decoration: line-through;
}
</style>
</head>
<body>
<div class="err-container">


<span class="err-junk">:: STREAMBASE.PL </span><span class="err-junk" style="color: #626262;">- Twoje źródło rozrywki</span><span class="err-junk"> ::</span>
<br>
<br>
<span class="err-status">Status: </span><span class="err-statuscode"> nie znaleziono</span>
<br><br><br><br><br>
<span class="err-error">error</span> 

<hr>
<span class="err-boxed" style="color: #B4100B; letter-spacing: normal;"><b>E</b></span><span class="err-boxed wht">404 ‏‏‎: nie znaleziono</span><span class="err-boxed red"></span>
<br>
<br>
<br>
<br>

<a href="./" class="err-link">[wróć]</a>

</div>
<script src="https://code.jquery.com/jquery-3.5.0.js"></script>
		<script> 
 function online_24()
 {
	$.ajax({
   url:"24.php",
   method:"POST",
   success:function(data)
   {
    $('#24').html(data);
	
   }
  })
 }
 online_24();
</script>
</body>

</html>