<div class="container mx-auto p-4">
    <div class="grid grid-cols-3 md:grid-cols-4 lg:grid-cols-6 gap-4">
      <!-- Button 1 -->
       <x-my-blue-button>
        <a href="{{ route('about.us') }}">
        <i class="fa-solid fa-house"></i>
        <span>
          আমাদের সম্পর্কে
        </span>
        </a>
       </x-my-blue-button>

      <!-- Button 2 -->
    <x-my-carmine_pink-button>
      <a href="https://forms.gle/daRKYzL7n54UP2EP8" target="_blank">
      <i class="fa-solid fa-school"></i>
        <span>
          ভর্তি ফরম
        </span>
      </a>
    </x-my-carmine_pink-button>

      <!-- Button 3 -->
     <x-my-cerise_pink-button>
      <a href="{{ route('class.routine') }}">
      <i class="fa-solid fa-scroll"></i>
        <span>
          ক্লাস রুটিন
        </span>
      </a>
     </x-my-cerise_pink-button>

      <!-- Button 4 -->
      <x-my-lavendir_indego-button>
      <a href="{{ route('result.sheet') }}">
        <i class="fa-solid fa-clipboard"></i>
        <span>
          রেজাল্ট সিট
        </span>
      </a>
      </x-my-lavendir_indego-button>

      <!-- Button 5 -->
      <x-my-lime_green-button>
      <a href="{{ route('login') }}">
        <i class="fa-solid fa-right-to-bracket"></i>
        <span>আমার একাউন্ট</span>
      </a>
      </x-my-lime_green-button>

      <!-- Button 6 -->
      <x-my-urobilin-button>
      <a href="{{ route('payment') }}">
        <i class="fa-solid fa-hand-holding-dollar"></i>
        <span>দান করুন</span>
      </a>
      </x-my-urobilin-button>
    </div>
  </div>
  