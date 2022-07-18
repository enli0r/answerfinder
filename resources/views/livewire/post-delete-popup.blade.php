<!-- This example requires Tailwind CSS v2.0+ -->
<div 
x-cloak
x-data="{visible:false}"
x-show="visible"
@custom-post-delete-popup.window="visible=true"

class="relative z-10" aria-labelledby="modal-title" role="dialog" aria-modal="true">

    <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity"></div>
  
    <div class="fixed z-10 inset-0 overflow-y-auto">

      <div class="flex items-end sm:items-center justify-center min-h-full p-4 text-center sm:p-0">


        <div 
        @click.away="visible=false"
        class="relative bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:max-w-lg sm:w-full sm:mx-5">

        <svg 
        @click="visible=false"
        class="w-5 h-5 absolute text-gray-400 hover:text-black transition hover:cursor-pointer" style="top: 5px; right:5px;" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg> 

          <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
            <div class="sm:flex sm:items-start">
                <svg class="mx-auto mb-4 text-gray-400 w-14 h-14" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
          </div>

          <h3 class="text-center mb-5 text-lg font-normal text-gray-500 dark:text-gray-400">Are you sure you want to delete this post?</h3>


          <div class="px-4 py-3 sm:px-6 sm:flex sm:flex-row justify-center gap-4">
            <button 
            wire:click.prevent="deletePost()"
            class="bg-red-700 hover:bg-red-500 text-white text-md font-semibold pointer rounded-xl px-4 py-3 float-right transition">Yes, I'm sure</button>
            <button 
            @click="visible=false"
            class="bg-blue-500 hover:bg-blue-400 text-white text-md font-semibold pointer rounded-xl px-4 py-3 float-right  transition">No, cancel</button>
          </div>
        </div>
      </div>
    </div>
  </div>
  
