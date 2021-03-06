<!DOCTYPE html>
<html>
  <head>
    <title>Using AJAX - to Consume a JSON Web Service</title>
    <link rel="stylesheet" type="text/css" href="/style.css">
  </head>
  <body>
  	
    <header id='page_header'>
      <?php include $_SERVER['DOCUMENT_ROOT'] . '/modules/navigation.php';  ?>   
    </header>

  <main> 
    
  	<h1>8. AJAX interactions with remote services</h1>

   <span id="ajaxButton">
  Test me!
  </span>
<script type="text/javascript">
(function() {
  var httpRequest;
  document.getElementById("ajaxButton").onclick = function() { makeRequest('/test/test_ajax.html'); };

  function makeRequest(url) {
    httpRequest = new XMLHttpRequest();

    if (!httpRequest) {
      alert('Giving up :( Cannot create an XMLHTTP instance');
      return false;
    }
    httpRequest.onreadystatechange = alertContents;
    httpRequest.open('GET', url);
    httpRequest.send();
  }

  function alertContents() {
    if (httpRequest.readyState === XMLHttpRequest.DONE) {
      if (httpRequest.status === 200) {
        alert(httpRequest.responseText);
      } else {
        alert('There was a problem with the request.');
      }
    }
  }
})();
</script>

  </main>
  </body>
</html>