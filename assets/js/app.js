const { createApp } = Vue

createApp({
    data() {
        return {
            dischi: [],
            showModal: false,
        }
    },
    methods: {
    },
    mounted() {
        axios.get('./php_api/api_dischi.php')
            .then(response => {
                this.dischi = response.data
                console.log(this.dischi);
            })
            .catch(error => {
                console.error('controlla il percorso');
            });
    }
}).mount('#app')