<html>
    <head>
        <title>Registration form</title>
    </head>
    <body>
        <h2>HTML Forms</h2>
        @if($errors->any())
        <div class="alert alert-danger" role="alert">
  

        
            @foreach($errors->all() as $message)
            <li>
            {{$message}}
            </li>
            @endforeach
        
        </div>
        @endif



        <form class="mt-5" action="/home" method="POST">
            @csrf
            <div class="mb-3">
                <label class="form-label">First Name</label>
                <input type="text" class="form-control" name="fname">
                
            </div>
            <div class="mb-3">
                <label class="form-label">Last Name</label>
                <input type="text" class="form-control" name="lname">
            </div>
            <div class="mb-3">
                <label class="form-label">Username</label>
                <input type="text" class="form-control" name="uname">
            </div>
            <div class="mb-3">
                <label class="form-label">Password</label>
                <input type="password" class="form-control" name="password">
            </div>
            <div class="mb-3">
                <label class="form-label">Age</label>
                <input type="number" class="form-control" name="age">
            </div>


            <label for="gender">gender:</label><br>
            <input type="radio" id="male" name="gender" value="male">
            <label for="male">male</label>
            <input type="radio" id="female" name="gender" value="female">
            <label for="female">female</label> <br><br>

            <div class="mb-3">
                <label class="form-label">Email</label>
                <input type="text" class="form-control" name="email">
            </div>
            <div class="mb-3">
                <label class="form-label">Date Of birth</label>
                <input type="date" class="form-control" name="dob">
            </div>
            <div class="mb-3">
                <label class="form-label">Phone Number</label>
                <input type="text" class="form-control" name="phnumber">
            </div>
            <div class="mb-3">
                <label class="form-label">College Name</label>
                <input type="text" class="form-control" name="cname">
            </div>
            <div class="mb-3">
                <label class="form-label">Level</label>
                <input type="text" class="form-control" name="stdlevel">
            </div>


            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
        

        <!-- <form action="/home" method="POST">
            @csrf
            <label for="fname">First name:</label><br>
            <input type="text" id="fname" name="fname"><br><br>
            <label for="lname">Last name:</label><br>
            <input type="text" id="lname" name="lname"><br><br>
            <label for="lname">User Name:</label><br>
            <input type="text" id="lname" name="uname"><br><br>
            <label for="lname">Password</label><br>
            <input type="password" id="lname" name="password"><br><br>
            <label for="lname">age:</label><br>
            <input type="text" id="lname" name="age"><br><br>

            <label for="gender">gender:</label><br>
            <input type="radio" id="male" name="gender">
            <label for="male">male</label>
            <input type="radio" id="female" name="gender">
            <label for="female">female</label> <br><br>

            <label for="lname">email:</label><br>
            <input type="email" id="lname" name="email"><br><br>
            <label for="dateofbirth">Date of birth</label><br>
            <input type="date" id="date" name="dob"><br><br>
            <label for="lname">phone number:</label><br>
            <input type="number" id="lname" name="phnumber"><br><br>
            <label for="lname">College Name:</label><br>
            <input type="text" id="lname" name="cname"><br><br>
            <label for="lname">Study Level:</label><br>
            <input type="text" id="lname" name="stdlevel"><br><br>
            <input type="submit" value="Submit">
        </form>  -->
    </body>



</html>