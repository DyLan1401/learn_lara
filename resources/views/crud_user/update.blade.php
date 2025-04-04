@extends('dashboard')

@section('content')
<style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background-color: #f0f2f5;
        }
        .signup-container {
            background-color: white;
            border: 1px solid #ddd;
            border-radius: 8px;
            padding: 30px;
            width: 350px;
            box-shadow: 0 4px 6px rgba(0,0,0,0.1);
        }
        .signup-container h2 {
            text-align: center;
            margin-bottom: 20px;
            color: #333;
        }
        .form-group {
            margin-bottom: 15px;
        }
        .form-group label {
            display: block;
            margin-bottom: 5px;
            color: #666;
        }
        .form-group input {
            width: 100%;
            padding: 8px;
            border: 1px solid #ddd;
            border-radius: 4px;
        }
        .signup-button {
            width: 100%;
            padding: 10px;
            background-color: #1877f2;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        .footer {
            text-align: center;
            margin-top: 20px;
            color: #888;
            font-size: 0.8em;
        }
    </style>
</head>
<body>
    <div class="signup-container">
        <h2>Màn hình cấp nhật</h2>
        <form action="{{ route('user.postUpdateUser') }}" method="POST">
                                @csrf
                                <input name="id" type="hidden" value="{{$user->id}}">
                                <div class="form-group mb-3">
                                    <input type="text" placeholder="Name" id="name" class="form-control" name="name"
                                           value="{{ $user->name }}"
                                           required autofocus>
                                    @if ($errors->has('name'))
                                        <span class="text-danger">{{ $errors->first('name') }}</span>
                                    @endif
                                </div>

                                <div class="form-group mb-3">
                                    <input type="text" placeholder="Email" id="email_address" class="form-control"
                                           value="{{ $user->email }}"
                                           name="email" required autofocus>
                                    @if ($errors->has('email'))
                                        <span class="text-danger">{{ $errors->first('email') }}</span>
                                    @endif
                                </div>
                                <div class="form-group mb-3">
                                    <input type="text" placeholder="like" id="like" class="form-control"
                                           value="{{ $user->like }}"
                                           name="like" required autofocus>
                                    @if ($errors->has('like'))
                                        <span class="text-danger">{{ $errors->first('like') }}</span>
                                    @endif
                                </div>
                                <div class="form-group mb-3">
                                    <input type="text" placeholder="github" id="github" class="form-control"
                                           value="{{ $user->github }}"
                                           name="github" required autofocus>
                                    @if ($errors->has('github'))
                                        <span class="text-danger">{{ $errors->first('github') }}</span>
                                    @endif
                                </div>
                                <div class="form-group mb-3">
                                    <input type="password" placeholder="Password" id="password" class="form-control"
                                           name="password" required>
                                    @if ($errors->has('password'))
                                        <span class="text-danger">{{ $errors->first('password') }}</span>
                                    @endif
                                </div>

                                <div class="d-grid mx-auto">
                                    <button type="submit" class="btn btn-info btn-block">Update</button>
                                </div>
                            </form>
        <div class="footer">
            Lập trình web @2024
        </div>
    </div>
    
@endsection