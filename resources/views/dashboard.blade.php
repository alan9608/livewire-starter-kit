<x-layouts.app :title="__('Dashboard')">
    <div class="flex h-full w-full flex-1 flex-col gap-4 rounded-xl">
        <div class="grid auto-rows-min gap-4 md:grid-cols-3">
            <div class="flex items-center justify-center relative aspect-video overflow-hidden rounded-xl border border-neutral-200 dark:border-neutral-700 ">


                {{-- <x-placeholder-pattern class="absolute inset-0 size-full stroke-gray-900/20 dark:stroke-neutral-100/20" /> --}}
                <div class="">

                    <div>
                        <flux:heading size="xl">View our <span class="text-blue-400">Trips!</span></flux:heading>


                        <flux:text class="mt-2">See when we travelled.</flux:text>
                    </div>


                </div>


            </div>
            <div class="flex items-center justify-center relative aspect-video overflow-hidden rounded-xl border border-neutral-200 dark:border-neutral-700">

                <div>
                    <div>
                        <flux:heading size="xl">View <span class="text-blue-400">Places</span>!</flux:heading>


                        <flux:text class="mt-2">See where we have been.</flux:text>
                    </div>

                </div>
            </div>

            <div class="flex items-center justify-center relative aspect-video overflow-hidden rounded-xl border border-neutral-200 dark:border-neutral-700">

                <div>


                    <div>
                        <flux:heading size="xl">Text <span class="text-blue-400">Blogs!</span></flux:heading>



                        <flux:text class="mt-2">Read some tales.</flux:text>
                    </div>


                </div>

            </div>
        </div>
        <div class="relative h-full flex-1 overflow-hidden rounded-xl border border-neutral-200 dark:border-neutral-700">
            <img src="/img/ship_image.jpeg" alt="Azamara Quest">


            {{-- <x-placeholder-pattern class="absolute inset-0 size-full stroke-gray-900/20 dark:stroke-neutral-100/20" /> --}}
        </div>
    </div>
</x-layouts.app>
