<div class="p-5">

    <div class="col-span-12 overflow-auto intro-y lg:overflow-visible">

        <table class="table -mt-4 table-report">
            <thead>
                <tr>
                <th class="whitespace-no-wrap ">REFERENCIA DE PAGO</th>
                    <th class="whitespace-no-wrap ">FECHA DE PAGO </th>
                    <th class="whitespace-no-wrap ">ESTADO </th>

                </tr>
            </thead>
            <tbody>
                @foreach ($historiales as $historial)
                    <tr class="">
                        <td class="">{{ $historial->reference_id }}</td>
                        <td class="">{{ $historial->fecha_at }}</td>
                        <td class="">
                            @switch($historial->status)
                                @case('approved')
                                    Aprobado
                                    @break
                                @case('declined')
                                    Declinado
                                    @break
                                @case('pending')
                                    Pendiente
                                    @break
                                @case('refunded')
                                    Regresado
                                    @break
                            @endswitch

                            </td>
                    </tr>
                @endforeach
                @if($historiales->count() == 0 )
                <tr class="">
                    <td class="">
                        <h1>Sin Resultados</h1>
                    </td>
                    <td class="">

                    </td>
                    <td class="">

                    </td>

                </tr>
                @endif
            </tbody>
        </table>
        <div class="">

            {{ $historiales->links() }}

            <select wire:model="perPage" class="w-20 mt-3 input box sm:mt-0">
                <option>2</option>
                <option>5</option>
                <option>10</option>
                <option>20</option>
                <option>50</option>
                <option>100</option>
            </select>
    </div>
    </div>
</div>
