<x-app-layout>
  <script src="https://cdn.tailwindcss.com"></script>
  <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
  <x-slot name="header">
      <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
          {{ __('Dashboard') }}
      </h2>
  </x-slot>

  <div class="py-12">
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
          <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
              <div class="p-6 text-gray-900 dark:text-gray-100">
                  @if (auth()->user()->role->name == 'menager')

            <!-- This is an example component -->
          @foreach ($applications as $application )
          <div class="rounded-xl border p-5 shadow-md w-9/12 bg-white">
            <div class="flex w-full items-center justify-between border-b pb-3">
              <div class="flex items-center space-x-3">
                <div class="h-8 w-8 rounded-full bg-slate-400 bg-[url('https://i.pravatar.cc/32')]"></div>
                <div class="text-lg font-bold text-black">{{ $application->user->name }}</div> <!-- Rang qora -->
              </div>
              <div class="flex items-center space-x-8">
                <div class="text-xs text-black">{{ $application->user->id }}</div> <!-- Rang qora -->
                <div class="text-xs text-black">{{ $application->created_at }}</div> <!-- Rang qora -->
              </div>
              <div class="flex items-center space-x-8">
                  {{-- {{  $application  }} --}}
                <div class="text-xs text-black">
                  <a href="{{ asset('storage/'.$application->file_up)}}">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;"><path d="M12.186 14.552c-.617 0-.977.587-.977 1.373 0 .791.371 1.35.983 1.35.617 0 .971-.588.971-1.374 0-.726-.348-1.349-.977-1.349z"></path><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8l-6-6zM9.155 17.454c-.426.354-1.073.521-1.864.521-.475 0-.81-.03-1.038-.06v-3.971a8.16 8.16 0 0 1 1.235-.083c.768 0 1.266.138 1.655.432.42.312.684.81.684 1.522 0 .775-.282 1.309-.672 1.639zm2.99.546c-1.2 0-1.901-.906-1.901-2.058 0-1.211.773-2.116 1.967-2.116 1.241 0 1.919.929 1.919 2.045-.001 1.325-.805 2.129-1.985 2.129zm4.655-.762c.275 0 .581-.061.762-.132l.138.713c-.168.084-.546.174-1.037.174-1.397 0-2.117-.869-2.117-2.021 0-1.379.983-2.146 2.207-2.146.474 0 .833.096.995.18l-.186.726a1.979 1.979 0 0 0-.768-.15c-.726 0-1.29.438-1.29 1.338 0 .809.48 1.318 1.296 1.318zM14 9h-1V4l5 5h-4z"></path><path d="M7.584 14.563c-.203 0-.335.018-.413.036v2.645c.078.018.204.018.317.018.828.006 1.367-.449 1.367-1.415.006-.84-.485-1.284-1.271-1.284z"></path></svg>
                  </a>
                </div> <!-- Rang qora -->
              </div>
            </div>

            <div class="mt-4 mb-6">
              <div class="mb-3 text-xl font-bold text-black">{{ $application->subjects }}</div> <!-- Rang qora -->
              <div class="text-sm text-black"> <!-- Rang qora -->
                {{ $application->message }}
              </div>
            </div>

            <div>
              <div class="flex items-center justify-between text-black"> <!-- Rang qora -->
                <div class="flex space-x-4 md:space-x-8">
                  <div class="flex cursor-pointer items-center transition hover:text-black"> <!-- Rang qora -->
                   {{ $application->user->email }}
                  </div>
                </div>
              </div>
            </div>
          </div>
          <br>
          @endforeach


            @elseif(auth()->user()->role->name == 'client')
            <!-- The component code starts  -->
  <div class=" ">
      <div class="heading mx-auto text-center">
          <h1 class="mx-auto my-5 text-center sm:text-4xl text-3xl font-bold">Your is Application</h1>

      </div>
      <div class="form-portion bg-stone-100 sm:w-[80%] w-[90%] mx-auto">
          <form class="p-5 mt-5" action="{{ route('client.store') }}" method="POST" enctype="multipart/form-data">

              @csrf

              <div class="md:p-5 p-1 sm:mt-1 mt-1">

                  <div class="md:mt-1 mt-2">
                      <label for="subject" class="text-xl">Subject : </label><br>
                      <input type="text" name="subjects" placeholder="Mention your area of concern"
                          class=" w-[100%] px-4 py-2 mt-1 rounded-xl">
                  </div>
                  <div class="mt-5">
                      <label for="subject" class="text-xl">Questions / Message : </label><br>
                      <textarea name="message" rows="5" placeholder="Write your message here"
                          class="w-[100%] px-4 py-2 rounded-xl appearance-none text-heading text-md"
                          autoComplete="off" spellCheck="false">

                      </textarea>
                  </div>
                  <div class="mt-5">
                      <label for="file" class="text-xl">Questions / Message : </label><br>
                       <input type="file" name="file_up">
                  </div>
              </div>
              <div class="btn mt-2 w-[100%] bg-transparent flex items-center">
                  <button type="submit"
                      class="px-4 py-2 mx-auto rounded-xl text-center text-xl bg-black text-white hover:text-black hover:bg-white hover:font-bold hover:shadow-xl">Send
                      Message</button>
              </div>
          </form>
      </div>
  </div>
  <!-- The component code ends -->
                  @endif
              </div>
          </div>
      </div>
  </div>
</x-app-layout>
