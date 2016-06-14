<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>

        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">

        <style>
            html, body {
                height: 100%;
            }

            body {
                margin: 0;
                padding: 0;
                width: 100%;
                display: table;
                font-weight: 100;
                font-family: 'Lato';
            }

            .container {
                text-align: center;
                display: table-cell;
                vertical-align: middle;
            }

            .content {
                text-align: center;
                display: inline-block;
            }

            .title {
                font-size: 96px;
            }
        </style>

        <script type="text/javascript">
		var conn = new WebSocket('ws://localhost:8080');
		conn.onopen = function(e)
		{
    			console.log("Connection established!");
		};

		conn.onmessage = function(e)
		{
    			console.log(e.data);
    			document.getElementById("quiz_messages").innerHTML += e.data + "<br />";
		};

		function sendMessage(message)
		{
			conn.send(message);
		}
        </script>
    </head>
    <body>
        <div class="container">
            <div class="content">
                <div class="title">Laravel 5</div>

		<input id="message" type="text" /><input type="button" value="Send" onclick="sendMessage(document.getElementById('message').value);" />

                <div id="quiz_messages"></div>
            </div>
        </div>
    </body>
</html>
