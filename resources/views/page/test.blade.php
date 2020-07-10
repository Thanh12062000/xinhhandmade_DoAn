<form action="{{route('post')}}" method="post">
@csrf
    <input type="text" name ="HoTen">
    <input type="submit">
</form>
