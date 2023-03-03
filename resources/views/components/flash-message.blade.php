@if(session()->has('message')) 
    <div x-data="{show:true}" x-init="setTimeout(() => show = false, 3000)" x-show="show" class="fixed top-0 bg-laravel text-white px-20 xl:px-48 rounded-b-md py-3 transform left-1/2 -translate-x-1/2">
        <p>
            {{ session('message') }}
        </p>
    </div>
@endif