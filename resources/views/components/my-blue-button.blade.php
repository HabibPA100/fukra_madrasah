<button {{ $attributes->merge(['type'=>'button', 'class' => 'flex items-center justify-center bg-gradient-to-r from-blue-500 to-yellow-500 text-white py-3 px-4 rounded-lg shadow-lg hover:from-blue-600 hover:to-teal-600 space-x-2'])}}>
    {{ $slot }}
  </button>