<!DOCTYPE html>
<html>
  <head>
    <title>AJAX interactions with remote services</title>
  </head>
  <body>
    
    <header id='page_header'>
      <?php include $_SERVER['DOCUMENT_ROOT'] . '/modules/navigation.php';  ?>   
    </header>

  <main> 
    
    <h1>8. AJAX interactions with remote services</h1>

   <p>Content coming soon.</p>

<!--   <span id="ajaxButton" style="cursor: pointer; text-decoration: underline">
    Make a request
  </span> -->

  <label>Your name: 
  <input type="text" id="ajaxTextbox" />
</label>
<span id="ajaxButton" style="cursor: pointer; text-decoration: underline">
  Make a request
</span>

<script type="text/javascript">
(function() {
  var httpRequest;
  document.getElementById("ajaxButton").onclick = function() { 
    var userName = document.getElementById("ajaxTextbox").value; 
    makeRequest('/test/test_ajax.php',userName); };

  function makeRequest('http://cit261-portfolio.jenjoystudio.com/test/test_ajax.php', userName) {
    httpRequest = new XMLHttpRequest();

    if (!httpRequest) {
      alert('Giving up :( Cannot create an XMLHTTP instance');
      return false;
    }
    httpRequest.onreadystatechange = alertContents;
    httpRequest.open('POST', 'http://cit261-portfolio.jenjoystudio.com/test/test_ajax.php');
    httpRequest.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded'); //I think the issue lies with this bit of code.
    httpRequest.send('userName=' + encodeURIComponent(userName));
  }

  function alertContents() {
    if (httpRequest.readyState === XMLHttpRequest.DONE) {
      if (httpRequest.status === 200) {
        var response = JSON.parse(httpRequest.responseText);
        alert(response.computedString);
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