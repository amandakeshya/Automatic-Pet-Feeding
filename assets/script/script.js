function ubahstatus(value)
{
    if(value == true) value = "Buka";
    else value = "Tutup";
    document.getElementById('status').innerHTML = value;

    var xmlhttp = new XMLHttpRequest();

    xmlhttp.onreadystatechange = function()
    {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200)
        {
            document.getElementById('status').innerHTML = xmlhttp.responseText;
        }
    }
    xmlhttp.open("GET", "../../webapi/api/create.php?stat=" + value, true);
    xmlhttp.send();
}
