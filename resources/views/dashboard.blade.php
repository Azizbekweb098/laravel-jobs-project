<x-app-layout>
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
<div class=''>  <div class="rounded-xl border p-5 shadow-md w-9/12 bg-white">
    <div class="flex w-full items-center justify-between border-b pb-3">
      <div class="flex items-center space-x-3">
        <div class="h-8 w-8 rounded-full bg-slate-400 bg-[url('https://i.pravatar.cc/32')]"></div>
        <div class="text-lg font-bold text-slate-700">Joe Smith</div>
      </div>
      <div class="flex items-center space-x-8">
        <div class="text-xs text-neutral-500">id</div>
        <div class="text-xs text-neutral-500">sana va vaqti</div>
      </div>
    </div>

    <div class="mt-4 mb-6">
      <div class="mb-3 text-xl font-bold text-black">Nulla sed leo tempus, feugiat velit vel, rhoncus neque?</div>
      <div class="text-sm text-neutral-600">Aliquam a tristique sapien, nec bibendum urna. Maecenas convallis dignissim turpis, non suscipit mauris interdum at. Morbi sed gravida nisl, a pharetra nulla. Etiam tincidunt turpis leo, ut mollis ipsum consectetur quis. Etiam faucibus est risus, ac condimentum mauris consequat nec. Curabitur eget feugiat massa</div>
    </div>

    <div>
      <div class="flex items-center justify-between text-slate-500">
        <div class="flex space-x-4 md:space-x-8">
          <div class="flex cursor-pointer items-center transition hover:text-slate-600">
        webcoderazizbek@gmail.com
          </div>

        </div>
      </div>
    </div>
  </div>
</div>
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
                         <input type="file" name="file">
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
