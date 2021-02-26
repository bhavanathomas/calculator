function subbtnclickadd()
{
    var getnum1=parseFloat(document.getElementById("num1").value);
    var getnum2= parseFloat (document.getElementById("num2").value);
    var result= getnum1+getnum2;
    document.getElementById("output").innerHTML=result
}

function subbtnclicksub()
{
    var getnum1=parseFloat(document.getElementById("num1").value);
    var getnum2= parseFloat (document.getElementById("num2").value);
    var result= getnum1-getnum2;
    document.getElementById("output").innerHTML=result
}

function subbtnclickmul()
{
    var getnum1=parseFloat(document.getElementById("num1").value);
    var getnum2= parseFloat (document.getElementById("num2").value);
    var result= getnum1*getnum2;
    document.getElementById("output").innerHTML=result
}

function subbtnclickdiv()
{
    var getnum1=parseFloat(document.getElementById("num1").value);
    var getnum2= parseFloat (document.getElementById("num2").value);
    var result= getnum1/getnum2;
    document.getElementById("output").innerHTML=result
}