

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRN Registeration</title>
    <style>
	@import url('https://fonts.googleapis.com/css2?family=Slabo+27px&display=swap');
	body{
	background:url('3.png') no-repeat;
	background-size:cover;
	}
        * {
            padding: 0;
            margin: 0;
        }

        .cont 
        {  
		boder-radius:20px;
		background:linear-gradient( -270deg, rgba(255,255,255,0) 10%, rgb(0,255,255,0.6) 100%);
      width:82%;
    padding-left:20px;
    margin-left:65px;
   margin-right:60px;
   font-family: 'Slabo 27px', serif;
   margin-top:80px;
   padding:50px;
    
        }
		#btn{
		
		margin-left:430px;
	  margin-bottom:28px;
	   
	  width:120px;
	  height:32px;
	  background:#f44336;
	  border:none;
	  border-radius:20px;
	  color:#fff;
	 font-family: 'Slabo 27px', serif;
	  font-weight:500;
	  text-transform:uppercase;
	  transition:0.2s ease;
	  cursor:pointer;
  }
  #btn:hover,
  #btn:focus
  {
	  background:#ff5722;
	  transition:0.2s ease;
	  boreder-radius:20px;
  }
		
		#select{
		display:block;
	  box-sizing:border-box;
	  margin-bottom:20px;
	  margin-left:20px;
	  padding:4px;
	  width:450px;
	  height:32px;
	  border:none;
	  outline:none;
	  border-bottom:1px solid #aaa;
      font-family: 'Slabo 27px', serif;
	  font-weight:400;
	  font-size:15px;
	  transition:0.2s ease;
		border-radius:20px;
		color :black;
		}
		h1{color:#fff;
		margin-left:210px;
font-size:2em;

font-family: 'Slabo 27px', serif;
margin-bottom:10px;}

p{margin-left:250px;
color:#fff;
font-family: 'Slabo 27px', serif;
font-size:20px;
}

.result{
background:linear-gradient( -90deg, rgba(255,255,255,0) 10%, rgb(0,255,255,0.6) 100%);
  margin-left:850px;
  width: 960px;
  height:100px;
  
  padding: 70px;
  margin: 90px;
}
    </style>
</head>

<body>
   <div class="cont">

        <h1 style="margin-left: 400px;">PRN Generation</h1><br>
        <select name="select" id="select" style="margin-left: 300px;">
            <option value="0">Select</option>
            <option value="1">Computer Department</option>
            <option value="2">Electronic Department</option>
            <option value="3">Mechanical Department</option>
            <option value="4">Civil Department</option>
            <option value="5">Chemical Department</option>
        </select><br>
        <span><button id="btn" onclick="myfunct()">Submit</button></span></div>
		<div class="result"><p style="margin-left:400px " >The Generated PRN:</p><br>
        <span id="disp" style="margin-left:400px; color: #f00; font-size: 30px;"></span><br>
        <p>NOTE: Ex. CS=Computer Department;  01-04=Batch;  1-1000=Sequence Number</p>
  </div>
    <script>
        function myfunct() {
            var select = document.getElementById("select");
            //Department

            if (select.value == "0") {
                alert("PLease select one of the option");
                return false;
            }
            if (select.value == "1") {
                var dept = "CS";
            }
            if (select.value == "2") {
                var dept = "EX";
            }
            if (select.value == "3") {
                var dept = "ME";
            }
            if (select.value == "4") {
                var dept = "CV";
            }
            if (select.value == "5") {
                var dept = "CH";
            }

            //Sequence NUmber
            var a1 = 1;
            var b1 = 999;
            var b2 = a1 + (b1 - a1) * Math.random();
            var no = Math.round(b2);

            if (no < 10) {
                var n = "000" + no;
            }
            if (no < 100 & no >= 10) {
                var n = "00" + no;
            }
            if (no < 1000 & no >= 100) {
                var n = "0" + no;
            }

            var c1 = 1;
            var d1 = 4;
            var d2 = c1 + (d1 - c1) * Math.random();
            var batch = Math.round(d2);

            document.getElementById('disp').innerHTML = "20" + dept + "0" + batch + n;

        }
    </script>
</body>

</html>
