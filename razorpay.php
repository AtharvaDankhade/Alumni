<script src="https://checkout.razorpay.com/v1/checkout.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<form  >
      <input type="text" name="name" id="name" placeholder="Enter Your Name" required>

  

      <input type="text"id ="amt"  name="amt" placeholder="Amount" required>

      <input type="text"id ="des"  name="des" placeholder="Description" required>
    </div>
    <input type=button name="btn" id="btn" value="Pay Now" class="btn btn-primary" onclick="pay_now()"/>
  </form>
<script>
    function pay_now() {
      var name=jQuery('#name').val();
      var amt=jQuery('#amt').val();

      var options = {
        "key": "Your_razorpay_api", 
        "amount": amt*100, 
        "currency": "INR",
        "name": "GPA Amravati",
        "description": "des",
        "image": "https://www.gpamravati.ac.in/gpamravati_new/temp2018/images/logo.png",
        "handler": function (response){
          jQuery.ajax({
            type:'post',
            url:'payment_process.php',
            data:"payment_id="+response.razorpay_payment_id+"&amt="+amt+"&name="+name,
            success:function(result){
              window.location.href="yes.php";
            }
          });
       }
     };
      var rzp1 = new Razorpay(options);
      rzp1.open();
   }
  </script>