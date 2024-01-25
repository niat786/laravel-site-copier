<?php

namespace App\Livewire;

use Livewire\Component;

class Form extends Component
{
    public function render()
    {
        return <<<'HTML'
        <div>

                <div
                    class="p-5 space-y-8 border rounded-lg shadow-lg shadow-green-600/30 dark:shadow-green-600/10 dark:shadow-lg bg-gradient-to-b from-white to-green-50 dark:border-gray-700 dark:bg-gradient-to-b dark:from-gray-800 dark:to-gray-800">
                    <div class="space-y-2">
                        <label for="URL" class="font-bold text-green-600 ">Template
                            URL<sup class="text-rose-500">*</sup>
                        </label>
                        <div class="flex">
                            <input type="url" x-on:input="urlIsValid=true" wire:model="url" autocomplete="url"
                                placeholder="https://example.com/"
                                class="block w-full px-4 py-3 text-gray-600 transition duration-300 bg-transparent border border-gray-200 rounded-lg dark:text-gray-100 focus:outline-none dark:border-gray-600 invalid:ring-2 invalid:ring-red-400 focus:ring-0 " />

                        </div>
                        <div class="text-sm text-rose-500">
                            @error('url')
                                {{ $message }}
                            @enderror
                        </div>
                        <div class="flex pt-2 space-x-2">
                            <button type="submit" wire:click="getTheTemplate" x-on:click="downloading = 1"
                                class="flex p-3 text-sm text-white bg-green-600 rounded-lg shadow-md shadow-green-500/30 hover:bg-green-500">

                                {{-- cog icon --}}
                                <svg x-show="downloading == 1" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 animate-spin">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M4.5 12a7.5 7.5 0 0015 0m-15 0a7.5 7.5 0 1115 0m-15 0H3m16.5 0H21m-1.5 0H12m-8.457 3.077l1.41-.513m14.095-5.13l1.41-.513M5.106 17.785l1.15-.964m11.49-9.642l1.149-.964M7.501 19.795l.75-1.3m7.5-12.99l.75-1.3m-6.063 16.658l.26-1.477m2.605-14.772l.26-1.477m0 17.726l-.26-1.477M10.698 4.614l-.26-1.477M16.5 19.794l-.75-1.299M7.5 4.205L12 12m6.894 5.785l-1.149-.964M6.256 7.178l-1.15-.964m15.352 8.864l-1.41-.513M4.954 9.435l-1.41-.514M12.002 12l-3.75 6.495" />
                                </svg>
                                <span x-show="downloading == 1">&nbsp;Processing ...</span>
                                {{-- cog icon downloadBtnClicked --}}

                                <svg x-show="downloading == 0" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M13.5 16.875h3.375m0 0h3.375m-3.375 0V13.5m0 3.375v3.375M6 10.5h2.25a2.25 2.25 0 002.25-2.25V6a2.25 2.25 0 00-2.25-2.25H6A2.25 2.25 0 003.75 6v2.25A2.25 2.25 0 006 10.5zm0 9.75h2.25A2.25 2.25 0 0010.5 18v-2.25a2.25 2.25 0 00-2.25-2.25H6a2.25 2.25 0 00-2.25 2.25V18A2.25 2.25 0 006 20.25zm9.75-9.75H18a2.25 2.25 0 002.25-2.25V6A2.25 2.25 0 0018 3.75h-2.25A2.25 2.25 0 0013.5 6v2.25a2.25 2.25 0 002.25 2.25z" />
                                </svg>
                                <span x-show="downloading == 0">&nbsp;Get Template</span>



                            </button>

                         
                                <div x-show="showDownloadBtn">
                                    <button wire:click="downloadTemplate"
                                        class="flex p-3 text-sm text-green-800 border border-green-500 rounded-lg shadow-md dark:text-gray-100 shadow-green-500/30 hover:text-white hover:bg-green-500">

                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M9 13.5l3 3m0 0l3-3m-3 3v-6m1.06-4.19l-2.12-2.12a1.5 1.5 0 00-1.061-.44H4.5A2.25 2.25 0 002.25 6v12a2.25 2.25 0 002.25 2.25h15A2.25 2.25 0 0021.75 18V9a2.25 2.25 0 00-2.25-2.25h-5.379a1.5 1.5 0 01-1.06-.44z" />
                                        </svg>
                                        &nbsp;Download

                                    </button>
                                </div>
                          
                        </div>

                    </div>


                    <div class="pt-10 space-y-3 text-sm">
                        <p class="font-semibold text-green-600">How to Use httrack-online?
                        </p>
                        <ul class="space-y-2">
                            <li class="dark:text-gray-100"><span class="font-semibold text-green-600">Copy the URL:</span>
                                Copy the
                                URL of
                                the webpage you want
                                to capture.
                            </li>



                            <li class="dark:text-gray-100"><span class="font-semibold text-green-600">Paste the URL
                                    Here:</span>
                                In the provided
                                input
                                field, paste the
                                copied URL.</p>

                            <li class="dark:text-gray-100"><span class="font-semibold text-green-600">Click the 'Get Template'
                                    Button:</span>
                                After
                                pasting the URL, click
                                the 'Get Template'
                                button to initiate the process.</li>

                            <li class="dark:text-gray-100"><span class="font-semibold text-green-600">Enjoy!:</span> Once the
                                process is
                                complete, you
                                can enjoy the
                                downloaded webpage
                                template
                                along with all its assets.</li>

                            <li class=" dark:text-gray-100"><span class="font-semibold text-green-600">Happy
                                    web
                                    development!</span></li>
                        </ul>
                    </div>

                </div>
            </div>
      

        </div>
        HTML;
    }
}
