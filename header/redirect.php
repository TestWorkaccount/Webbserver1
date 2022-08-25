<?php
$do = isset($_GET['do']) ? $_GET['do'] : null;

switch($do) {
  case 'redirect':
    // Redirect to another page, perhaps a resultpage showing the result of a posted form
    // echo "<script>
    // window.alert('alert med window');
    // window.location.href='http://someplace.com';
    // </script>";
    
    header("Location: http://dbwebb.se/style");
    exit;
    break;
    
  case '404':
    // Generate HTTP response code 404 Not Found
    header("HTTP/1.0 404 Not Found");
    echo "This is a generated page with a 404 Not Found HTTP header, you may analyse the headerinformation with your browser to verify it.";
    exit;
    break;
    
  case '403':
    // Generate HTTP response code 403 Forbidden
    header("HTTP/1.0 403 Forbidden");
    echo "This is a generated page with a 403 Forbidden HTTP header, you may analyse the headerinformation with your browser to verify it.";
    exit;
    break;
    
  case 'pdf':
    // Download a pdf-file and name it downloaded.pdf
    header('Content-type: application/pdf');
    header('Content-Disposition: attachment; filename="downloaded.pdf"');
    readfile(__DIR__ . '/hello.pdf');
    exit;
    break;
    
  case 'zip':
    // Download a zip-file and name it downloaded.zip
    header('Content-type: application/zip');
    header('Content-Disposition: attachment; filename="downloaded2.zip"');
    readfile(__DIR__ . '/hejsan.zip');
    exit;
    break;

  default:
    ;
}

?>