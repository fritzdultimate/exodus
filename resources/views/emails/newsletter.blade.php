<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<body style="margin: 0; padding: 0;">
    <div>
        <div style="width: 100%; background: rgb(22, 22, 22); padding: 5px 10px; display: flex; justify-content: center; align-items: center;">
            <center>
                <img src="{{ asset('img/exodus.png?ref=4') }}" style="width: 35px; margin: auto; display: block;">
                <span style="font-size: 28px; font-weight: bold; color: white; padding-left: 10px; margin: auto; display: block;">Exodus</span>
            </center>
        </div>

        <p style="padding-left: 5px; padding-right: 5px;">
            {!! $details['message'] !!}
        </p>
    </div>
</body>
</html>