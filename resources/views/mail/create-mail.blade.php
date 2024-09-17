@component('mail::message')
    # A serie {{ $serieName }} foi criada com sucesso.

    Quantidade de temporadas: {{ $qtdTempordas }}
    Quantidade de Episodios: {{ $qtdEpisodios }}

    Para mais informação acesse o aqui: 
    @component('mail::button', ['url' => route('series.index')])
        Ver informação
    @endcomponent
@endcomponent