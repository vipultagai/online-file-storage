<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
	<link rel="stylesheet" href="index.css">
	<link href='https://fonts.googleapis.com/css?family=Titillium+Web:400' rel='stylesheet' type='text/css'>
	<link href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<script>
function makefile(){
                    var divstart    =  "<button style= 'border:none;max-width:100px;margin:10px;background-color:white;' onclick='openfile(this.id)' class='btn dropdown-toggle'data-toggle='dropdown' aria-haspopup='true' aria-expanded='false' id='fileq";
                    var divstart2   =  "'><img src='/img/file.png' alt='Smiley face' height='62' width='62'><br><div style='max-width:100px;max-height:50px;overflow:auto;'>fileq";
                    var divend      =  "</div>";
					var list="<div class='dropdown' style='float:left;'><div class='dropdown-menu' aria-labelledby='dropdownMenuButton'><a class='dropdown-item' href='#'>Action</a><a class='dropdown-item' href='#'>Another action</a><a class='dropdown-item' href='#'>Something else here</a></div></div>";

					var divend2     =  "</button>";
					var final2      =  divstart+divstart2+list+divend+divend2;
					document.getElementById("abc") .innerHTML   = final2;	
					}
				
</script>
</head>




<body>
<button onclick="makefile()">click</button>

<div id="abc">

</div>


</body>
</html>