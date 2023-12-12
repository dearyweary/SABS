<?php
header("Cache-Control: no-cache, must-revalidate"); // HTTP/1.1
header("Expires: Sat, 26 Jul 1997 05:00:00 GMT"); // Date in the past
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stick Arena</title>
    <style>
        body {
            background-color: #333; /* Dark grey background color */
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh; /* 100% of the viewport height */
            margin: 0;
        }

        object {
            width: 550px;
            height: 400px;
        }
    </style>
</head>
<body>

<object width="550" height="400">
    <param name="movie" value="sab.swf">
    <embed src="sab.swf" width="550" height="400">
</object>

</body>
</html>