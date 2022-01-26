Vue.config.devtools = true;

const App = new Vue({
    el: '#root',
    data: {
        database: []
    },
    methods: {
        getSongsApi: function() {
            axios.get('http://localhost:8888/php-ajax-dischi/server.php')
            .then((response) => {
                this.database = response.data;
            });
        }
    },
    created: function() {
        this.getSongsApi();
    }
});