
    const btn1 = document.getElementById("btnedit");
    const btn2 = document.getElementById("btncancel");
    const targetDiv1 = document.getElementById("updatepage");
    const targetDiv2 = document.getElementById("ViewEmployerProfile");
    btn1.onclick = function () 
    {
     targetDiv1.style.display = "block";
     targetDiv2.style.display = "none";
     btn1.style.display = "none";
     btn2.style.display = "block";
    }

    btn2.onclick = function () 
    {
     targetDiv1.style.display = "none";
     targetDiv2.style.display = "block";
     btn1.style.display = "block";
     btn2.style.display = "none";
    }
