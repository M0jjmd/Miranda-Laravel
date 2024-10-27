@if (session('message'))
    <input type="hidden" id="toastMessage" value="{{ session('message') }}">
    <input type="hidden" id="toastType" value="{{ session('alert-type', 'info') }}">
@endif