<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Email</title>
</head>
<body>
    @isset($data->header)
        <header>{{ $data->header }}</header>  
    @endisset

    <div>{{ $data->body }}</div>
    
    @isset($data->footer)
        <footer>{{ $data->footer }}</footer>  
    @endisset
</body>
</html>
