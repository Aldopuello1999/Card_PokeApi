<div class="modal fade" id="detalleModal{{ $pokemon['name'] }}" tabindex="-1" role="dialog" aria-labelledby="detalleModalLabel{{ $pokemon['name'] }}" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="detalleModalLabel{{ $pokemon['name'] }}">Detalles de {{ $pokemon['name'] }}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body" style="width: 18rem; justify-content: center">
                <img src="https://img.pokemondb.net/sprites/home/normal/{{ $pokemon['name'] }}.png" class="card-img-top">
                <div id="pokemonInfo{{ $pokemon['url'] }}"></div>
            </div>
            {{-- <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
            </div> --}}
        </div>
    </div>
</div>

<script>
    $(document).ready(function() {
        $('#detalleModal{{ $pokemon['name'] }}').on('show.bs.modal', function() {
            fetch('{{ $pokemon['url'] }}')
                .then(response => response.json())
                .then(data => {
                    const baseHappiness = data.base_happiness;
                    const captureRate = data.capture_rate;
                    const color = data.color.name;
                    const eggGroups = data.egg_groups.map(group => group.name).join(', ');
                    const evolutionChainUrl = data.evolution_chain.url;

                    let flavorText = '';
                    data.flavor_text_entries.forEach(entry => {
                        if (entry.language.name === 'es' && entry.version.name === 'red') {
                            flavorText = entry.flavor_text.replace('\n', ' ');
                        }
                    });

                    const modalBody = document.getElementById('detalleModal{{ $pokemon['name'] }}').getElementsByClassName('modal-body')[0];
                    modalBody.innerHTML += `
                        <p><strong>Base Happiness:</strong> ${baseHappiness}</p>
                        <p><strong>Capture Rate:</strong> ${captureRate}</p>
                        <p><strong>Color:</strong> ${color}</p>
                        <p><strong>Egg Groups:</strong> ${eggGroups}</p>
                        <p><strong>Evolution Chain URL:</strong> ${evolutionChainUrl}</p>
                        <p><strong>Flavor Text:</strong> ${flavorText}</p>
                    `;
                });
        });
    });
</script>

