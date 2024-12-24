<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <a href="{{route('serviceadmin.create')}}">Add New Service</a>
    <table>
        <tr>
            <th>Id</th>
            <th>Title</th>
            <th>Description</th>
            <th>Image</th>
            <th>Documents List</th>
            <th>Note</th>
            <th>Delete</th>
        </tr>
        @foreach ($services as $service)
        <tr>
            <td>{{$service->id}}</td>
            <td>{{$service->title}}</td>
            <td>{{$service->description}}</td>
            <td>{{$service->image_url}}</td>
            <td>{{$service->document_list}}</td>
            <td>{{$service->note}}</td>    
            <td><form action="{{route('serviceadmin.destroy', $service->id)}}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit">Delete</button>
            </form></td>
        </tr>
        @endforeach
    </table>
</body>
</html>