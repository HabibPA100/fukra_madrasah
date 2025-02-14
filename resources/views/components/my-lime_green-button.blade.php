<button {{ $attributes->merge(['type'=>'button', 'class' => 'flex items-center justify-center bg-gradient-to-r from-purple-500 to-lime-500 text-white py-3 px-4 rounded-lg shadow-lg hover:from-green-600 hover:to-lime-600 space-x-2']) }} >
   {{$slot}}
  </button>