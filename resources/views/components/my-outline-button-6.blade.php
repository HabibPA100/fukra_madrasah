<!-- Button 6 -->
<button {{ $attributes->merge(['type' => 'button', 'class' => 'flex items-center justify-center border-2 border-pink-500 bg-transparent py-3 px-4 rounded-lg hover:border-pink-600 hover:text-pink-600 space-x-2'])}} >
    {{$slot}}
  </button>