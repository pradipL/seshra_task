<html>
    <head>
        <title>Registration form</title>
    </head>
    <link rel="stylesheet" href="css/bootstrap.css">  
    <body>
        @include('dashnav')
        <div class="container">
            <form class="mt-5" action="/home" method="POST">
                @csrf
                <div class="mb-3">
                    <label class="form-label">First Name</label>
                    <input type="text" class="form-control" name="fname" value="{{$query->name}}">
                    
                </div>
                <div class="mb-3">
                    <label class="form-label">Last Name</label>
                    <input type="text" class="form-control" name="lname" value="{{$query->lastname}}">
                </div>
                <div class="mb-3">
                    <label class="form-label">Username</label>
                    <input type="text" class="form-control" name="uname"  value="{{$query->username}}">
                </div>
                <div class="mb-3">
                    <label class="form-label">Password</label>
                    <input type="password" class="form-control" name="password" value="{{$query->password}}">

                </div>
                <div class="mb-3">
                    <label class="form-label">Age</label>
                    <input type="number" class="form-control" name="age" value="{{$query->age}}">
                </div>


                <label for="gender">gender:</label><br>
                <input type="radio" id="male" name="gender" value="male" {{$query->gender=="male"?"checked":""}}>
                <label for="male">male</label>
                <input type="radio" id="female" name="gender" value="female" {{$query->gender=="male"?"checked":""}}>
                <label for="female">female</label> <br><br>

                <div class="mb-3">
                    <label class="form-label">Email</label>
                    <input type="text" class="form-control" name="email" value="{{$query->email}}">
                </div>
                <div class="mb-3">
                    <label class="form-label">Date Of birth</label>
                    <input type="date" class="form-control" name="dob" value="{{$query->dob}}">
                </div>
                <div class="mb-3">
                    <label class="form-label">Phone Number</label>
                    <input type="text" class="form-control" name="phnumber" value="{{$query->phonenumber}}">
                </div>
                <div class="mb-3">
                    <label class="form-label">College Name</label>
                    <input type="text" class="form-control" name="cname" value="{{$query->college}}">
                </div>
                <div class="mb-3">
                    <label class="form-label">Level</label>
                    <input type="text" class="form-control" name="stdlevel" value="{{$query->level}}">
                </div>


                <button type="submit" class="btn btn-primary">Update</button>
            </form>
            </div>



        <!-- <form action="/update" method="POST">
            @csrf
            <label for="fname">First name:</label><br>
            <input type="text" id="fname" name="fname" value="{{$query->name}}"><br><br>
            <label for="lname">Last name:</label><br>
            <input type="text" id="lname" name="lname" value="{{$query->lastname}}"><br><br>
            <label for="lname">User Name:</label><br>
            <input type="text" id="lname" name="uname" value="{{$query->username}}"><br><br>
            <label for="lname">Password</label><br>
            <input type="password" id="lname" name="password" value="{{$query->password}}"><br><br>
            <label for="lname">age:</label><br>
            <input type="text" id="lname" name="age" value="{{$query->age}}"><br><br>

            <label for="gender">gender:</label><br>
            <input type="radio" id="male" name="gender" value="{{$query->gender}}">
            <label for="male">male</label>
            <input type="radio" id="female" name="gender" value="{{$query->gender}}">
            <label for="female">female</label> <br><br>

            <label for="lname">email:</label><br>
            <input type="email" id="lname" name="email" value="{{$query->email}}"><br><br>
            <label for="dateofbirth">Date of birth</label><br>
            <input type="date" id="date" name="dob" value="{{$query->dob}}"><br><br>
            <label for="lname">phone number:</label><br>
            <input type="number" id="lname" name="phnumber" value="{{$query->phonenumber}}"><br><br>
            <label for="lname">College Name:</label><br>
            <input type="text" id="lname" name="cname" value="{{$query->college}}"><br><br>
            <label for="lname">Study Level:</label><br>
            <input type="text" id="lname" name="stdlevel" value="{{$query->level}}"><br><br>
            <input type="submit" value="Submit">
        </form>  -->
    </body>



</html>