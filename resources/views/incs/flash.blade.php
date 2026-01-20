@if($message = Session::get('success'))
    <div class="bg-green-100 border rounded-xl border-green-400 text-green-700 px-4 py-3 relative mb-4" role="alert">
        <strong class="font-bold">Success!</strong>
        <span class="block sm:inline">{{ $message }}</span>
    </div>
@endif 
@if($message = Session::get('error'))
    <div class="bg-red-100 border rounded-xl border-red-400 text-red-700 px-4 py-3 relative mb-4" role="alert">
        <strong class="font-bold">Error!</strong>
        <span class="block sm:inline">{{ $message }}</span>
    </div>
@endif
