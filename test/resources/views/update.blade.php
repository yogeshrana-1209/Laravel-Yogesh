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
   
<form action="update" method="post">
         @csrf
        @foreach ($records as $records)
        <tr>
            <input type="hidden" value={{$records->id}} name="id">
            <td><input type="text" value={{$records->name}} name="name"></td>
            <td><input type="text" value={{$records->email}} name="email"></td>
          <td><input type="text" value={{$records->password}} name="password"></td>
            <td><input type="submit" name="submit"></td>
        </tr>
        @endforeach                                                                                                                                                                                                                                                     
</form>
</table>
</body>
</html>