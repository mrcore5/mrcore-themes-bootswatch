

<template id="grid-template">
	<table>
		<thead>
			<tr>
				<th v-for="key in columns" @click="sortBy(key)" :class="{active: sortKey == key}">
				@{{key | capitalize}}
				<span class="arrow" :class="sortOrders[key] > 0 ? 'asc' : 'dsc'"></span>
				</th>
			</tr>
		</thead>
		<tbody>
			<tr v-for="
				entry in data
				| filterBy filterKey
				| orderBy sortKey sortOrders[sortKey]">

				<td v-for="key in columns">@{{entry[key]}}</td>
			</tr>
		</tbody>
	</table>
</template>
