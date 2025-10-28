app.component('search-list-circuitos', {
    template: $TEMPLATES['search-list-circuitos'],

    setup() {
        // os textos estão localizados no arquivo texts.php deste componente
        const text = Utils.getTexts('search-list-circuitos');

        return { text }
    },

    data() {
        return {
            query: {},
            typeText: '',
            selectedOrder: 'startsOn, updateTimestamp DESC',
        }
    },

    created() {
        if (this.type == "agent") {
            this.typeText = __('text', 'search-list-circuitos');
        }else {
            this.typeText = __('label', 'search-list-circuitos');
        }
    },

    mounted() {
        this.query = Utils.parsePseudoQuery(this.pseudoQuery);
    },
    watch: {
        pseudoQuery: {
            handler(pseudoQuery) {
                this.query = Utils.parsePseudoQuery(pseudoQuery);
            },
            deep: true,
        }
    },

    props: {
        type: {
            type: String,
            required: true,
        },
        limit: {
            type: Number,
            default: 20,
        },
        select: {
            type: String,
            required: true
        },
        pseudoQuery: {
            type: Object,
            required: true
        }
    },

    computed: {
        entityType() {
            switch (this.type) {
                case 'agent':
                    return this.text('agente');
                case 'space':
                    return this.text('espaço');
                case 'event':
                    return this.text('evento');
                case 'opportunity':
                    return this.text('opportunidade');
                case 'project':
                    return this.text('projeto');
            }
        },

        order () {
            if (this.selectedOrder) {
                return this.selectedOrder;
            }

            const keyword = this.pseudoQuery['@keyword'] ?? '';
            if ($DESCRIPTIONS[this.type].name && keyword.length >= 3) {
                return 'name ASC';
            }
            return 'createTimestamp DESC';
        },
    },
});
