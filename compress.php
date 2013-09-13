<?
    header('Cache-Control: no-cache, must-revalidate');
    include "UglifyPHP/Uglify.php";
    include "UglifyPHP/JS.php";
    $result = array();
    if(!empty($_FILES['file'])) {
        $JS = array();
        $uglify = new JS($_FILES['file']['tmp_name']);
        $idFile = uniqid();
        $uglify->minify('tmp/'.$idFile.'.js');
        $result['success'] = 1;
        $result['text'] = file_get_contents('tmp/'.$idFile.'.js');
        $result['file'] = 'tmp/'.$idFile.'.js';
    } else {
        $result['success'] = 0;
        $result['error'] = 'No Files!';
    }
    header("Access-Control-Allow-Origin: *");
    header('Content-type: application/json');
    echo json_encode($result);
?>
