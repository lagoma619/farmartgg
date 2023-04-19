<!--     Fonts and icons     -->
<link href="{{url('https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700')}}" rel="stylesheet" />
<!-- Font Awesome Icons -->
<script src="{{url('https://kit.fontawesome.com/42d5adcbca.js')}}" crossorigin="anonymous"></script>
<!-- Nucleo Icons -->
<link href="{{asset('build/assets/css/nucleo-icons.css')}}" rel="stylesheet" />
<link href="{{asset('build/assets/css/nucleo-svg.css')}}" rel="stylesheet" />
<!-- Main Styling -->
<link href="{{asset('build/assets/css/argon-dashboard-tailwind.css')}}" rel="stylesheet" />


<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Invoices') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">

                <div class="relative flex flex-col w-full min-w-0 mb-0 break-words bg-white border-0 border-transparent border-solid shadow-xl rounded-2xl bg-clip-border">
                    <div class="flex-auto px-0 pt-0 pb-2">
                        <div class="p-0 overflow-x-auto">
                            <table class="items-center w-full mb-0 align-top border-gray-200 text-slate-500">
                                <thead class="align-bottom">
                                <tr>
                                    <th class="px-6 py-3 font-bold text-left uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-s border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">FACTURA #</th>
                                    <th class="px-6 py-3 pl-2 font-bold text-left uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-s border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">CLIENTE</th>
                                    <th class="px-6 py-3 font-bold text-center uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-s border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">TIPO FACTURACIÓN</th>
                                    <th class="px-6 py-3 font-bold text-center uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-s border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">OBSERVACIONES</th>
                                    <th class="px-6 py-3 font-semibold capitalize align-middle bg-transparent border-b border-gray-200 border-solid shadow-none tracking-none whitespace-nowrap text-slate-400 opacity-70"></th>
                                </tr>
                                </thead>
                                <tbody>@if($facturas != null)

                                @foreach($facturas as $factura)
                                    <tr>
                                        <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                                            <div class="flex px-2 py-1">
                                                <div class="flex flex-col justify-center">
                                                    <h6 class="mb-0 leading-normal text-sm">John Michael</h6>
                                                    <p class="mb-0 leading-tight text-xs text-slate-400">john@creative-tim.com</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                                            <p class="mb-0 font-semibold leading-tight text-xs">Manager</p>
                                            <p class="mb-0 leading-tight text-xs text-slate-400">Organization</p>
                                        </td>
                                        <td class="p-2 leading-normal text-center align-middle bg-transparent border-b text-sm whitespace-nowrap shadow-transparent">
                                            <span class="bg-gradient-to-tl from-emerald-500 to-teal-400 px-3.6 text-xs rounded-1.8 py-2.2 inline-block whitespace-nowrap text-center align-baseline font-bold uppercase leading-none text-white">Online</span>
                                        </td>
                                        <td class="p-2 text-center align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                                            <span class="font-semibold leading-tight text-xs text-slate-400">23/04/18</span>
                                        </td>
                                        <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                                            <a href="javascript:;" class="font-semibold leading-tight text-xs text-slate-400"> Edit </a>
                                        </td>
                                    </tr>
                                @endforeach
                                @endif
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</x-app-layout>
