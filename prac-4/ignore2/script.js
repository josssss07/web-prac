function formValidation()
{
    
    var uid = document.getElementById('userid');
    var passid = document.getElementById('passid');
    var uname = document.getElementById('username');
    var uadd = document.getElementById('address');
    var ucountry = document.getElementById('country');
    //alert(uname.value);

    //alert("Inside formValidation uid value"+uid.value);

    if(userid_validation(uid,5,12))
    {   
        if(passid_validation(passid,7,12))                  
        {
            if(allAlpha(uname))
            {
                if(alphanumeric(uadd))
                { 
                    if(countryselect(ucountry))
                    {
                         alert("validated");
                    }
                }
            }
             
        }
    }
    return false;
}
//-----------------------------------------------------------
//user id validator function
function userid_validation(uid,m_min,m_max)
{
    var uid_len = uid.value.length;
    // alert("Inside user_id validator");
    if (uid_len == 0 || uid_len >= m_max || uid_len < m_min)    
    {
        alert("User Id should not be empty / length be between "+m_min+" to "+m_max);
        document.getElementById('errorname').innerHTML="this is an invalid uid";
        uid.focus();
        return false;
    }
    return true;
}
//------------------------------------------------------
//password id validator function
function passid_validation(passid,mx,my)
{
    alert("Inside pass_id validator");
    var passid_len = passid.value.length;
    if (passid_len == 0 ||passid_len >= my || passid_len < mx)
    {
        alert("Password should not be empty / length be between "+mx+" to "+my);
        document.getElementById('errorpass').innerHTML="this is an invalid password";
        passid.focus();
        return false;
    }
    return true;
}
//-----------------------------------------------------------
function allAlpha(uname)
{ 
    var letters = /^[A-Za-z]+$/;
    if(uname.value.match(letters))
    {
        return true;
    }
    else
    {
        alert('Username must have alphabet characters only');
        document.getElementById('erroruname').innerHTML="this is an invalid user name";
        uname.focus();
        return false;
    }
}
//----------------------------------------------
//user address
function alphanumeric(uadd)
{ 
    var letters = /^[0-9a-zA-Z\s,]+$/;
    
    if(uadd.value.match(letters))
    {
        return true;
    }
    else
    {
        alert('User address must have alphanumeric characters only');
        document.getElementById('erroraddress').innerHTML="this is an invalid address";
        uadd.focus();
        return false;
    }
}
//------------------------------------------------------------------
function countryselect(ucountry)
{
    if(ucountry.value == "Default")
    {
     alert('Select your country from the list');
     document.getElementById('errorcountry').innerHTML="this is an invalid address";     
     ucountry.focus();
     return false;
    }
    else
    {
    return true;
    }
}