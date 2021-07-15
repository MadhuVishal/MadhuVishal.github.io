function del(){
    // alert("Hi");



    $.post( "./php_scripts/data_del.php",{})
    .done(function( data ) {
      // alert( "Data Loaded: " + data );
    //   alert("Your Feedback is taken. Thank you!");
    location.replace('./selection.php');
    });

}

function del_order(){
  // alert("Hi");



  $.post( "./php_scripts/order_del.php",{})
  .done(function( data ) {
    // alert( "Data Loaded: " + data );
  //   alert("Your Feedback is taken. Thank you!");
  location.replace('./selection.php');
  });

}