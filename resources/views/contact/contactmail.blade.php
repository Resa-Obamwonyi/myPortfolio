@component('mail::message')
# Introduction

<h2>Hello Admin,</h2>
<p>You received an email from : {{ $name }}</p>
<p>Here are the details:</p>
<p>Name: {{ $name }}</p>
<p>Email: {{ $email }}</p>
<p>Subject: {{ $subject }}</p>
<p>Message: {{ $message }}</p>

@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
