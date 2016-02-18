<!DOCTYPE html>
<html>
  <head>
    <title>HTML5 Tags - Video, Audio, Camera, Canvas, etc.</title>
  </head>
  <body>

    <header id='page_header'>
      <?php include $_SERVER['DOCUMENT_ROOT'] . '/modules/navigation.php';  ?>   
    </header>

  <main>  

    <h1>10. HTML5 Tags - Video, Audio, Camera, Canvas, etc.</h1>

<h2>Video</h2>

  <video width="400" controls>
    <source src="/media/test-run.mp4" type="video/mp4">
    Your browser does not support HTML5 video.
  </video>

  <p><a href="https://youtu.be/gv2w5A5rno8" target="_blank">Test Run on Youtube</a></p>

<h2>Audio</h2>
  
  <p>Test to hear Sputnik!</p>
  <audio controls>
    <source src="/media/Sputnik1.mp3" type="audio/mpeg">
  Your browser does not support the audio element.
  </audio>

<h2>Camera</h2>
  <p>Picture</p>
  <input type="file" name="file" accept="image/*" capture="camera" />

  <p>Video</p>
  <input type="file" accept="video/*;capture=camcorder">
  <input type="file" accept="audio/*;capture=microphone">

   </main>  
  </body>
</html>