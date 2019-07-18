  <html>
  <head>
    <meta charset="utf-8">
    <title>Invoice</title>
    <style type="text/css">
      .dropbtn {
        background-color:  colorless;
        color: #000;
        padding: 10px;
        font-size: 14px;
        border: none;
        cursor: pointer;
      }
       .dropbtn1 {
        background-color:  red;
        color: white;
        padding: 10px;
        font-size: 12px;
        border: none;
        cursor: pointer;
      }
    </style>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
 <script
  src="https://code.jquery.com/jquery-3.4.1.min.js"
  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
  crossorigin="anonymous"></script>
  <script type="text/javascript">
function handleSelect(elm)
{
  if (elm.value == '<?php echo base_url('user/add_client');?>') {
     window.location = '<?php echo base_url('user/add_client');?>';
}
}
</script>

 <script src="http://code.jquery.com/ui/1.9.1/themes/blitzer/jquery-ui.min.css"></script>
 <script src="<?php echo base_url('js/jquery-ui.min.js');?>"></script>
 <script language="javascript" type="text/javascript">
  function addRow(element) {
      var form = element.form;
      var table = form.getElementsByTagName('table')[0];
      var tbody = table.tBodies[0];
      var num = tbody.rows.length - 1;
      var row = table.rows[1].cloneNode(true);
      var input, inputs = row.getElementsByTagName('input')

      // Update input names
      for (var i=0, iLen=inputs.length; i<iLen; i++) {
        input = inputs[i];
        input.name = input.name.replace(/\d+$/,num);
        input.value = '';
      }
      tbody.insertBefore(row, tbody.rows[tbody.rows.length - 1]);
  }

  function updateRow(element) {
    var form = element.form;
    var num = element.name.replace(/^\D+/,'');
    var value = form['quantity' + num].value * form['rate' + num].value;
    form['amount' + num].value =  (value == 0)? '' : value;
    updateTotal(form);
  }

  function updateTotal(form) {
    var elements = form.elements;
    var name = /^amount/;
    var total = 0;
    var value;
     for (var i=0, iLen=elements.length; i<iLen; i++) {
      if (name.test(elements[i].name)) {
        total += parseFloat(elements[i].value);
      }
    }
    form.total.value = total;
  }
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.11.0/sweetalert2.all.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/promise-polyfill@7.1.0/dist/promise.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.11.0/sweetalert2.css" />
<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" >
<style type="text/css">
</style>
  </head>
  <body>
  </div>
</div>
<div class="container">
  <h3 style="font-family: lato;text-align: center;text-transform: uppercase;">Invoice<?php echo form_input(['name'=>'invoice_id','type'=>'text','id'=>'invoice_id','readonly'=>'true','class'=>'form-control col-md-1','value'=>set_value('unitprice',$invoicedata->invoice_id)]); ?><span class="text-danger"></h3>
    <div class="form-row">
      <div class="col-md-4 form-group">
          <label><b>Client Email</label>
            <?php echo form_input(['name'=>'clientemail','type'=>'text','id'=>'clientemail','class'=>'form-control','value'=>set_value('clientemail',$invoicedata->clientemail)]); ?>
                    </div></b></label>
                    <div class="col-md-4 form-group">
                    <label><b>Client Name</b></label>
                   <?php echo form_input(['name'=>'clientname','type'=>'text','id'=>'clientname','class'=>'form-control','value'=>set_value('clientname',$invoicedata->clientname)]); ?>
                    </div>
                  </b></label>
                    <div class="col-md-4 form-group">
                    <label><b>Client Phone</b></label>
                   <?php echo form_input(['name'=>'clientphone','type'=>'text','id'=>'clientphone','class'=>'form-control','value'=>set_value('clientphone',$invoicedata->clientphone)]); ?>
                    <span class="text-danger"><?php echo form_error("clientphone"); ?></span>
                    </div>
                  </div>
                  <div class="container">
                   <div class="form-row">
                    <div class="col-md-4 form-group">
                    <label><b>Invoice Date</b></label>
                    <?php echo form_input(['name'=>'invoicedate','type'=>'text','id'=>'invoicedate','class'=>'form-control','value'=>set_value('invoicedate',$invoicedata->invoicedate)]); ?>
                    </div>
                    <div class="col-md-4 form-group">
                    <label><b>Due Date</b></label>
                    <?php echo form_input(['name'=>'duedate','type'=>'text','id'=>'duedate','class'=>'form-control','value'=>set_value('duedate',$invoicedata->duedate)]); ?>
                    </div>
                    <div class="col-md-4 form-group">
                    <label><b>Billing Address</b></label>
                    <?php echo form_input(['name'=>'billingaddress','type'=>'text','id'=>'billingaddress','class'=>'form-control','value'=>set_value('billingaddress',$invoicedata->billingaddress)]); ?>
                    <span class="text-danger"><?php echo form_error("billingaddress"); ?></span>
                    <span class="text-danger"></span>
                    </div>
                  </div>
    
        </div>
        <div class="container" style="width: 100%;">
    <table class="table table-bordered">
      
    </table>
   <form action="submit.php" name="main" method="post" style="margin-top: -20px" >
  <table style="border-collapse: collapse;" border="0" align="center"
   width="50%" id="customersAdd" class="table table-bordered" >
   <tr>
        <td>#No</td>
        <td>Product</td>
        <td>Description</td>
        <td>Quantity</td>
        <td>Price</td>
        <td>Total</td>
      </tr>
    <tr>
    </tr>
    <tr>
       <td>
        <input placeholder="" class="form-control input-sm text-right" name="no" onblur="updateRow(this);" id="no" readonly="true">
      </td>
      <td>
        <select id="edName" placeholder="Product" class="form-control col-md-12 text-right" type="text" name="description1" id="description" required>
        <?php
     if ($fetch_product->num_rows()>0) {
       foreach ($fetch_product->result() as $row){
            echo "<option value='" . $row->productname . "'>" .$row->productname . "</option>"; 
     }
   }
      ?>  
        </select>
      </td>
       <td>
         <?php echo form_input(['name'=>'product','type'=>'text','id'=>'product','class'=>'form-control','value'=>set_value('product',$invoicedata->product)]); ?><span class="text-danger"><?php echo form_error("product"); ?></span>
      </td>
      <td>
        <?php echo form_input(['name'=>'quantity1','type'=>'text','id'=>'quantity','class'=>'form-control','value'=>set_value('quantity',$invoicedata->quantity)]); ?><span class="text-danger"><?php echo form_error("quantity"); ?></span>
      </td>
      <td>
        <?php echo form_input(['name'=>'rate1','type'=>'text','id'=>'unitprice','class'=>'form-control','value'=>set_value('unitprice',$invoicedata->unitprice)]); ?><span class="text-danger"><?php echo form_error("unitprice"); ?>
      </td>
      <td>
        <?php echo form_input(['name'=>'amount1','type'=>'text','id'=>'amount','class'=>'form-control','value'=>set_value('amount',$invoicedata->amount)]); ?><span class="text-danger"><?php echo form_error("amount"); ?>
      </td>
    </tr>
    <tr>
      <td colspan="5" style="text-align: right" >Subtotal&nbsp;
      <td><?php echo form_input(['name'=>'total','type'=>'text','id'=>'total','class'=>'form-control','value'=>set_value('total',$invoicedata->total)]); ?><span class="text-danger"><?php echo form_error("total"); ?>
    </tr>
  </table>
</form>
</div>
<table style="margin-left:70%;margin-top: -20px;border: 0">
   <tr>
      <td colspan="5" style="text-align: right">Tax&nbsp;
      <td><?php echo form_input(['name'=>'tax','type'=>'text','id'=>'tax','class'=>'form-control','value'=>set_value('tax',$invoicedata->tax)]); ?><span class="text-danger"><?php echo form_error("tax"); ?>
    </tr>
  <tr>
      <td colspan="5" style="text-align: right">Amount Paid&nbsp;
      <td><?php echo form_input(['name'=>'amountpaid','type'=>'text','id'=>'amountpaid','class'=>'form-control','value'=>set_value('amountpaid',$invoicedata->amountpaid)]); ?>
    </tr>
    <tr>
      <td colspan="5" style="text-align: right">Balance Due&nbsp;
      <td><?php echo form_input(['name'=>'balancedue','type'=>'text','id'=>'balancedue','class'=>'form-control','value'=>set_value('balancedue',$invoicedata->balancedue)]); ?>
    </tr>
     <tr>
      <td colspan="5" style="text-align: right">New Balance Due&nbsp;
      <td><input type="text" name="newbalancedue" id="newbalancedue" class='form-control' readonly="true">
    </tr>
</table>

<div class="form-row ">
                     <div class="col-md-4 form-group">
                    <label><b>Terms</b></label>
                    <input type="text" name="terms" class="form-control col-md-12">
                    </div>
                    <div class="col-md-4 form-group">
                    <i class="fa fa-paperclip "></i>
                    <label><b>Enter Amount Recieved</b></label>
                    <input type="text" name="amountrecieved" id="amountrecieved" class="form-control col-md-12">
                    </div>
                    <div class="col-md-4 form-group">
                    <label><b>Deleted by</label>
                    <?php echo form_input(['name'=>'email','type'=>'text','id'=>'email','class'=>'form-control','value'=>set_value('email',$this->session->userdata('email'))]); ?><span class="text-danger"><?php echo form_error("total"); ?>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6">
      <input type="submit" class="dropbtn1" id="save" value="Confirm delete" style="color: #fff;font-weight: 800;">
       </div>
       <div class="col-md-6">
      <a href="<?php echo base_url('user/invoices');?>"><button type="button" class="dropbtn" data-dismiss="modal"><span aria-hidden="true">Cancel</span><span class="sr-only"></span></button></a>
    </div>
      </div>
    <div>
      
    </div>
  </div>
      </div>
    </div>

    </div>
<br>
<div class="container">
  <div class="row">
  <div class="col-md-12">
    <br><br>
  </div>
  </div>
</div>
 </body>
  <script type="text/javascript">
     $(document).ready(function() {
        $('select[name="clientemail"]').on('change', function() {
            var stateID = $(this).val();
            if(stateID) {
                $.ajax({
                    url: '<?php echo base_url('user/myformAjax/');?>'+stateID,
                    type: "GET",
                    dataType: "json",
                    success:function(data) {
                        $('select[name="clientname"]').empty();
                        $.each(data, function(key, value) {
                            $('select[name="clientname"]').append('<option value="'+ value.id +'">'+ value.firstname +'</option>');
                        });
                    }
                });
            }else{
                $('select[name="clientname"]').empty();
            }
             if(stateID) {
                $.ajax({
                    url: '<?php echo base_url('user/myformAjax/');?>'+stateID,
                    type: "GET",
                    dataType: "json",
                    success:function(data) {
                        $('select[name="clientphone"]').empty();
                        $.each(data, function(key, value) {
                            $('select[name="clientphone"]').append('<option value="'+ value.id +'">'+ value.phone +'</option>');
                        });
                    }
                });
            }else{
                $('select[name="clientphone"]').empty();
            }
        });
    });
  document.getElementById("edName").required = true;
  var x = $('#amountpaid').val();
   var y = $('#amountrecieved').val();
  $("#amountrecieved,#balancedue").keyup(function () {
    $('#newbalancedue').val($('#balancedue').val() - $('#amountrecieved').val());
  });
  $("#amountpaid,#amountrecieved").keyup(function () {
    $('#newamountpaid').val(x + y);
  });
    $(document).ready(function(e){
      $("input").change(function(){
        var sum = 0;
        $("input[name=total]").each(function(){
          sum = sum + parseInt($(this).val());
        })
        $("input[name=subtotal]").val(sum);
      });
      });
$(function(){
var set_number = function(){
  var table_len = $('#customersAdd tbody').length;
  $('#no').val(table_len);
}
set_number();
$('#add_data').click(function(){
var product = $('#product').val();
var description = $('#description').val();
var quantity = $('#quantity').val();
var unitprice = $('#unitprice').val();
var amount = $('#amount').val();

//call the function to set new number
set_number();
});
$('#save').click(function(){
  var table_data = [];
//use .each to get all the data
$('#customersAdd').each(function(row,tr){
//create an array to store all the data in a row


//get only the data with value
var sub = {
  'invoice_id':$('#invoice_id').val(),
  // 'product':$('#product').val(),
  'tax':$('#tax').val(),
   'clientname':$('#clientname').val(),
  'clientphone':$('#clientphone').val(),
    'clientemail':$('#clientemail').val(),
  // 'duedate':$('#duedate').val(),
  // 'invoicedate':$('#invoicedate').val(),
  'email':$('#email').val(),
  'product':$('#product').val(),
  'total':$('#total').val(),
  'amountrecieved': $('#amountrecieved').val(),
  'newbalancedue':$('#newbalancedue').val(),
  // 'billingaddress':$('#billingaddress').val(),
  // 'description' : $('#description').find('td:eq(0)').text(),
  'quantity' : $('#quantity').val(),
  'unitprice' : $('#unitprice').val(),
  'amount' : $('#amount').val(),
};
table_data.push(sub);


});
//check data via console
console.log(table_data);
//using ajax to insert the data to database
// import Swal from 'sweetalert2';
swal({
  title : 'Confirm delete',
  text : '',
  type : '',
    preConfirm: function() {
    return new Promise(function(resolve) {
      setTimeout(function() {
        resolve()
      }, 1000)
    })
  },
  showLoaderOnConfirm : true,
  showCancelButton : true,
  confirmButtonText : 'Yes'
    }).then(function() {
      var data = {'data_table':table_data};
  $.ajax({
    data : data,
    type : 'POST',
    url : '<?php echo base_url("user/deletedinvoices/" .$invoicedata->invoice_id);?>',
    crossOrigin : false,
    dataType:'json',
    success : function(result){
      if(result.invoice == "success"){
        swal('Successfully Updated Income Account','','success');
         window.location.href = '<?php echo base_url("user/invoices");?>';
      }else{
        swal('Error Saving','','warning');

      }
    }
  });
});
});
});

</script>
</html>