<!-- Button 2 -->
<button {{ $attributes->merge(['type' => 'button', 'class' => 'flex items-center justify-center border-2 border-green-500 bg-transparent py-3 px-4 rounded-lg hover:border-green-600 hover:text-green-600 space-x-2']) }} >
    {{$slot}}
  </button>