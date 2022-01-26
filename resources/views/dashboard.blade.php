<html>
    <head>
        <title>dashboard</title>
    </head>
    <link rel="stylesheet" href="css/bootstrap.css">   
    <body>
        <div class="container-fluid">
            @if(Session::has('username'))
            @include('dashnav')


            <table class="table" >
                <tr>
                    <th scope="col">first name</th>
                    <th scope="col">last name</th>
                    <th scope="col">email </th>
                    <th scope="col">phone number</th>
                    <th scope="col">date of birth</th>
                    <th scope="col">college</th>
                    <th scope="col">study level</th>
                </tr>
                @foreach($datas as $data)
                <tr>
                    <td>{{$data->name}}</td>
                    <td>{{$data->lastname}}</td>
                    <td>{{$data->email}}</td>
                    <td>{{$data->phonenumber}}</td>
                    <td>{{$data->dob}}</td>
                    <td>{{$data->college}}</td>
                    <td>{{$data->level}}</td>
                </tr>
                @endforeach
            </table>

            @else
            <div class="alert alert-danger" role="alert">
                Login required!!!!
            </div>

            @endif

        </div>

    </body>
</html>


