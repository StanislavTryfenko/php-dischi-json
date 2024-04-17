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
        axios.get('./assets/php_api/api_dischi.php')
            .then(response => {
                this.dischi = response.data
                console.log(this.dischi);
            })
            .catch(error => {
                console.error('controlla il percorso');
            });
    }
}).mount('#app')