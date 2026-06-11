app.component('home-data', {
    template: $TEMPLATES['home-data'],

    data() {
        return {
            images: $MAPAS.homeData?.images || [],
        };
    },
});
