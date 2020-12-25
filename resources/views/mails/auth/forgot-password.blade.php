<!-- <div>
    When there is no desire, all things are at peace. - Laozi
</div> -->
@component('mail::message')
Hi {{$user->first_name}}

click the link to change password {{$user->reset_password_link}}

@endComponent