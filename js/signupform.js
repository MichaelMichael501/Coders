//for page button hide/show
    const targetDiv1 = document.getElementById("firstPage");
    const targetDiv2 = document.getElementById("secondPage");
    const targetDiv3 = document.getElementById("thirdPage");
    const targetDiv4 = document.getElementById("fourthPage");
    const targetDiv5 = document.getElementById("fifthPage");
    const targetDiv6 = document.getElementById("sixthPage");
    const btn1 = document.getElementById("toggle1");
    const btn2 = document.getElementById("toggle2");
    var fname = document.getElementById("fname");
    var lname = document.getElementById("lname");
    var age = document.getElementById("age");
    var bday = document.getElementById("bday");
    var paddress = document.getElementById("paddress");
    var paddresscity = document.getElementById("paddresscity");
    var paddressstate = document.getElementById("paddressstate");
    var caddress = document.getElementById("caddress");
    var caddresscity = document.getElementById("caddresscity");
    var caddressstate = document.getElementById("caddressstate");
    var contact = document.getElementById("contact");
//when checkbox/same as above checked is 
const check = document.getElementById("addresspaste");
check.onclick=function()
{
    const add = document.getElementById("paddress").value;
    const city = document.getElementById("paddresscity").value;
    const state = document.getElementById("paddressstate").value;
    document.getElementById("caddress").value=add;
    document.getElementById("caddresscity").value=city;
    document.getElementById("caddressstate").value=state;
}
const clear = document.getElementById("clear");
clear.onclick=function()
{
  document.getElementById("caddress").value="";
  document.getElementById("caddresscity").value="";
  document.getElementById("caddressstate").value="";
}
//auto date for fileddate  field
n =  new Date();
y = n.getFullYear();
m = n.getMonth() + 1;
d = n.getDate();
document.getElementById("date").value = m + "/" + d + "/" + y;
