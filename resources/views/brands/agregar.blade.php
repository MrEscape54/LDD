@extends ('layouts.default')

@section('content')

    <form method="post" action="/brands/listar" enctype="multipart/form-data">

        <div>
            <label>Brand Name</label>
            <select name="name">
                @foreach($brands as $brand)
                    <option value="{{$brand->name}}">{{$brand->name}}</option>
                @endforeach
            </select>
        </div>

        <div>
            <label>Type</label>
            <select name="type">
                @foreach($types as $type)
                    <option value="{{$type->name}}">{{$type->name}}</option>
                @endforeach
            </select>
        </div>

        <div>
            <label>Genre</label>
            <select name="genre">

            </select>
        </div>

        <div>
            <label>Description</label>
            <input type="text">
        </div>

        <div>
            <label>Price</label>
            <input type="text">
        </div>

        <div>
            <label>Picture</label>
            <input type="file">
        </div>

    </form>
    
@endsection