<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Contact Form SMBarber</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
</head>

<body>
<div class="container pt-5" style="max-width: 500px">

    <!-- Alert User -->
    @if(Session::has('success'))
        <div class="alert alert-success">
            {{Session::get('success')}}
        </div>
    @endif

    <form action="" method="post" action="{{ route('contact.save') }}">
        @csrf

        <div class="form-group">
            <label>Name</label>
            <input type="text" class="form-control" name="name" id="name">

            <!-- Show error -->
            @if ($errors->has('name'))
                <div class="alert alert-danger">
                    {{ $errors->first('name') }}
                </div>
            @endif
        </div>

        <div class="form-group">
            <label>Email</label>
            <input type="email" class="form-control" name="email" id="email">

            <!-- Show error -->
            @if ($errors->has('email'))
                <div class="alert alert-danger">
                    {{ $errors->first('email') }}
                </div>
            @endif
        </div>

        <div class="form-group">
            <label>Phone</label>
            <input type="text" class="form-control" name="phone" id="phone">

            <!-- Show error -->
            @if ($errors->has('phone'))
                <div class="alert alert-danger">
                    {{ $errors->first('phone') }}
                </div>
            @endif
        </div>

        <div class="form-group">
            <label>Service</label>
            <select name="subject" id="subject">
                <option value="Beard,Mustache">Beard,Mustache</option>
                <option value="Hair Wash">Hair Wash</option>
                <option value="Detailed Feather Cleaning">Detailed Feather Cleaning</option>
                <option value="Studio Shots">Studio Shots</option>
                <option value="Forming The Beard">Forming The Beard</option>
                <option value="Facial And Skin Care">Facial And Skin Care</option>
            </select>
            <br><br>



            <!-- Show error -->
            @if ($errors->has('subject'))
                <div class="alert alert-danger">
                    {{ $errors->first('subject') }}
                </div>
            @endif
        </div>

        <div class="form-group">
            <label>Message</label>
            <textarea class="form-control" name="message" id="message" rows="5"></textarea>

            <!-- Show error -->
            @if ($errors->has('message'))
                <div class="alert alert-danger">
                    {{ $errors->first('message') }}
                </div>
            @endif
        </div>

        <div class="form-group">
            <label>Date</label>
            <input type="datetime-local" class="form-control" id="date" name="date">

            <!-- Show error -->
            @if ($errors->has('date'))
                <div class="alert alert-danger">
                    {{ $errors->first('date') }}
                </div>
            @endif
        </div>

        <input type="submit" name="send" value="Send" class="btn btn-dark btn-block">
    </form>
</div>
</body>

</html>
