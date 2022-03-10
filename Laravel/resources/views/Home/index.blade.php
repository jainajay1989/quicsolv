<h1>Create Post</h1>
 
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

{{ Form::open(array('url' => '/store', 'files' => true)) }}
{{ Form::token() }}

{{Form::label('name', 'Name');}}
{{Form::text('name')}}
{{ $errors->first('name') }}
<br/>
{{Form::label('email', 'E-Mail');}}
{{Form::text('email')}}
{{ $errors->first('email') }}

<br/>
{{Form::label('password', 'Password');}}
{{Form::password('password')}}
{{ $errors->first('password') }}

<br/>
{{Form::label('confirm_password', 'Confirm Password');}}
{{Form::password('confirm_password')}}
<br/>
{{Form::label('phone', 'Phone');}}
{{Form::text('phone')}}
<br/>
{{Form::label('age', 'Age');}}
{{Form::text('age')}}
<br/>
{{Form::label('address', 'Address');}}
{{Form::text('address')}}
<br/>
{{Form::label('city', 'City');}}
{{Form::select('city', array('L' => 'Large', 'S' => 'Small'));}}
<br/>
{{Form::label('state', 'State');}}
{{Form::select('state', array('L' => 'Large', 'S' => 'Small'));}}
<br/>
{{Form::label('country', 'Country');}}
{{Form::select('country', $countries);}}
<br/>
{{Form::label('pincode', 'Pincode');}}
{{Form::text('pincode')}}
<br/>

{{Form::label('Profile Picture', 'Profile Picture');}}
{{Form::file('profile_picture')}}
<br/>
{{Form::submit('Click Me!');}}