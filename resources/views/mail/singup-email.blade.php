Hello {{$email_data['name']}} !
<br><br>
Welcome to WatchStore!
<br>
Please click on the link to activate your account!
<br><br>
<a href="http://127.0.0.1:8000/verify?code={{$email_data['verification_code']}}">Click here!</a>

<br><br>
<h3>Thanks you!</h3>