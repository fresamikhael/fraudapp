<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <table class="table">
  <thead>
    <tr>
    
      <th scope="col">Name</th>
      <th scope="col">No Kasus</th>
    
    </tr>
  </thead>
  <tbody>

    @foreach ($datas as $data)
        @foreach ($data->fraud as $fraud )
            <tr>

      <td>{{ $data->name }}</td>
      <td>
          <form action="/getCobaDetail/{{ $fraud->no_kasus }}" method="GET">
              <button type="submit">
               {{ $fraud->no_kasus }}
        </button>  </form>
        
     </td>
 
    </tr>
        @endforeach
    
    @endforeach
  
    
  </tbody>
</table>
</body>
</html>