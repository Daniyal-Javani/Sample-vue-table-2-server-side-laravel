<template>
    <div class="container">
        <div id="people">
            sdfsafasfd
          <v-client-table :data="tableData" :columns="columns" :options="options" :name="namest"></v-client-table>
        </div>
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        },
        data: function() {
                return {
                    columns: ['id', 'name', 'age'],
                    tableData: [
                        { id: 1, name: "John", age: "20" },
                        { id: 2, name: "Jane", age: "24" },
                        { id: 3, name: "Susan", age: "16" },
                        { id: 4, name: "Chris", age: "55" },
                        { id: 5, name: "Dan", age: "40" }
                    ],
                    options: {
                        // see the options API
                    },
                    namest: 'asdf'
                }
            },
    }
</script>
