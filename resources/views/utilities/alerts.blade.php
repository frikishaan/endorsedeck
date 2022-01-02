@if (session()->has('message') && session()->has('type'))
    <div class="container {{session('type')}} flex items-center text-white text-sm font-bold px-4 py-3 relative" role="alert" x-data="{ showAlert: true }" x-show="showAlert" x-init="setTimeout(() => showAlert = false, 5000)">
        <p>
            {{session('message')}}
        </p>
    </div>
@endif