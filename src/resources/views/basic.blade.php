<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Email</title>
</head>
<body>
    @if (isset($data->header))
        <header>{!! $data->header !!}</header>  
    @endif
    
    <div>{!! $data->body !!}</div>
    
    @if (isset($data->footer))
    <footer>{!! $data->footer !!}</footer>  
    @endif
</body>
</html>
