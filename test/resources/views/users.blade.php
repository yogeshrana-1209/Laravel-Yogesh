<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Users Data</title>
    <style>
        table {
            border-collapse: collapse;
            font-size : 20px;
            width: 100%;
            height:100%;
          
        }
        th, td {
  padding: 10px;
  
}
        td,th {
  text-align: center;
}
th 
{
    background-color: #4CAF50;
}
 tr:hover {
    background-color: skyblue;
}
button{
    font-size:20px;
}
        </style>
</head>
<body>
    <div class="container">
        <form action="searchName" method="POST">
            @csrf
            <label>Search Name:</label>
            <input type="text" name="search_name">
            <input type="submit">
</form><br>
</div>
    <table border="2" align="center">
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Password</th>
            <th colspan="2">Action</th>
        </tr>

        @foreach ($records as $records)
        <tr >
            <td>{{$records->name}}</td>
            <td>{{$records->email}}</td>
            <td>{{$records->password}}</td>
            
                <td><a href="update?id={{$records->id}}"><button>Edit</button></a></td>
            <td><a href="delete?id={{$records->id}}"><button>Delete</button></a></td>
        </tr>
        @endforeach

</table>
</body>
</html>