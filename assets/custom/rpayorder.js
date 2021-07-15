function order()
{
    var p1=document.getElementById("small_rate").value*140;
    var p2=document.getElementById("medium_rate").value*150;
    var p3=document.getElementById("large_rate").value*160;
    var p4=document.getElementById("combo_rate").value*155;
    var o1=((document.getElementById("hy_small_rate").value*140)+(document.getElementById("hy_medium_rate").value*150)+(document.getElementById("hy_large_rate").value*160)*0.95);
    var o2=((document.getElementById("yr_small_rate").value*140)+(document.getElementById("yr_medium_rate").value*150)+(document.getElementById("yr_large_rate").value*160)*0.9);
    var total= p1+p2+p3+p4+o1+o2;
    if(total>0)
    {

    }
    else if(p1="" && p2=="" && p3=="" && p4=="" && o1="" && o2="")
    {
        alert("We request you to order anything!");
    }
    else if(p1<0 && p2<0 && p3<0 && p4<0 && o1<0 && o2<0)
    {
        alert("Order count can't be in negative, Right?");
    }

}
