<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Gender</th>
                <th>Age</th>
                <th>Phone</th>
                <th>Email</th>
                <th>Price</th>
            </tr>
        </thead>
        <tr>
            <td>{{$pdfTicket['id']}}</td>
            <td>{{$pdfTicket->firstName.$pdfTicket->lastName}}</td>
            <td>{{$pdfTicket->gender}}</td>
            <td>{{$pdfTicket->age}}</td>
            <td>{{$pdfTicket->phone}}</td>
            <td>{{$pdfTicket->email}}</td>
            <td>{{$pdfTicket->price}}</td>
        </tr>
    </table>
</body>
</html>