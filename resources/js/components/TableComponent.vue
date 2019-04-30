<template>
    <div class="container">
        <div>
            <v-server-table url="/api/users" :data="tableData" :columns="columns" :options="options" ></v-server-table>
        </div>
    </div>
</template>

<script>
    export default {
        data: function() {
            return {
                columns: ['name', 'email'],
                tableData: [],
                options: {
                    filterable: ['name', 'email'],
                    sortable: ['name', 'email'],
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
        }
    }
</script>
