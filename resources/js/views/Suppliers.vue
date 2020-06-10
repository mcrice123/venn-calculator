<template>
    <div id="supplier-list">
        <p v-if="!suppliers.length">No suppliers</p>
        <div v-if="suppliers.length">
            <ul>
                <li v-for="supplier in suppliers" :key="supplier.id">hello</li>
            </ul>
        </div>
        <div v-else>
            <p>Sorry, there are no suppliers yet!</p>
        </div>
    </div>
</template>
<script>
    import axios from 'axios';

    export default {
        id: "#supplier-list",
        name: 'Suppliers',
        data: function() {
            return {
                suppliers: []
            };
        },

        created() {
            var vm = this;
            this.list(vm);
        },
        methods: {
            list(vm) {
            console.log("mounted called")
            axios["get"]('/suppliers/list')
                .then(response => { response.data.map( (supplier, index) => {
                        vm.$set(vm.suppliers, index, { name: supplier.name }) 
                    }
                )})
                .catch(error => console.log(error));
            }
        }
    };
</script>