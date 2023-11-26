<div class="flex h-screen flex-col items-center -mt-40 justify-center">

    <div class="mb-8">
        <h1 class="text-2xl font-bold uppercase">Find the answer you are looking for ..</h1>
    </div>

    <form action="" method="post" class="mb-20">
        @csrf

        <input type="search" class="w-175 rounded-xl border-none shadow-card p-5 text-lg " placeholder="Search all the questions">
    </form>

    <div class="mb-8">
        <h1 class="text-2xl font-bold uppercase">.. or, just ask the question yourself</h1>
    </div>

    <div class="flex w-full justify-center">
        <livewire:create-post />
    </div>

</div>
