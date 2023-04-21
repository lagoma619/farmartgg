
<!-- SELECTOR DE FECHA -->
<script src="{{asset('assets/vendor/jquery/dist/jquery.min.js')}}"></script>
<link rel="stylesheet" href="{{asset('assets/vendor/datepicker/css/bootstrap-datepicker3.css')}}">
<script src="{{asset('assets/vendor/datepicker/js/bootstrap-datepicker.js')}}"></script>
<script src="{{asset('assets/vendor/datepicker/js/bootstrap-datepicker.min.js')}}"></script>
<script src="{{asset('assets/vendor/datepicker/locales/bootstrap-datepicker.es.min.js')}}"></script>
<script src="{{asset('assets/js/areaxcliente.js')}}"></script>
<script>
    $('.datepicker').datepicker({
        format: "yyyy-mm-dd",
        language: "es",
        autoclose: true
    });
</script>

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Invoices') }}
        </h2>
    </x-slot>

    <div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6">
        <div class="flex flex-wrap">
            <div class="w-full px-3 shrink-0">
                <div class="relative flex flex-col min-w-0 break-words bg-white border-0 shadow-xl dark:bg-slate-850 dark:shadow-dark-xl rounded-2xl bg-clip-border">
                    <div class="border-black/12.5 rounded-t-2xl border-b-0 border-solid p-6 pb-0">
                        <div class="flex items-center">
                            <p class="mb-0 dark:text-black">Datos básicos de la fáctura</p>
                        </div>
                    </div>
                    <div class="col-2 mb-2 p-6">
                        <form>

                        <div class="container columns-2">

                                <div class="mb-4 px-3 shrink-0">
                                    <label for="clie_numero_id" class="lg:absolute mb-2 ml-1 w-full font-bold text-xs text-slate-700 dark:text-gray-500">Número de documento</label>
                                    <input type="text" name="clie_numero_id" placeholder="1130599190" class=" text-sm w-full rounded-lg border border-solid border-gray-300 placeholder:text-gray-400 focus:border-blue-500 text-center" />
                                </div>

                                <div class="mb-4 px-3 shrink-0">
                                    <label for="clie_nombre" class="lg:absolute mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-gray-500">Nombre del cliente</label>
                                    <input type="text" name="clie_nombre" placeholder="GUSTAVO GÓMEZ" class="text-sm w-full rounded-lg border border-solid border-gray-300 outline-none placeholder:text-gray-400 focus:border-blue-500 text-center" />
                                </div>

                        </div>
                            <div class="container columns-2">

                                <div class="mb-4 px-3 shrink-0">
                                    <label for="clie_eps" class="lg:absolute mb-2 ml-1 w-full font-bold text-xs text-slate-700 dark:text-gray-500">EPS del cliente</label>
                                    <input type="text" name="clie_eps" placeholder="EMSSANAR EPS" class=" text-sm w-full rounded-lg border border-solid border-gray-300 placeholder:text-gray-400 focus:border-blue-500 text-center" />
                                </div>

                                <div class="mb-4 px-3 shrink-0">
                                    <label for="form_tipo_facturacion" class="lg:absolute mb-2 ml-1 font-bold text-xs text-slate-700 dark:text-gray-500">Tipo de facturación </label>
                                    <input type="text" name="form_tipo_facturacion" placeholder="EVENTO" class="text-sm w-full rounded-lg border border-solid border-gray-300 outline-none placeholder:text-gray-400 focus:border-blue-500 text-center" />
                                </div>

                            </div>

                            <hr class="h-px mx-0 my-4 bg-transparent border-0 opacity-25 bg-gradient-to-r from-transparent via-black/40 to-transparent dark:bg-gradient-to-r dark:from-transparent dark:via-black dark:to-transparent " />

                            <p class="mb-0 dark:text-black">Detalle de la factura</p>

                            <div class="grid justify-center">
                                <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
                            </div>

                            <x-modal-search></x-modal-search>

                        </form>

                    </div>
                    </div>
                </div>
            </div>

    </div>
    </div>
</x-app-layout>
