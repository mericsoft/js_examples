<!DOCTYPE HTML>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<meta name="description" content="">
	<link rel="stylesheet" href="">
	<link rel="icon" href="">
	<script >
		function printCurly(str) {
			var preg=/\{\}/; // curly brackets pattern
			var txt=str.txt; // the text including curly brackets
			var repList=str.repList; // the array including replacing values
			for(var i=0;i<str.repList.length;i++){
				txt=txt.replace(preg,repList[i]); //evry single bracket will change array values
			}
			return txt;
			
		}

	</script>
	
</head>
<body>
	<script >
		var a= printCurly({
			txt:"Jason is {} years old. He is a {}. He lives in {}",
			repList:["26","doctor","New York"]
		});
		document.write(a);
	</script>
	

</body>
</html> 
