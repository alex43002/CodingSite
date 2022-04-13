

function tabChange(site)
{
    location.href = site.toLowerCase();
}

//Open and close function
var isOpened = true;

function sideBarFunctionality()
{
    console.log(isOpened);
    if(isOpened)
    {
        document.getElementById('SidePanel').style.width = '15%';
        isOpened = false;
    }
    else if(!isOpened)
    {
        document.getElementById('SidePanel').style.width = '7px';
        isOpened = true;
    }
}
