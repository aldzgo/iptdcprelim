<h1>Welcome to the World of Animals, {{ $user->fname }}!</h1>
<h3>Animals is vary in abilities, sizes, and power and it has so much to learn so let's go dive together!.</h3>

<br>

<p>Thank you for being a part of our growing community. Please click the link below to verify your account.</p>

<p>
  <a href="{{ url('/verification/' . $user->id . '/' . $user->remember_token)}}"><h1>Verify Account</h1></a>
</p>