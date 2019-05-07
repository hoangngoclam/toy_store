<form action="./postFileX" method="post" enctype="multipart/form-data">
    {{ csrf_field() }}
    <input type="file" name="myFile">
    <input type="submit">
</form>