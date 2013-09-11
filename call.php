<?

    $postdata = http_build_query(
        array(
            'file' => array('tmpname'=>array('script.js','script2.js'))
        )
    );
    
    $opts = array('http' =>
        array(
            'method'  => 'POST',
            'header'  => 'Content-type: application/x-www-form-urlencoded',
            'content' => $postdata
        )
    );
    
    $context  = stream_context_create($opts);
    
    $result = file_get_contents('http://example.com/submit.php', false, $context);

?>