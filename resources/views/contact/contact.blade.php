
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>ContactForm</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('custom/style.css')}}">
</head>
<body>



<div class="container">
    @if ($errors->any())
        <div class="alert alert-danger">
            @foreach ($errors->all() as $error)
                <p class="mb-0">{{ $error }}</p>
            @endforeach
        </div>
    @endif


    <h3>Contact Form</h3>
    <form action="" method="post" action="{{ route('contact.store') }}">
        {{ csrf_field() }}

    <label for="fname">First Name</label>
    <input type="text"   name="firstname" placeholder="Your name..">

    <label for="lname">Last Name</label>
    <input type="text"   name="lastname" placeholder="Your last name..">

    <label for="lname">Email</label>
    <input type="email"   name="email" placeholder="Your email..">


    <label for="lname">Phone Number</label>
    <input type="text"   name="phone" placeholder="Your number..">


    <label for="subject">Subject</label>
    <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>

      <input type="submit" value="Submit">
   </form>
 </div>

 </body>
</html>
