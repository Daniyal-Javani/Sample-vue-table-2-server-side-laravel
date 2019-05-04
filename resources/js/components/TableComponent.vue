<template>
    <div class="container">
        <div>
            <v-server-table url="/api/users" :data="tableData" :columns="columns" :options="options" >
                <a slot="edit" slot-scope="props" class="glyphicon glyphicon-pencil" @click="edit(props.row.id)"></a>
            </v-server-table>
        </div>
    </div>
</template>

<script>
    export default {
        data: function() {
            return {
                columns: ['id', 'name', 'email', 'edit'],
                tableData: [],
                options: {
                    filterable: ['id', 'name', 'email'],
                    sortable: ['id', 'name', 'email'],
                    perPage:25,
                    perPageValues:[25],
                    pagination: {
                        chunk: 3,
                        edge: true,
                        //set dropdown to true to get dropdown instead of pagenation
                        dropdown: false
                    },


                    requestAdapter(data) {
                        return {
                            sort: data.orderBy ? data.orderBy : 'name',
                            direction: data.ascending ? 'asc' : 'desc',
                            query: data.query,
                            byColumn: data.byColumn,
                            limit: data.limit,
                            page: data.page,
                            orderBy: data.orderBy,
                            ascending: data.ascending,
                        }
                    },

                    responseAdapter({data}) {
                        return {
                            data: data.data,
                            count: data.count
                        }
                    },

                    templates: {
                    }
                }

            }
        },

        methods: {
            edit(id) {
                console.log(id);
                return null;
            },
        }
    }
</script>
