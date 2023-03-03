    const targetDiv1 = document.getElementById("firstPage");
    const targetDiv2 = document.getElementById("secondPage");
    const btn1 = document.getElementById("btn1");
    const btn2 = document.getElementById("btn2");
    var pagenextandback=1;

   btn1.onclick = function ()
    {
        targetDiv1.style.display = "none";
        targetDiv2.style.display = "block";
        btn1.style.display="none";
        btn2.style.display="block";
      }
      btn2.onclick = function ()
    {
        targetDiv1.style.display = "block";
        targetDiv2.style.display = "none";
        btn2.style.display="none";
        btn1.style.display="block";
      }