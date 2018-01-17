<p>Dear {{ $user->getFullName() }}</p>

<p>We are pleased to inform you that, one of our Admin has created a <strong>{{ $user->type }}</strong> account for you in LMS. You can
Login to LMS with your this email <strong>{{ $user->email }}</strong> address. Your Initial Password is your email address. Please change
the password once you logged in there.</p>

<p>You can login to LMS from here <a href="{{ url('/') }}">LMS Portal</a></p>
<br/>
<p>Thanks</p>
<p>LMS Team</p>