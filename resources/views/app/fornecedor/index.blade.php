<h3>Fornecedor</h3>

{{-- Fica o comentário que será descartado pelo interpretador do blade --}}

@php

@endphp

@isset($fornecedores)

    @forelse($fornecedores as $indice => $fornecedor)
        Iteração atual: {{ $loop->iteration }}
        <br>
        Fornecedor: {{ $fornecedor['nome'] }}
        <br>
        Status: {{ $fornecedor['status'] }}
        <br>
        CNPJ: {{ $fornecedor['cnpj'] ?? '' }}
        <br>
        Telefone: ({{ $fornecedor['ddd'] ?? '' }}) {{ $fornecedor[1]['telefone'] ?? ''}}
        <br>
        @if($loop->first)
            Primeira Iteração.
        @endif

        @if ($loop->last)
            Última Iteração do loop.
        @endif
        <hr>
    @empty
        Não existem fornecedores cadastrados.
    @endforelse   


@endisset



