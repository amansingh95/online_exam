<div id="divCounter"></div>
    <script type="text/javascript">
    if(localStorage.getItem("counter")){
      if(localStorage.getItem("counter") >= 60){
        var value = 0;
      }else{
        var value = localStorage.getItem("counter");
      }
    }else{
      var value = 0;
    }
    document.getElementById('divCounter').innerHTML = value;

    var counter = function (){
      if(value >=60){;
       <?php /*?> localStorage.setItem("counter", 0);
      value = 0; <?php */?> 
      }else{
        value = parseInt(value)+1;
        localStorage.setItem("counter", value);
      }
      document.getElementById('divCounter').innerHTML = value;
    };

    var interval = setInterval(function (){counter();},1000)<?php /*?>millesecond60000=1minute or 1000 milisec=1second<?php */?>;
  </script> 
  



 
 