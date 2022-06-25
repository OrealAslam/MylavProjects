    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- bootstrap CDN -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <title>AJAX in Laravel</title>
    </head>
    <body>
        @if(isset($data))
            {{$data}}
        @endif
        <div class="container p-1">
            <h2 class="text-center"><span class="text-danger">Laravel</span> Registration Script</h2>
            <br><br>
            <div class="row">
                <div class="col-md-8 offset-md-2">
                    <form id="regForm">
                        @csrf
                        <label for="name">Enter name</label>
                        <input type="text" name="name" id="name" value="{{ old('name') }}" class="form-control">
                        <!-- check error -->
                        <small id="ename" class="text-danger"></small>
                        <br><br>
                        <label for="email">Enter email</label>
                        <input type="email" name="email" id="email" value="{{ old('email') }}" class="form-control">
                        <!-- check error -->
                        @if($errors->any())
                            @foreach($errors->get('email') as $message)
                            <small id="eemail" class="text-danger">{{ $message }}</small>
                            @endforeach
                        @endif
                        <small id="eemail" class="text-danger"></small>
                        <br><br>

                        <label for="pass">Enter password</label>
                        <input type="password" name="pass" id="pass" value="{{ old('pass') }}" class="form-control">
                        <!-- check error -->
                        <small id="epass" class="text-danger"></small>
                        <br><br>

                        <button type="submit" name="register" id="register" class="btn btn-primary">Register</button>
                        <small id="formResponce"></small>
                    </form>
                </div>
            </div>
        </div>

        <!-- link to external Js -->
        <script src="js/jquery.js"></script>
        <script src="js/script.js"></script>
    </body>
    </html>