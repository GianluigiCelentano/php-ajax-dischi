Vue.config.devtools = true

const app = new Vue ({
    el: '#app',
    data: {
	discs: []
    }, 
    created() {
        axios.get('http://localhost:8888/php-ajax-dischi/api-seconda-milestone.php')
	.then((response) => {
		this.discs = response.data;
	})
    },
    methods: {

    }
})