@if(session()->has('message_success_wt'))
<div x-data="show: true" x-init="setTimeout(() => show = false, 30000)" x-show="show" class="fixed top-0 left-1/2 transform -translate-x-1/2 bg-laravel text-white px-48 py-3">
    <p>
        {{session('message_success_wt')}}
    </p>
</div>
    @endif
