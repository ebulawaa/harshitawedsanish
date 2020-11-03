<?php include('rsvphead.php');?>
<title>RSVP Admin | ebulawaa.com</title>
<style type="text/css">
    body{
      background:linear-gradient(rgba(166,51,56,0.9),rgba(166,51,56,0.9)),url(images/other/tile10.png);
    }
    h3{
      color: #FFF;
    }
   .topcontainer{
   text-align: center;
   }
   .topcontainer>img{
   max-width: 60px;
   border-radius: 8px;
   margin-bottom: 5px;
   }
   .btn-info{
   background-color: #107C41;
   color: #FFF;
   text-decoration:none;
   border: 1px solid #107C41;
   }
</style>
<body>
   <div class="topcontainer">
      <img src="eb.png"><br>
      <h3>RSVP Admin</h3>
   </div>
   <div class="container">
      <div class="messages"></div>
      <div class="row">
         <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="card ">
               <div class="card-header">
                  <h2>Guest List
                     <a class="btn btn-info" style="color:#FFF;float: right;cursor:pointer;" onclick="tableToExcel('datatable-buttons')" data-toggle="modal">Export to excel</a>
                  </h2>
               </div>
               <div class="card-block" id="tbldata">
                  <table id="datatable-buttons" class="table table-bordered table-striped" role="grid"  width="100%">
                     <thead>
                        <tr>
                           <th>Sr.</th>
                           <th>Name</th>
                           <th>Phone no.</th>
                           <th>Status</th>
                           <th>No. of guest</th>
                        </tr>
                     </thead>
                     <tbody>
                        <?php 
                           //$db->where("user_id = ?", Array($_SESSION["user"]['id']));
                           $messages = $db->get("demo1rsvp");
                           $i=1;
                           foreach ($messages as $key => $value) {
                           echo '<tr><td>'.$i.'</td><td>'.$value['name'].'</td><td>'.$value['phone'].'</td><td>'.$value['acknowledge'].'</td><td>'.$value['guestno'].'</td></tr>';
                           $i++;
                           }
                           ?>
                     </tbody>
                  </table>
               </div>
            </div>
         </div>
      </div>
   </div>
</body>
</html>
<?php  ?>
<script type="text/javascript">
   $(document).ready(function(){
    $('#datatable-buttons').DataTable({
             "paging": true,
             "lengthChange": true,
             "searching": true,
             "ordering": false,
             "info": true,
             "autoWidth": true
           });
   
   });
</script>
<script type="text/javascript">
   var tableToExcel = (function() {
     var uri = 'data:application/vnd.ms-excel;base64,'
       , template = '<html xmlns:o="urn:schemas-microsoft-com:office:office" xmlns:x="urn:schemas-microsoft-com:office:excel" xmlns="http://www.w3.org/TR/REC-html40"><head><!--[if gte mso 9]><xml><x:ExcelWorkbook><x:ExcelWorksheets><x:ExcelWorksheet><x:Name>{worksheet}</x:Name><x:WorksheetOptions><x:DisplayGridlines/></x:WorksheetOptions></x:ExcelWorksheet></x:ExcelWorksheets></x:ExcelWorkbook></xml><![endif]--><meta http-equiv="content-type" content="text/plain; charset=UTF-8"/></head><body><table>{table}</table></body></html>'
       , base64 = function(s) { return window.btoa(unescape(encodeURIComponent(s))) }
       , format = function(s, c) { return s.replace(/{(\w+)}/g, function(m, p) { return c[p]; }) }
     return function(table, name) {
       if (!table.nodeType) table = document.getElementById(table)
       var ctx = {worksheet: name || 'Worksheet', table: table.innerHTML}
       window.location.href = uri + base64(format(template, ctx))
     }
   })()
</script>