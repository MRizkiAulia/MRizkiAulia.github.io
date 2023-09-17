<!DOCTYPE html>
<html>
<title>Autosum</title>
<body>

<h1>Auto SUM</h1>
<form name="autoSumForm" action="">
  Nilai Pertama :<br>
  <input type="text" name="nilai1" onFocus="startCalc();">
  <br>
  Nilai ke dua:<br>
  <input type="text" name="nilai2" value="10000" onFocus="startCalc();"" onBlur="stopCalc();" >
  <br><br>
  Hasil :<br>
  <!-- <input type="number" name="hasil" onchange="tryNumberFormat(this.form.thirdBox);"> -->

<p id="dumetschool"></p>
 <input type="text" name="hasil" onchange="myfunction()">

  <br>
</form>


<script>
function startCalc(){
interval = setInterval("calc()",1);}
function calc(){
y = document.autoSumForm.nilai1.value;
z = document.autoSumForm.nilai2.value;

var bilangan = y * z;
  
var number_string = bilangan.toString(),
  sisa  = number_string.length % 3,
  rupiah  = number_string.substr(0, sisa),
  ribuan  = number_string.substr(sisa).match(/\d{3}/g);
    
if (ribuan) {
  separator = sisa ? '.' : '';
  rupiah += separator + ribuan.join('.');
}


document.autoSumForm.hasil.value = rupiah;}
function stopCalc(){
clearInterval(interval);}


</script>


</body>
</html>