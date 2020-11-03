<?php include('head.php');?>
<?php error_reporting(0);?>
     <style type="text/css">
      :root {
  --theme-color: #A63338;
  --theme-color2:#FFCF40; 

    }
   body{
      
 background: #FBF4EC !important;
 min-height: 100vh !important;

     }
     .main{
      font-size: 18px;
      color: #fff;
      font-family: "Roboto";
      background-color: rgba(0,0,0,0.5);
      margin: 5px;
      padding: 5px;
      border-radius: 10px;
      word-wrap: break-word;
     }
     .main>img{
      margin: 8px;
      height: 28px;
      border-radius: 100%;
     }

     .msg{
       margin-left: 43px;
      font-size: 18px;
      font-family: sans-serif;
      padding-bottom: 5px;
     }
  h4{
font-family: "Roboto";
color: var(--text-color);
margin: 8px;
text-align: center;
  }
  #theForm{
    text-align: center;
   
  }
  #header {
    display: inline;
    vertical-align: middle;
}

.mdl-layout__obfuscator,.mdl-layout__drawer{
  position: fixed;
}
.material-icons {
  margin-top: 10px;
    }
    .empty{
      min-height: calc(100vh - 169px);

    }
    #save{
      background-color: var(--theme-color);
      color: #fff;
    }
  
    .mdl-layout-title{
  text-align: center;
}
.mdl-layout-title>a>img{
margin-top: 10px;
border-radius: 5px;
width: 60px;
}
hr{
     margin: auto;
    width: 90%;
    margin-top: 17px;
    background: rgba(0,0,0,0.5);
    height: 2px;

}

.mdl-layout__drawer>.mdl-layout-title{
  padding-left: 0px !important;
}
.material-icons{
  color: var(--text-color);
}

#guestnoinput{
  display: none;
}

    </style>
    <body>
  <?php include('header.php');?>
   <div id="mdl-layout__container">
      <div id="app-header">

    <div id="main-content">
    <div class="empty">
      <form method="POST" id="theForm">
        <h4>RSVP</h4>
         <!-- <div class="form-group">
          <label for="inputName">Name</label>
          <input type="text" id="inputName" class="form-control" name="inputName" placeholder="Enter your name" required autofocus>
      </div>-->
      <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
    <input class="mdl-textfield__input" type="text" id="inputName" name="inputName" >
    <label class="mdl-textfield__label" for="sample3">Enter your name</label>
  </div><br>
      
      <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
    <input class="mdl-textfield__input" type="tel" id="inputPhone" name="inputPhone">
    <label class="mdl-textfield__label" for="sample3">Enter your phone no.</label>
  </div><br>

  <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
    <select class="mdl-textfield__input" id="inputStatus" name="inputStatus">
      <option></option>
      <option value="Coming">Coming</option>
      <option value="May be">May be</option>
      <option value="Not coming">Not coming</option>
    </select>
    <label class="mdl-textfield__label" for="inputStatus">Acknowledge your presence</label>
    </div><br>
    <div style="margin:0 auto;"id="guestnoinput" class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
    <input class="mdl-textfield__input" type="number" id="inputGuest" name="inputGuest">
    <label class="mdl-textfield__label" for="inputGuest">No. of guests</label>
  </div><br>

  <button id="openbutton" type="submit">Send</button>
        
      </form>
    </div>
  </div>


   <footer class="mdl-mini-footer">
      <p id="footerlink"> Handcrafted with &#x2764; by <a target="_blank" href="http://ebulawaa.com">www.ebulawaa.com</a><br>© Copyright 2020</p>
   </footer>
</body>

<?php 
/*$servername = "localhost";
$username = "ebulad4i_wedexp2";
$password = "8tyH(w8psVR$";
$dbname = "ebulad4i_weddingexp2"*/;

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "test";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
 
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$conn->close();
?> 

</div></div></div>

</div>
<script type="text/javascript">
$(document).ready(function(){

  document.getElementById("inputStatus").onchange = function() {

   
      switch (this.value) {
      case "Coming":
      $('#guestnoinput').css('display','block');
      $("#inputGuest").prop('required',true);
        break;
      case "May be":
      $('#guestnoinput').css('display','none');
      $("#inputGuest").prop('required',false);
      $("#inputGuest").val("");
        break;
      case "Not coming":
      $('#guestnoinput').css('display','none');
      $("#inputGuest").prop('required',false);
      $("#inputGuest").val("");
        break;
      }
   
    };

  $('#theForm').on('submit', function(e) {

  var name = $('#inputName').val();
  var phone = $('#inputPhone').val();
  var acknowledge =  $("#inputStatus").val();
  var guestno =  $('#inputGuest').val();
   if(name == '' || acknowledge==''){
       alert("Enter data in all fields!");
        return false;
      }

    if (!e.isDefaultPrevented()) {
      var data = $('#theForm').serialize();
        $.ajax({
          url: "siteajax.php?savemessage", 
          type:'POST',
          data:data,
          success: function(data){
            // alert(data);
            var x = JSON.parse(data);
            // alert(x.status);
            if(x.status == 1){
              alert("Your response has been saved successfully.");
              window.location.reload();
              $("html, body").animate({ scrollTop: $(document).height() }, 1000);
            }
          
          }
      });
      return false;
    }
  });

});
</script>