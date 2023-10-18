<!-- @extends('layouts.root')
@section('content')
<body class="page-login">
   <div class="wrapper">
      <section id="main" class="section content animated fadeInDown delayed_02s">
         <img class="logo-form" src="/assets/img/logo.png">
         @if($systemSetting->login_page_message)
            <div>
               {!! html_entity_decode($systemSetting->login_page_message) !!}
            </div>
         @endif
         <h1 class="fake-half">{{trans('actions.loginMessage', ['ispName' => config("customer_portal.company_name")],$language)}}</h1>
         {!! Form::open(['action' => '\App\Http\Controllers\AuthenticationController@authenticate']) !!}
	     <input type="hidden" name="language" value="{{$language ?? 'en'}}">
         <div class="label label-text">
            <label for="input-email">{{trans("root.username",[],$language)}}</label>
            {!! Form::text("username",null,['placeholder' => trans("root.username",[],$language), 'id' => 'username']) !!}
         </div>
         <div class="label label-text">
            <label for="input-password">{{trans("root.password",[],$language)}}</label>
            {!! Form::password("password",['placeholder' => trans("root.password",[],$language), 'id' => 'password']) !!}
         </div>
         <div class="half vcenter label">
            <div>
               <button type="submit">
                  {{trans("actions.login",[],$language)}}
               </button>
            </div>
            <div class="right"><a href="/reset" class="forgot">{{trans("headers.forgotUsernameOrPassword",[],$language)}}</a></div>
         </div>
         {!! Form::close() !!}
         <small><a href="{{action([\App\Http\Controllers\AuthenticationController::class, 'showRegistrationForm'])}}">{{trans("root.register",[],$language)}}</a></small>
         <form class="form-group">
            <select id="language" name="language" class="form-control languageSelector">
            @foreach(getAvailableLanguages($language) as $key => $value)
            <option value="{{$key}}" @if($language == $key) selected @endif>{{$value}}</option>
            @endforeach
            </select>
         </form>
      </section>
   </div>
</body>
<script nonce="{{ csp_nonce() }}">
window.onbeforeunload = function(e){
    document.getElementById('main').className = 'section content animated fadeOutUp';
}
</script>
@endsection
@section('additionalJS')
<script type="text/javascript" src="/assets/libs/js-validation/jsvalidation.min.js"></script>
{!! JsValidator::formRequest('App\Http\Requests\AuthenticationRequest') !!}
@endsection -->


<!doctype html>
<title>Site Maintenance</title>
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
<style>
  html, body { padding: 0; margin: 0; width: 100%; height: 100%; }
  * {box-sizing: border-box;}
  body { text-align: center; padding: 0; background-image: linear-gradient(to right, #27469a, #272360); color: #fff; font-family: Open Sans; }
  h1 { font-size: 50px; font-weight: 100; text-align: center;}
  body { font-family: Open Sans; font-weight: 100; font-size: 20px; color: #fff; text-align: center; display: -webkit-box; display: -ms-flexbox; display: flex; -webkit-box-pack: center; -ms-flex-pack: center; justify-content: center; -webkit-box-align: center; -ms-flex-align: center; align-items: center;}
  article { display: block; width: 700px; padding: 50px; margin: 0 auto; }
  a { color: #fff; font-weight: bold;}
  a:hover { text-decoration: none; }
  svg { width: 75px; margin-top: 1em; }
</style>

<article>
		<img src="data:image/png;base64,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" alt="Italian Trulli">
    <h1>We&rsquo;ll be back soon!</h1>
    <div>
        <p>We&rsquo;re performing some maintenance at the moment. If you need to you can always reach out to us at <a href="http://www.liveoakfiber.com/">LiveOak Fiber</a> for updates, otherwise we&rsquo;ll be back up shortly! We appreciate your patience!</p>
        <p>&mdash; The LiveOak Fiber Team</p>
    </div>
</article>