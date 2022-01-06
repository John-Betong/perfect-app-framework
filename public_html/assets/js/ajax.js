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
  // dump(xhttp);
  // xhttp.open("GET", "assets/docs/ajax.php?doc=" + url);
  xhttp.open("GET", "assets/docs/" + url);
  xhttp.send();
}

function dump(obj) {
  var out = '';
  for (var i in obj) {
      out += i + ": " + obj[i] + "\n";
}

alert(out);

// or, if you wanted to avoid alerts...

  var pre = document.createElement('pre');
  pre.innerHTML = out;
  document.body.appendChild(pre)
}
