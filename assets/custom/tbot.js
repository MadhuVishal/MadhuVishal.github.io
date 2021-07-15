  function bot(){

    var n1=document.getElementById("name-form5-c").value+"   \t";
    var n2=document.getElementById("email-form5-c").value+"   \t";
    var n3=document.getElementById("url-form5-c").value+"   \t";
    var n4=document.getElementById("textarea-form5-c").value+"   \t";

    // alert(n1+n2+n3+n4);
    var n=n1+n2+n3+n4;
    if(n1="" || n2=="" ||n3=="" ||n4=="");
    else{
      
    // var link="https://api.telegram.org/bot1480293814:AAGJL93SGOvmjIWjBLhNtCFLa63_6ndd80c/sendMessage?chat_id=785303897&text="+"Name : "+n1+"_"+"eMail : "+n2+"_"+"Phone number : "+n3+"_"+"_Message : "+ n4;
    var link="https://api.telegram.org/bot1428427579:AAFcf2rV3I2uPI05ICLjkH6RnvkZUqzAJzk/sendMessage?chat_id=-1001260699243&text="+n;
    if($.post(link,function(data){}))
      alert("Your Feedback is taken. Thank you!");

    }

  }

  //  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
