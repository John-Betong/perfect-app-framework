function test(url="<?= date('H:i:s');?>" )
{
  const xmlhttp = new XMLHttpRequest();
  xmlhttp.onload = function() 
  {
    // document.getElementById("txtHint").innerHTML = this.responseText;
  }

  const xhttp = new XMLHttpRequest();
  xhttp.onload = function() {
    document.getElementById("location").innerHTML =
    this.responseText;
  }
  xhttp.open("GET", "assets/docs/ajax.php?doc=" + url);
  xhttp.send();
}