<!DOCTYPE HTML>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<meta name="description" content="">
	<link rel="stylesheet" href="">
	<link rel="icon" href="">
	<script >
		var arac=function (a){
			this.marka=a.marka; //js içinde değişkenler doğrudan nesne kabul edilir o yüzdn a.xxx kullanabiliyoruz
			this.model=a.model;
			this.plaka=a.plaka;
			this.sahip=a.sahip;
			this.kimin=function(){ // sınıfa  içinden bir fonksiyon yazabiliyoruz
				return this.plaka +" plakalı"+this.marka+"-"+this.model+" aracın sahibi : "+this.sahip
			}


		}
		arac.prototype.yeniSahip = function(sahipadi){  //prototype ile de sınıf dışından genişletme yapıyoruz
			this.sahip=sahipadi; // sahipliği değiştirdik dışardın fonksiyonla

		};
	</script>
	
</head>
<body>
	<script>
		var arac1=new arac({
			marka:"nissan",
			model:"micra",
			plaka:"34 xx xxxx",
			sahip:"ruknettin çoksever"
		});
		document.write(arac1.kimin()+"<br/>");
		arac1.yeniSahip("ali sonvites");
		document.write(arac1.kimin());
	</script>

</body>
</html>