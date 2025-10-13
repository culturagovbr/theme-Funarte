app.component('search-filter-project', {
    template: $TEMPLATES['search-filter-project'],

    setup() {
        // os textos estão localizados no arquivo texts.php deste componente
        const text = Utils.getTexts('search-filter-project')
        return { text }
    },

    props: {
        position: {
            type: String,
            default: 'list'
        },
        pseudoQuery: {
            type: Object,
            required: true
        }
    },

    data() {
        const allowedSealIds = $MAPAS.config.funarteCircuitoSeals;
        const filteredSeals = $MAPAS.config.entityTable.seals.filter(seal =>
            allowedSealIds.includes(seal.id)
        );
        return {
            types: $DESCRIPTIONS.project.type.options,
            sealsNames: filteredSeals.map(seal => ({
                value: seal.id,
                label: seal.name
            })),
            sealsLabels: Object.fromEntries(filteredSeals.map(seal => [seal.id, seal.name])),
        }
    },

    computed: {
    },

    methods: {
        clearFilters() {
            const types = ['string', 'boolean'];
            for (const key in this.pseudoQuery) {
                if (Array.isArray(this.pseudoQuery[key])) {
                    this.pseudoQuery[key] = [];
                } else if (types.includes(typeof this.pseudoQuery[key])) {
                    delete this.pseudoQuery[key];
                }
            }
        }
    },
});
