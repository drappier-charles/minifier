<?
    header('Cache-Control: no-cache, must-revalidate');
    include "UglifyPHP/Uglify.php";
    include "UglifyPHP/JS.php";
    
    $JS = array();
    $uglify = new JS($_FILES['file']['tmp_name']);
    $idFile = uniqid();
    $uglify->minify('tmp/'.$idFile.'.js');
    $result = array();
    $result['success'] = 1;
    $result['text'] = file_get_contents('tmp/'.$idFile.'.js');
    $result['file'] = 'tmp/'.$idFile.'.js';
    
    header('Content-type: application/json');
    echo json_encode($result);
?>