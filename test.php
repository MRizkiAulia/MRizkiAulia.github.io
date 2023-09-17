<form name="autoSumForm">
  Jumlah Kata :<br>
  <input type="text" class="form-control"  name="nilai1" onFocus="startCalc1();">
  <input type="text" class="inputPerhitungan" name="nilai2" value="4000" onFocus="startCalc1();" onBlur="stopCalc1();" hidden readonly>
  <br>
  Total Harga :<br>
  Rp.<input type="text" class="inputPerhitungan" name="hasil" readonly>
  <br>
</form>

<form name="autoSumForm2">
  Jumlah Kata :<br>
  <input type="text" class="form-control"  name="nilai1" onFocus="startCalc();">
  <input type="text" class="inputPerhitungan" name="nilai2" value="4000" onFocus="startCalc();" onBlur="stopCalc();" hidden readonly>
  <br>
  Total Harga :<br>
  Rp.<input type="text" class="inputPerhitungan" name="hasil" readonly>
  <br>
</form>

q
<!-- <form name="autoSumForm2" action=""> -->
<!--   Jumlah Kata :<br>
  <input type="text" class="form-control" id="exampleFormControlInpu" name="nilai1" onFocus="startCalc();">
  <input type="text" class="inputPerhitungan" name="nilai2" value="4000" onFocus="startCalc();" onBlur="stopCalc();" hidden readonly>
  <br>
  Total Harga :<br>
  Rp.<input type="text" class="inputPerhitungan" name="hasil" onchange="myfunction()" readonly>
  <br>
</form> -->

 <!-- JavaScript Libraries -->
    <script>
       
        
        
        function startCalc1(){
        interval = setInterval("calc1()",1);}
        function calc1(){
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
        function stopCalc1(){
        clearInterval(interval);}


        function startCalc(){
        interval = setInterval("calc()",1);}
        function calc(){
        y = document.autoSumForm2.nilai1.value;
        z = document.autoSumForm2.nilai2.value;

        var bilangan = y * z;
          
        var number_string = bilangan.toString(),
          sisa  = number_string.length % 3,
          rupiah  = number_string.substr(0, sisa),
          ribuan  = number_string.substr(sisa).match(/\d{3}/g);
            
        if (ribuan) {
          separator = sisa ? '.' : '';
          rupiah += separator + ribuan.join('.');
        }

        
        document.autoSumForm2.hasil.value = rupiah;}
        function stopCalc(){
        clearInterval(interval);}



    </script>