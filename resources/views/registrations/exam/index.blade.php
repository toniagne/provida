<div class="container px-6 mx-auto grid">
    <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200" >
        {{ $component_title }}
    </h2>

    <a class="flex items-center justify-between p-4 mb-8 text-sm font-semibold text-purple-100 bg-purple-600 rounded-lg shadow-md focus:outline-none focus:shadow-outline-purple"
       wire:click="create()"
    >
        <div class="flex items-center">
            <svg
                class="w-5 h-5 mr-2"
                fill="currentColor"
                viewBox="0 0 20 20"
            >
                <path
                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"
                ></path>
            </svg>
            <span>Cadastrar {{ $component_title }}</span>
        </div>
        <span>Adicionar &RightArrow;</span>
    </a>
    @if($isOpen)
        @include('registrations.exam.create')
    @endif

    <div class="w-full mb-8 overflow-hidden rounded-lg shadow-xs">
        <div class="w-full overflow-x-auto">
            @if (session()->has('message'))
                <div class="bg-teal-100 border-t-4 border-teal-500 rounded-b text-teal-900 px-4 py-3 shadow-md my-3" role="alert">
                    <div class="flex">
                        <div>
                            <p class="text-sm">{{ session('message') }}</p>
                        </div>
                    </div>
                </div>
            @endif

            <table class="w-full whitespace-no-wrap">
                <thead>
                <tr class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                    <th class="px-4 py-3">Exame</th>
                    <th class="px-4 py-3">Periodicidade</th>
                    <th class="px-4 py-3">Cidade/Unidade</th>
                    <th class="px-4 py-3">Valor</th>
                    <th class="px-4 py-3">Ações</th>
                </tr>
                </thead>
                <tbody  class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">
                @foreach($table as $exam)
                    <tr class="text-gray-700 dark:text-gray-400">
                        <td class="px-4 py-3 text-sm">  {{ $exam->name }} </td>
                        <td class="px-4 py-3 text-sm">{{ $exam->frequency->name }}</td>
                        <td class="px-4 py-3 text-sm">{{ $exam->unity->city }}</td>
                        <td class="px-4 py-3 text-sm">@money($exam->amount)</td>
                        <td class="px-4 py-3 text-xs">
                            <button wire:click="edit({{ $exam->id }})" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Editar</button>
                            <button wire:click="delete({{ $exam->id }})" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">Apagar</button>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
     </div>

</div>
