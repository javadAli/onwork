<x-app-layout>
    <div class="flex flex-row">
        <button onclick="openModal('addworkerModalId')" class="block text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"> افزودن </button>
    </div>
    <div class="flex flex-row flex-wrap ">
        @foreach ($workers as $worker)
            <div class="my-3 mx-2 bg-gray-400 border-gray-500 rounded-sm px-4 py-5 column-1/4">
                <div class="flex flex-col items-center">
                    <div class="rounded-full h-16 w-16 mx-auto my-0  bg-slate-50">
                        <img src="{{url('/public/build/assets/images/1.jpg')}}" alt=""/>
                    </div>
                    <p class="text-center mx-14 mb-2">{{$worker->name}}</p>
                    <a href="{{url('/workers')}}" class="mx-auto hover:bg-blue-700 py-1 px-5 overflow-auto shadow-sm sm:rounded-lg bg-blue-500"> جزءیات </a>
                </div>
            </div>    
        @endforeach
    </div>
    <div id="addworkerModalId" class="fixed inset-0 items-center justify-center hidden bg-gray-900 bg-opacity-50 z-50 m-auto">
        <div class="bg-white rounded-lg w-96">
          <!-- Header -->
          <div class="flex justify-between items-center px-4 py-2 border-b">
            <button onclick="closeModal('addworkModalId')" class="text-gray-600 hover:text-gray-800 focus:outline-none">
                <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M6 18L18 6M6 6l12 12"></path>
                </svg>
              </button>
            <h2 class="text-lg font-semibold"> افزودن کار جدید </h2>
          </div>
          <!-- Body -->
          <div class="p-4">
            <!-- Inputs -->
            <div class="mb-4">
              <label for="input1" class="block text-sm font-medium text-gray-700"> نام </label>
              <input type="text" id="input1" name="input1" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md ">
            </div>
            <div class="mb-4">
              <label for="input2" class="block text-sm font-medium text-gray-700"> آدرس </label>
              <input type="text" id="input2" name="input2" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
            </div>
            <div class="mb-4">
                <label for="input2" class="block text-sm font-medium text-gray-700"> توضیح </label>
                <textarea cols="200" rows="4"  name="input2" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"></textarea>
            </div>
            <!-- Add more inputs as needed -->
          </div>
          <!-- Footer -->
          <div class="flex justify-end p-4 border-t">
            <button class="px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-600 focus:outline-none">Save</button>
          </div>
        </div>
    </div>
</x-app-layout>
