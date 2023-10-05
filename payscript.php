<button id="rzp-button1">Pay</button>
<script src="https://checkout.razorpay.com/v1/checkout.js"></script>
<script>
var options = {
    "key": "rzp_test_MJ3SEYLBdfeJtR", 
    "amount": "49900", 
    "currency": "INR",
    "name": "DenyMart Pvt. Ltd", //your business name
    "description": "Test Transaction",
    "image": "https://example.com/your_logo",
    "data_id": "<?php echo 'OID'.rand(10,100).'END';?>",

    "callback_url": "https://eneqd3r9zrjok.x.pipedream.net/",
    "prefill": { 
        "name": "", //your customer's name
        "email": "",
        "contact": "" 
    },
    "notes": {
        "address": "Razorpay Corporate Office"
    },
    "theme": {
        "color": "#3399cc"
    }
};
var rzp1 = new Razorpay(options);
document.getElementById('rzp-button1').onclick = function(e){
    rzp1.open();
    e.preventDefault();
}
</script>