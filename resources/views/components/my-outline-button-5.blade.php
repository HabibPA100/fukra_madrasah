<!-- Button 5 -->
<button {{ $attributes->merge(['type' => 'button', 'class' => 'flex items-center justify-center border-2 border-purple-500 bg-transparent py-3 px-4 rounded-lg hover:border-purple-600 hover:text-purple-600 space-x-2'])}} >
    {{$slot}}
  </button>