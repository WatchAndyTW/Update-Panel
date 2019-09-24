{{-- Pterodactyl - Panel --}}
{{-- Copyright (c) 2015 - 2017 Dane Everitt <dane@daneeveritt.com> --}}

{{-- This software is licensed under the terms of the MIT license. --}}
{{-- https://opensource.org/licenses/MIT --}}
@extends('layouts.auth')

@section('title')
    Login
@endsection

@section('content')

	<div class="limiter">
		<div class="container-login100">
				<div class="row">
					<div class="col-sm-offset-11 col-xs-offset-9 col-sm-14 col-xs-18 mx-auto">
						@if (count($errors) > 0)
							<div class="alert alert-danger">
								<button type="button" class="close" data-dismiss="alert" aria-label="Close" id="authenError" data-toggle="tooltip"><span aria-hidden="true">&times;</span></button>
								@lang('auth.auth_error')<br><br>
								<ul>
									@foreach ($errors->all() as $error)
										<li>{{ $error }}</li>
									@endforeach
								</ul>
							</div>
						@endif
						@foreach (Alert::getMessages() as $type => $messages)
							@foreach ($messages as $message)
								<div class="callout callout-{{ $type }} alert-dismissable" role="alert">
									<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
									{!! $message !!}
								</div>
							@endforeach
						@endforeach
					</div>
				</div>
			<div class="wrap-login100">
				<div class="login100-pic js-tilt" data-tilt>
					<a href="{{ route('auth.login') }}" style="cursor: default;"><img src="/logo.png" alt="IMG"></a>
				</div>
		
				
					<span class="login100-form-title">SteakHosting面板註冊</span>
					
					<label for="email" class="control-label">電子郵件</label>
					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<input type="text" name="user" class="form-control input-lg input100" value="{{ old('email') }}" required placeholder="@lang('strings.user_identifier')" autofocus>
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
					</div>
					
					<label for="username" class="control-label">使用者名稱</label>
					<div class="wrap-input100 validate-input" data-validate = "請輸入您的使用者名稱">
						<input type="text" autocomplete="off" name="firstname" class="form-control input-lg input100" value="{{ old('username') }}" required placeholder="@lang('strings.user_identifier')" autofocus>
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
					</div>
					
					<label for="name_first" class="control-label">名字</label>
					<div class="wrap-input100 validate-input" data-validate = "請輸入您的名字">
						<input type="text" autocomplete="off" name="firstname" class="form-control input-lg input100" value="{{ old('name_first') }}" required placeholder="@lang('strings.user_identifier')" autofocus>
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
					</div>
					
					<label for="name_first" class="control-label">姓氏</label>
					<div class="wrap-input100 validate-input" data-validate = "請輸入您的姓氏">
						<input type="text" autocomplete="off" name="firstname" class="form-control input-lg input100" value="{{ old('name_last') }}" required placeholder="@lang('strings.user_identifier')" autofocus>
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
					</div>
					
					<label for="pass" class="control-label">密碼</label>
					<div class="wrap-input100 validate-input" data-validate = "請輸入密碼">
						<input type="password" name="password" class="form-control input-lg input100" required placeholder="@lang('strings.password')">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>
					
					<div class="col-md-6">
            <div class="box">
                <div class="box-header with-border">
                    <h3 class="box-title">使用條款</h3>
                </div>
                <div class="box-body">
                    <div class="form-group col-md-12">
                        <label for="root_admin" class="control-label">同以使用</label>
                        <div>
                            <select name="root_admin" class="form-control">
                                <option value="1">同意</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
        </div>
					
					<div class="container-login100-form-btn">
						{!! csrf_field() !!}
						<button type="submit" class="login100-form-btn btn btn-success btn-sm g-recaptcha pterodactyl-login-button--main" @if(config('recaptcha.enabled')) data-sitekey="{{ config('recaptcha.website_key') }}" data-callback='onSubmit' @endif>註冊</button>
					</div>

					<div class="text-center p-t-90">
						<a class="txt2" href="#">
							<p class="small login-copyright text-center">Copyright &copy; 2015 - {{ date('Y') }} <a href="https://pterodactyl.io/">Pterodactyl Software</a>. Theme by HookDonn_ && <a href="https://discord.gg/X8EcjFh">SteakHosting.</p>
						</a>
					</div>
					<div class="text-center p-t-5">
						<a class="txt2" href="#">
            				<strong><i class="fa fa-fw {{ $appIsGit ? 'fa-git-square' : 'fa-code-fork' }}"></i></strong> {{ $appVersion }} <strong><i class="fa fa-fw fa-clock-o"></i></strong> {{ round(microtime(true) - LARAVEL_START, 3) }}s
						</a>
					</div>
			</div>
		</div>
	</div>
@endsection

@section('scripts')
    @parent
    @if(config('recaptcha.enabled'))
        <script src="https://www.google.com/recaptcha/api.js" async defer></script>
        <script>
        function onSubmit(token) {
            document.getElementById("loginForm").submit();
        }
        </script>
     @endif
@endsection