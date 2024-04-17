const { createApp } = Vue

createApp({
    data() {
        return {
            dischi: [],
        }
    },
    methods: {

    },
    mounted() {
        axios.get('assets/json/dischi.json')
            .then(response => {
                this.dischi = response.data
            })
            .catch(error => {
                console.error('controlla il percorso');
            });
    }
}).mount('#app')