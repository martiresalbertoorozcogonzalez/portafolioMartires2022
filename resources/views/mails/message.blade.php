<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    
</head>
<body>
    
    <div>
        <p>Recibiste un mensaje de: {{ $msg['name']}} - {{ $msg['email']}}</p>
        <p><strong>Asunto:</strong> {{ $msg['subject']}}</p>
        <p><strong>Contenido</strong> {{ $msg['body']}}</p>        
    </div>

</body>
</html> 