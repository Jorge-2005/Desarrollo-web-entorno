<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>VIDEOS JUEGOS</h1>
    <table>
        
        <thead>
            <tr>
                <th>Videojuego</th>
                <th>Pegi</th>
                <th>Genero</th>
            </tr>
        </thead>
        <tbody>
            @foreach($videojuegos as $videojuego)
                <tr>
                    <td>{{$videojuego[0]}}</td>
                    <td>{{$videojuego[1]}}</td>
                    <td>{{$videojuego[2]}}</td>
                </tr>    
            
            @endforeach
        </tbody>
    </table>


    
       
    
</body>
</html>