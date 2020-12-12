<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Facebook News Feed</title>
</head>
<body>
    @php
        
    @endphp
  {{-- {{dd($feeds['data'])}} --}}

  @foreach ($feeds['data'] as $item)

@if (isset($item['message']))
<p>{{$item['message']}}</p>
@endif


  
      
  @endforeach
    
</body>
</html>