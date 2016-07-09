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
            form{
                background: grey;
                padding:20px;
                border-radius:10px;
            }
            input[type="submit"]{
                background: green;
                border:0px;
                border-radius:5px;
                padding: 20px;

            }
        </style>
    </head>
    <body>
    @foreach($gallery->all() as $gallery)
    <ul>
        <li>{{$gallery->path_large}}<a href="/delete/{{$gallery->id}}" class="btn btn-danger">Delete </a></li>
    </ul>
    @endforeach
        <div class="container">
            <div class="content">
                     
                <h1>File Upload</h1>
                <form action="/upload" method="post" enctype="multipart/form-data">
                <label>Select image to upload</label>
                  <input type="file"  name="file" id="file"/>
                  <input type="submit" value="upload" name="submit"></input>

                  
                  <input type="hidden" value="{{csrf_token() }}" name="_token"></input>

                   {{-- <button type="submit" id="delete-task-{{ $delete->id }}" class="btn btn-danger"> --}}
                </form>
            </div>
        </div>
    </body>
</html>