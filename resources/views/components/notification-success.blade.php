@props(['redirect'=>false, 'messageToDisplay' => ''])

<div 
    x-cloak
    x-data=
    "{
        visible:false,
        messageToDisplay:'{{ $messageToDisplay }}',
        show(message){
            setTimeout(() =>{
                this.visible=false;
            }, 5000);
            this.messageToDisplay=message
            this.visible=true;
        }
        
    }"
    x-show="visible"
    x-init="

    @if($redirect)
        $nextTick(() => show(messageToDisplay));
    @else
        Livewire.on('postWasCreated', message =>{
            show(message);
        });

        Livewire.on('postWasEdited', message =>{
            show(message);
        });

        Livewire.on('commentWasEdited', message =>{
            show(message);
        });

        Livewire.on('commentWasDeleted', message =>{
            show(message);
        });
    @endif


    
    "
    x-transition:enter="transition ease-out duration-300"
    x-transition:enter-start="opacity-0 transform translate-x-8"
    x-transition:enter-end="opacity-100 transform translate-x-0"
    x-transition:leave="transition ease-out duration-150"
    x-transition:leave-start="opacity-100 transform translate-x-0"
    x-transition:leave-end="opacity-0 transform translate-x-8"



    class="fixed z-50 right-0 bottom-0 rounded-xl bg-white p-5 mb-5 mr-5"

>
    <div class="w-full flex justify-between items-center">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7 text-green-600" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
            <path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
        </svg>
        
        <p class="text-gray-600 ml-2 mr-6" x-text="messageToDisplay"></p>

        <button
            @click="visible=false"
        >
            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd" />
            </svg>
        </button>

    </div>
</div>