function calcAtt()
        {
            la=parseInt(document.getElementById("LecAtt").value);
           // alert(la);
            tl=parseInt(document.getElementById("TotLec").value);

            result = (la/tl)*100;

            alert("percentage=" + result+"%");

            document.getElementById("lblresult").innerHTML="Total Percentage="+result+"%";

        }
function calcCGPA()
{
    semo=parseFloat(document.getElementById("sem1").value);
    semt=parseFloat(document.getElementById("sem2").value);
    cgpa=(semo+semt)/2;
    document.getElementById("cgparesult").innerHTML="CGPA="+cgpa;
}