window.onload=timeout;
function timeout()
{
    window.setTimeout("redirect()",10000)
}

function redirect()
{
    window.location="DS-Signin.php";
    return
}

window.onload=timeout1;

function timeout1()
{
    window.setTimeout("redirect1()",10000)
}

function redirect1()
{
    window.location="DS-Dashboard.php";
    return
}