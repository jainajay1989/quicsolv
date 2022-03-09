<form method="post" action="{{route('order.save', ['id'=>1,'name'=>'Ajay'])}}">
    <input type="hidden" name="_token" value="{{ csrf_token() }}" />
    <input type="text" name="name" />
    <input type="text" name="email" />
    <input type="submit" value="Add" />
</form>
<?php if($age >= 20) { ?>
<p>Name: {{ $name }}</p>
<?php } ?>

@if($age >= 20)
<p>Name: {{ $name }}</p>
@endif

<table>
@foreach($orders as $order) 
<tr>
    <td>{{ $order->name }}</td>
    <td>{{ $order->email }}</td>
</tr>
@endforeach
</table>


<table>
@forelse ($users as $user)
    <tr>
    <td>{{ $order->name }}</td>
    <td>{{ $order->email }}</td>
</tr>
@empty
<tr><td>{{ Lang::get('validation.NO_USER') }}</td></tr>
@endforelse
</table>


<table>
<?php if(empty(!$users)) { foreach($users as $user) { ?>
    <tr>
    <td>{{ $order->name }}</td>
    <td>{{ $order->email }}</td>
</tr>
<?php } } else { ?>
    <tr>
    <td>No user</td>
</tr>
<?php } ?>

<?php echo "hdfdf"; ?>
@php echo "#sdfsfsdfs"; @endphp



<!--sdfsdfdssdfsdfsd-->
This comment will not be present in the rendered HTML
{{-- This comment will not be present in the rendered HTML --}}


{{ Form::open(array('url' => 'foo/bar')) }}
 
{{ Form::close() }}

<form>
   @csrf
   {{ Form::token()}}
   {{Form::model($order, array('route' => array('order.index', $order->name)))}}
</form>

{{ Form::label('email', 'E-Mail Address'); }}
<label>Email Address</label>

<br/><br/>
My Language: {{ Lang::get('validation.welcome') }}