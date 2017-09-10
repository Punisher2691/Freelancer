<table style="width:100%">
  <tr>
    <th>Name</th>
    <th>Deadline</th> 
    <th>Hours</th>
    <th>Wage</th>
    <th>Comments</th>
  </tr>
    <?php 
    
    foreach ($rows as $row) {
        echo '<tr><td>'.$row->name.'</td><td>'.$row->deadline.'</td><td>'.$row->hours.'</td><td>'.$row->wage.' €</td><td>'.$row->comments.'</td></tr>';
    }
    ?>
    
<?php if ( isset( $_POST['contractName'] ) && isset( $_POST['deadline'] ) ) { ?>
  <tr>
    <td><?php echo $_POST['contractName']; ?></td>
    <td><?php echo $_POST['deadline']; ?></td> 
    <td><?php echo $_POST['hours']; ?></td>
    <td><?php echo $_POST['wage']." €"; ?></td>
    <td><?php echo $_POST['comments']; ?></td>
  </tr>
<?php } ?>     
</table>

<style> 
    table {
        border-collapse: collapse;
        border-radius: 5px;
    }

    th {
      text-align: left;
        margin: 20px;
                border-radius: 5px;
    }

    tr {
      background-color: #F1EFF7;
      border-radius: 5px;
      margin: 5px;
    }

    th, td {
      min-width: 70px;
      padding: 15px 20px;
    }
</style>


<!-- taken from: https://vuejs.org/v2/examples/grid-component.html -->  
<!-- component template 
<script type="text/x-template" id="contracts-table">
  <table>
    <thead>
      <tr>
        <th v-for="key in columns"
          @click="sortBy(key)"
          :class="{ active: sortKey == key }">
          {{ key | capitalize }}
          <span class="arrow" :class="sortOrders[key] > 0 ? 'asc' : 'dsc'">
          </span>
        </th>
      </tr>
    </thead>
    <tbody>
      <tr v-for="entry in filteredData">
        <td v-for="key in columns">
          {{entry[key]}}
        </td>
      </tr>
    </tbody>
  </table>
</script>

<!-- demo root element 
<div id="demo">
  <demo-grid
    :data="gridData"
    :columns="gridColumns"
    :filter-key="searchQuery">
  </demo-grid>
</div>

<script>
Vue.component('demo-grid', {
  template: '#contracts-table',
  props: {
    data: Array,
    columns: Array,
    filterKey: String
  },
  data: function () {
    var sortOrders = {}
    this.columns.forEach(function (key) {
      sortOrders[key] = 1
    })
    return {
      sortKey: '',
      sortOrders: sortOrders
    }
  },
  computed: {
    filteredData: function () {
      var sortKey = this.sortKey
      var filterKey = this.filterKey && this.filterKey.toLowerCase()
      var order = this.sortOrders[sortKey] || 1
      var data = this.data
      if (filterKey) {
        data = data.filter(function (row) {
          return Object.keys(row).some(function (key) {
            return String(row[key]).toLowerCase().indexOf(filterKey) > -1
          })
        })
      }
      if (sortKey) {
        data = data.slice().sort(function (a, b) {
          a = a[sortKey]
          b = b[sortKey]
          return (a === b ? 0 : a > b ? 1 : -1) * order
        })
      }
      return data
    }
  },
  filters: {
    capitalize: function (str) {
      return str.charAt(0).toUpperCase() + str.slice(1)
    }
  },
  methods: {
    sortBy: function (key) {
      this.sortKey = key
      this.sortOrders[key] = this.sortOrders[key] * -1
    }
  }
})

// bootstrap the demo
var demo = new Vue({
  el: '#demo',
  data: {
    gridColumns: ['name', 'deadline', 'hours', 'wage', 'comments'],
    gridData: [ 
      { name: 'Chuck Norris', deadline: 2017-05-21, wage: 2541},
      { name: 'Bruce Lee', deadline: 2017-06-12 },
      { name: 'Jackie Chan', hours: 5 },
      { name: 'Jet Li', wage: 14256 }
         
    ]
  }
})
</script>-->
 

