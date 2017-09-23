@component('mail::message')
# Introduction

Welcome to SportsBlog

Thanks so much for registering.

@component('mail::button', ['url' => 'http://127.0.0.1:8000/'])
Go to SportsBlog
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
