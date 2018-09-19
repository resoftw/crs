<template>
<v-list>
      <v-list-group
        v-for="item in items"
      	v-if="item.action!='-'"
        v-model="item.active"
        :key="item.title"
        :prepend-icon="item.action"
        no-action
      >
        <v-list-tile slot="activator">
          <v-list-tile-content>
            <v-list-tile-title>{{ item.title }}</v-list-tile-title>
          </v-list-tile-content>
        </v-list-tile>

        <v-list-tile
          v-for="subItem in item.items"
          :key="subItem.title"
          @click=""
        >
          <v-list-tile-content>
            <v-list-tile-title>{{ subItem.title }}</v-list-tile-title>
          </v-list-tile-content>

          <v-list-tile-action>
            <v-icon>{{ subItem.action }}</v-icon>
          </v-list-tile-action>
        </v-list-tile>
      </v-list-group>
      <v-divider v-else></v-divider>
    </v-list>
</template>
<script>
export default {
	data(){
		return {

			items: [
	          {
	            action: 'dashboard',
	            title: 'Dashboard',
	            active: true,
	          },
	          {
	            action: 'live_help',
	            title: 'Information',
	            active: true,
	            items: [
	              { title: 'Cara Pengaduan' },
	              { title: 'Event Promotion' },
	              { title: 'List Distributor' }
	            ]
	          },
	          {
	            action: 'report',
	            title: 'Lapor',
	            active:true,
	            items: [
	              { title: 'Pengaduan' },
	              { title: 'Progress Pengaduan' },
	              { title: 'Kritik dan Saran' },
	            ]
	          },
	          {
	            action: 'style',
	            title: 'E-Ticketing',
	            items: [
	              { title: 'Nomor Ticket' }
	            ]
	          },
	          {
	            action: 'layers',
	            title: 'Products &amp; Packages',
	          },
	          {
	          	action:'-',
	          },
	          {
	            action: 'settings',
	            title: 'Settings',
	            items: [
	              { title: 'Products' },
	              { title: 'Event Promotion' },
	              { title: 'Distributor' },
	              { title: 'Template' },
	              { title: 'Users' },
	              { title: 'Reports' },
	            ]
	          },
	        ]

		}
	}
}
</script>