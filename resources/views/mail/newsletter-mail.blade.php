<style>
    td.header {
        display: none;
        margin-top: 15px;
    }
</style>
@component('mail::message')

<img src="https://scontent.fabb1-2.fna.fbcdn.net/v/t39.30808-6/286179978_10219562617269899_979001202881814094_n.jpg?_nc_cat=106&ccb=1-7&_nc_sid=730e14&_nc_eui2=AeFH9qCarywE-Pua7ecBV5SAw-y-UwVrVPjD7L5TBWtU-AG5j7MkIHmUJw1LoyGBSJI&_nc_ohc=P7YMcKknvCoAX9fHVo2&_nc_zt=23&_nc_ht=scontent.fabb1-2.fna&oh=00_AT8zAgSG1JoIDCJaOiPbomavonoY8oLgfSqv0espO1re-Q&oe=62A3123E" alt="Loading Image">
<div style="height: 20px"></div>
{!! $compose['message'] !!}

Thanks,<br>
{{ config('app.name') }}
@endcomponent
