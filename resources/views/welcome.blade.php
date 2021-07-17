<x-layout>
    <div class="container max-w-lg mx-auto bg-gray-300">
        <header class="bg-blue-600 p-4">
            <h1 class="font-bold text-white">My Site</h1>
        </header>

        <div class="grid grid-cols-12 p-4">
            <aside class="mr-5 col-span-3 text-sm">
                <ul>
                    <li>Link 1</li>
                    <li>Link 2</li>
                    <li>Link 3</li>
                </ul>
            </aside>

            <main class="text-sm col-span-9">
                <p>
                    Would you like to delete your account?
                </p>

                <form
                    id="delete-user-form"
                    method="POST"
                    action="/"
                    x-data
                    @submit.prevent="
                        location.hash = '#user-delete-modal';
                    "
                >
                    @csrf

                    <p>
                        <x-button class="bg-blue-400 hover:bg-blue-500">Yes, Delete</x-button>
                    </p>
                </form>
            </main>
        </div>

        <footer class="bg-blue-600 p-4 flex items-center justify-between text-xs text-white">
            <h5 class="text-xs">My Site</h5>
            <p>2021</p>
        </footer>
    </div>

    {{-- Modal --}}
    <x-confirmation-modal name="user-delete-modal">
        <x-slot name="title">
            Are You Sure?
        </x-slot>

        <x-slot name="body">
            Continuing will delete your account permanently.
        </x-slot>

        <x-slot name="footer">
            <a href="#" class="bg-gray-400 hover:bg-gray text-xs uppercase py-2 px-4 rounded-md text-white transition-all duration-200 mr-2'">Cancel</a>
            <x-button class="bg-blue-400 hover:bg-blue-500" @click="document.querySelector('#delete-user-form').submit()">Continue</x-button>
        </x-slot>
    </x-confirmation-modal>
</x-layout>
