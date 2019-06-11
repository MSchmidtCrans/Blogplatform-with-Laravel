
<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Blog welcome page</title>

    </head>
    <body>

        <h1>Welkom op mijn blog pagina</h1></br>
            
    

    <form  method="post"  action="/blog">

    @csrf
    
    <textarea name="blogtext" id="" cols="60" rows="15" placeholder="Type uw blog"></textarea></br>

    <button type="submit">Opslaan</button>
    
    </form>

    </body>
</html>
