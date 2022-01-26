<html>
    <head>
        <title>login</title>
    </head>
    <body>
    

        
        <form class="mt-5" action="log" method="POST">
            @csrf
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">User Name</label>
                <input type="text" class="form-control" name="uname">
                
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" class="form-control" name="password">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>

        <!-- <h1>login form</h1>
        <form action="log" method="POST">
            @csrf
            <label for="fname">User name</label><br>
            <input type="text" id="fname" name="uname" ><br><br>
            <label for="lname">Last name:</label><br>
            <input type="password" id="lname" name="password" ><br><br>
            <input type="submit" value="Submit">
        </form>  -->
    </body>
</html>