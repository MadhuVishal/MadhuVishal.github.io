function order_insert(){


  v1= document.getElementById('name-form5-c').value;
  v2= document.getElementById('email-form5-c').value;
  v3= document.getElementById('url-form5-c').value;
  v4= document.getElementById('textarea-form5-c').value;
  v5= document.getElementById('small_rate').value;
  v6= document.getElementById('medium_rate').value;
  v7= document.getElementById('large_rate').value;
  v8= document.getElementById('combo_rate').value;
  v9= document.getElementById('hy_small_rate').value+','+document.getElementById('hy_medium_rate').value+','+document.getElementById('hy_large_rate').value;
  v10= document.getElementById('yr_small_rate').value+','+document.getElementById('yr_medium_rate').value+','+document.getElementById('yr_large_rate').value;


  var n="Name : "+v1+"\nEmail :"+v2+"\nMobile :"+v3+"\nAddress :"+v4+"\nSmall :"+v5+"\nMedium :"+v6+"\nLarge :"+v7+"\nCombo rate :"+v8+"\nHalf Yearly rate :"+v9+"\nYearly rate :"+v10;
  var link="https://api.telegram.org/bot1428427579:AAFcf2rV3I2uPI05ICLjkH6RnvkZUqzAJzk/sendMessage?chat_id=-1001260699243&text="+n;
  if($.post(link,function(data){}))
    alert("Your Order is taken. We'll contact you for Payment and Shipping Details. Happy Shopping!");


  // document.getElementById('full_name_ssd').value = document.getElementById('name-form5-c').value;
  // document.getElementById('email_ss').value = v2;
  // document.getElementById('phone_no_ss').value = v3;
  // document.getElementById('address_ss').value = v4;
  // document.getElementById('small_ss').value = v5;
  // document.getElementById('medium_ss').value = v6;
  // document.getElementById('large_ss').value = v7;

  // alert('hi');
  // spreadsheet_send();

  
    // alert(v1+v2+v3+v4+v5+v6+v7+v8+v9+v10);

    $.post( "./php_scripts/order_insert.php",
    {   n1: v1, n2: v2, n3: v3, n4: v4,
        n5: v5, n6: v6, n7: v7, n8: v8,
        n9: v9, n10 :v10
    })
    .done(function( data ) {
      alert( "Data Loaded: " + data );
    //   alert("Your Feedback is taken. Thank you!");

    });
}

// function spreadsheet_send(){
//   $.ajax
//   ({
//       url:'https://api.apispreadsheets.com/data/5576/',
//       type:'post',
//       data:$("myForm").serializeArray(),
//       success: function()
//       {
//         alert("Form Data Submitted :)")
//       },
//       error: function()
//       {
//         alert("There was an error :(")
//       }
//   });
// }