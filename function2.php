 <script>
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