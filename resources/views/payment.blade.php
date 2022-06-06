<form action="{{ url('/citizen/apartment/charge') }}" method="post">
    <input type="text" name="amount"  value=""/>
    {{ csrf_field() }}
    <input type="submit" name="submit" value="Pay Now">
</form>