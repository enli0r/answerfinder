<div>
    <!-- This example requires Tailwind CSS v2.0+ -->

    <div
    x-cloak
    x-data='{visible:false}'
    @custom-show-edit-modal.window="visible=true"
    x-show="visible"
    class="relative z-10" aria-labelledby="modal-title" role="dialog" aria-modal="true">
    <!--
        Background backdrop, show/hide based on modal state.

        Entering: "ease-out duration-300"
        From: "opacity-0"
        To: "opacity-100"
        Leaving: "ease-in duration-200"
        From: "opacity-100"
        To: "opacity-0"
    -->
        <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity"></div>

        <div class="fixed z-10 inset-0 overflow-y-auto">
            <div class="flex items-end sm:items-center justify-center min-h-full p-4 text-center sm:p-0">
            <!--
                Modal panel, show/hide based on modal state.

                Entering: "ease-out duration-300"
                From: "opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                To: "opacity-100 translate-y-0 sm:scale-100"
                Leaving: "ease-in duration-200"
                From: "opacity-100 translate-y-0 sm:scale-100"
                To: "opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
            -->
                <div
                @click.away="visible = false"
                class="relative bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:max-w-lg sm:w-full">
                    <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus libero quisquam, culpa omnis amet sapiente, similique placeat, voluptatem nesciunt aut assumenda? Tempora tenetur non mollitia quia? Corporis eligendi molestias facilis quas id, ipsa labore deserunt dolore? Porro vel beatae laboriosam et facere, repellendus dolor deserunt similique officiis quidem qui officia.
                    </div>
                    <div class="px-4 py-3 flex justify-end">
                        <button @click="visible = false" type="button" class="mt-3 w-full inline-flex justify-center rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-white text-base font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 sm:mt-0 sm:ml-3 sm:w-auto sm:text-sm">Cancel</button>
                        <button type="button" class="w-full inline-flex justify-center rounded-md border border-transparent shadow-sm px-4 py-2 bg-blue-500 text-base font-medium text-white hover:bg-blue-400 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500 sm:ml-3 sm:w-auto sm:text-sm">Confirm</button>  
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
