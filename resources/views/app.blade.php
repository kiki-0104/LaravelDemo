<!DOCTYPE html>

<html>

    <head>

        <meta charset="utf-8">

        <title>Hello world!!!</title>

    </head>

    <body>

      Hello World!!!

    </body>

</html> 



Route::get('/hello-world', function () {

    return view('hello_world');

}); 