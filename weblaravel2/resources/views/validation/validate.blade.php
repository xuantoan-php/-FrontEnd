<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <base href="{{ asset('') }}">
    <link rel="stylesheet" href="public/css/style.css">
    <link rel="stylesheet" href="public/css/bootstrap.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                @if(count($errors)>0)
                    @foreach($errors->all() as $error)
                        <div class="alert alert-danger" role="alert">
                            <strong>{{ $error }}</strong>
                        </div>
                    @endforeach               
                @endif
                <form action="" method="post">
                    @csrf
                    <h2>Login</h2>
                    <div class="form-group">
                        <label for="">Tên tài khoản</label>
                        <input type="text" name="tk" class="form-control" placeholder="tài khoản">
                        @if($errors->has('tk'))
                            <div class="alert alert-danger" role="alert">
                                <strong>{{ $errors->first('tk') }}</strong>
                            </div>
                            
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="">mật khẩu</label>
                        <input type="text" name="mk" class="form-control" placeholder="mật khẩu">
                        @if($errors->has('mk'))
                            <div class="alert alert-danger" role="alert">
                                <strong>{{ $errors->first('mk') }}</strong>
                            </div>
                            
                        @endif
                        <div class="row row-button">
                            <div class="col-md-6">
                                <button type="submit">Đăng nhập</button>
                            </div>
                            <div class="col-md-6">
                                <button type="reset">nhập lại</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>