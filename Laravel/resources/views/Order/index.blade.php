<form method="post" action="{{route('order.save', ['id'=>1,'name'=>'Ajay'])}}">
    <input type="hidden" name="_token" value="{{ csrf_token() }}" />
    <input type="text" name="name" />
    <input type="text" name="email" />
    <input type="submit" value="Add" />
    <?php echo $name; ?>
    <?php echo $sffsdfs; ?>
    <?php echo $age; ?>
</form>

<table>
    <?php foreach($orders as $val)  { ?>
    <tr>
        <td>{{ $val->name }}</td>
        <td>{{ $val->email }}</td>
    </tr>
    <?php } ?>
</table>