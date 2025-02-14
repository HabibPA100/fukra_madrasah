<div class="container mx-auto p-4">
    <div class="grid grid-cols-3 md:grid-cols-4 lg:grid-cols-6 gap-4">
      <!-- Button 1 -->
      <a href="{{ route('about.us') }}">
       <x-my-blue-button>
        <i class="fa-solid fa-house"></i>
        <span>
          আমাদের সম্পর্কে
        </span>
       </x-my-blue-button>
      </a>
      <!-- Button 2 -->
    <a href="https://forms.gle/daRKYzL7n54UP2EP8" target="_blank">
     <x-my-carmine_pink-button>
      <i class="fa-solid fa-school"></i>
        <span>
          ভর্তি ফরম
        </span>
     </x-my-carmine_pink-button>
    </a>
      <!-- Button 3 -->
      <a href="{{ route('class.routine') }}">
     <x-my-cerise_pink-button>
      <i class="fa-solid fa-scroll"></i>
        <span>
          ক্লাস রুটিন
        </span>
     </x-my-cerise_pink-button>
    </a>
      <!-- Button 4 -->
      <a href="{{ route('result.sheet') }}">
      <x-my-lavendir_indego-button>
        <i class="fa-solid fa-clipboard"></i>
        <span>
          রেজাল্ট সিট
        </span>
      </x-my-lavendir_indego-button>
     </a>
      <!-- Button 5 -->
      <a href="{{ route('login') }}">
      <x-my-lime_green-button>
        <i class="fa-solid fa-right-to-bracket"></i>
        <span>আমার একাউন্ট</span>
      </x-my-lime_green-button>
      </a>
      <!-- Button 6 -->
      <a href="{{ route('payment') }}">
      <x-my-urobilin-button>
        <i class="fa-solid fa-hand-holding-dollar"></i>
        <span>দান করুন</span>
      </x-my-urobilin-button>
      </a>
    </div>
  </div>
  