<div class="fixed z-10 inset-0 overflow-y-auto ease-out duration-400">
    <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">

        <div class="fixed inset-0 transition-opacity">
            <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
        </div>

        <!-- This element is to trick the browser into centering the modal contents. -->
        <span class="hidden sm:inline-block sm:align-middle sm:h-screen"></span>​

        <div class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full" role="dialog" aria-modal="true" aria-labelledby="modal-headline">
            <form>
                <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">

                        <div class="mb-4">
                            <label for="exam" class="block text-gray-700 text-sm font-bold mb-2">Exame:</label>
                            <select id="exam" class="block w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-select focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray" wire:model="fields.exam_id">
                                <option value="">SELECIONE</option>
                                @foreach($relationships['exams'] as $exam)
                                    <option value="{{ $exam['id'] }}">{{ $exam['name'] }}</option>
                                @endforeach
                            </select>
                            @error('fields.exam_id') <span class="text-red-500">{{ $message }}</span>@enderror
                        </div>


                    <div class="mb-4">
                        <label for="exam" class="block text-gray-700 text-sm font-bold mb-2">Cargo:</label>
                        <select id="exam" class="block w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-select focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray" wire:model="fields.position_id">
                            <option value="">SELECIONE</option>
                            @foreach($relationships['positions'] as $position)
                                <option value="{{ $position['id'] }}">{{ $position['name'] }}</option>
                            @endforeach
                        </select>
                        @error('frequency_id') <span class="text-red-500">{{ $message }}</span>@enderror
                    </div>

                    <div class="grid grid-cols-3 gap-4 mb-4">
                        <div>
                            <div class="flex mt-6 text-sm">
                                <label class="flex items-center dark:text-gray-400">
                                    <input
                                        type="checkbox"
                                        class="text-purple-600 form-checkbox focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray"
                                        wire:model="fields.admission"
                                    /> <span class="ml-2"> Admissão  </span>
                                </label>
                            </div>

                            <div class="mb-4 mt-4">
                                <label for="admission_month" class="block text-gray-700 text-xs font-bold mb-2">Meses após admissão:</label>
                                <input type="number" class="text-xs shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="exampleFormControlInput1" placeholder="Nº de meses" wire:model="fields.admission_month">
                                @error('fields.admission_month') <span class="text-red-500">{{ $message }}</span>@enderror
                            </div>
                        </div>
                        <div>
                            <div class="flex mt-6 text-sm">
                                <label class="flex items-center dark:text-gray-400">
                                    <input
                                        type="checkbox"
                                        class="text-purple-600 form-checkbox focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray"
                                        wire:model="fields.periodical"
                                    /> <span class="ml-2"> Periódico  </span>
                                </label>
                            </div>

                            <div class="mb-4 mt-4">
                                <label for="periodical_frequency_id" class="block text-gray-700 text-xs font-bold mb-2">Frequencia:</label>
                                <select id="periodical_frequency_id" class="block w-full mt-1 text-xs dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-select focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray" wire:model="fields.periodical_frequency_id">
                                    <option value="">SELECIONE</option>
                                    @foreach($relationships['frequencies'] as $frequency)
                                        <option value="{{ $frequency['id'] }}">{{ $frequency['name'] }}</option>
                                    @endforeach
                                </select>
                                @error('fields.periodical_frequency_id') <span class="text-red-500">{{ $message }}</span>@enderror
                            </div>


                        </div>
                        <div>
                            <div class="flex mt-6 text-sm">
                                <label class="flex items-center dark:text-gray-400">
                                    <input
                                        type="checkbox"
                                        class="text-purple-600 form-checkbox focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray"
                                        wire:model="fields.change_position"
                                    /> <span class="ml-2"> Mudança de função  </span>
                                </label>
                            </div>
                            <div class="flex mt-6 text-sm">
                                <label class="flex items-center dark:text-gray-400">
                                    <input
                                        type="checkbox"
                                        class="text-purple-600 form-checkbox focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray"
                                        wire:model="fields.back_work"
                                    /> <span class="ml-2"> Retorno ao trabalho </span>
                                </label>
                            </div>
                            <div class="flex mt-6 text-sm">
                                <label class="flex items-center dark:text-gray-400">
                                    <input
                                        type="checkbox"
                                        class="text-purple-600 form-checkbox focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray"
                                        wire:model="fields.dismission"
                                    /> <span class="ml-2"> Demissão </span>
                                </label>
                            </div>


                        </div>
                    </div>

                </div>

                <div class="bg-gray-50 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">
        <span class="flex w-full rounded-md shadow-sm sm:ml-3 sm:w-auto">
          <button wire:click.prevent="store()" type="button" class="inline-flex justify-center w-full rounded-md border border-transparent px-4 py-2 bg-green-600 text-base leading-6 font-medium text-white shadow-sm hover:bg-green-500 focus:outline-none focus:border-green-700 focus:shadow-outline-green transition ease-in-out duration-150 sm:text-sm sm:leading-5">
            Salvar
          </button>
        </span>
                    <span class="mt-3 flex w-full rounded-md shadow-sm sm:mt-0 sm:w-auto">

          <button wire:click="closeModal()" type="button" class="inline-flex justify-center w-full rounded-md border border-gray-300 px-4 py-2 bg-white text-base leading-6 font-medium text-gray-700 shadow-sm hover:text-gray-500 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue transition ease-in-out duration-150 sm:text-sm sm:leading-5">
            Fechar
          </button>
        </span>
            </form>
        </div>

    </div>
</div>
</div>
