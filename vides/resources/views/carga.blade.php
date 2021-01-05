<!DOCTYPE html>
<html>
    <body>
        <div>
            <form method="post" action="{{route('excelHotel')}}" enctype="multipart/form-data">
                @csrf
                <input type="file" name="file">
                <br>
                <button type="submit">Hotel</button>
            </form>
        </div>
        <br><br><br><br>
        <div>
            <form method="post" action="{{route('excelHistorial')}}" enctype="multipart/form-data">
                @csrf
                <input type="file" name="file">
                <br>
                <button type="submit">Historial</button>
            </form>
        </div>
        <br><br><br><br>
        <div>
            <form method="post" action="{{route('excelCliente')}}" enctype="multipart/form-data">
                @csrf
                <input type="file" name="file">
                <br>
                <button type="submit">Cliente</button>
            </form>
        </div>
    </body>
</html>
