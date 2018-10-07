<template>
<v-container fluid pt-0>
	<v-layout row>
		<v-flex sm12>
			<h2>Users</h2>

			<v-data-table
			    :headers="headers"
			    :items="users"
			    hide-actions
			    class="elevation-3"
			>
			    <template slot="items" slot-scope="props">
			      <td class='text-xs-right'>{{ props.item.id }}</td>
			      <td class="text-xs-left">{{ props.item.name }}</td>
			      <td class="text-xs-left">{{ props.item.email }}</td>
			      <td class="text-xs-center">{{ props.item.phone }}</td>
			    </template>
			</v-data-table>
		</v-flex>
	</v-layout>
	<v-layout row>
		<v-flex sm12>
			<v-btn color="info" class='ml-0 mt-3'>Add</v-btn>
		</v-flex>
	</v-layout>
</v-container>

</template>
<script>
  export default {
    data () {
      return {
        headers: [
          {
            text: 'ID',
            align: 'left',
            /*sortable: false,*/
            value: 'id'
          },
          { text: 'Full Name', value: 'name' },
          { text: 'e-Mail', value: 'email' },
          { text: 'Phone', value: 'phone' },
        ],
        users:[],
      }
    },
    created(){
    	this.users=[];
    	this.loadData();
    },
    methods:{
    	loadData(){
    		var vm=this;
    		axios.get('/users')
    		.then(r=>{
    			vm.users=r.data;
    		})
    		.catch(r=>{
    			console.log(r);
    		});
    	}
    },
  }
</script>