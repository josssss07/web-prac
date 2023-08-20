function formValidation()
{
    flag=true;
    var uid = document.getElementById('userid');
    //alert("uid value"+uid.value);
    var passid = document.getElementById('passid');
    var uname = document.getElementById('uname');

    if(userid_validation(uid,5,12))
    {
        flag=true;
    }
    else
        flag=false;


    if(passid_validation(passid,7,12))
    {
        flag=true;
    }
    else
        flag=false;

    
    if(allAlpha(uname))
    {
        alert("validated");
    }
    return false;
}
function userid_validation(uid,m_min,m_max)
{
    var uid_len = uid.value.length;
    alert("length = "+uid_len);
    if (uid_len == 0 || uid_len >= m_max || uid_len < m_min)
    {
        //alert("user id shouldnt be empty/ length be betweeen"+m_min+"to"+m_max);
        document.getElementById('erroruname').innerHTML="this is an invalid uid";
        uid.focus();
        return false;
    }

    return true;
}

function passid_validation(passid,mx,my)
{
    var passid_len = passid.value.length;
    //alert("length = "+uid_len);
    if (passid_len == 0 || passid_len >= my || passid_len < mx)
    {
        alert("password shouldnt be empty/ length be betweeen"+mx+"to"+my)
        passid.focus();
        return false;
    }

    return true;
} 
function allAlpha(uname)
{
    var letters = /^[A-Za-z]+$/;
    if(uname.value.match(letters))
    {
        return true;
    }
    else{
        //alert("username must have alphabet characters only");
        document.getElementById('errorname').innerHTML="this is invalid username";
        uname.focus();
        return false;
    }
}