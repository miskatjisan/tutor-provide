<template>
    <table>
      <thead>
        <tr>
          <th>Name</th>
          <th>Email</th>
        </tr>
      </thead>
      <tbody>
        <tr v-for="user in users" :key="user.id">
          <td>{{ user.name }}</td>
          <td>{{ user.email }}</td>
        </tr>
      </tbody>
    </table>
  </template>

<script>
import axios from "axios";

    export default {
  data() {
    return {
  
      users: [ ],

      showDetails: Array(3).fill(false),

    };
   
  },
  created() {
    this.fetchUsers();

  },

  methods:{
         /* Get/Fetch All Post */

         fetchUsers() {
              axios.get('/api/users')
                .then((response) => {
                  this.users = response.data;

                  this.users = response.data.sort((a, b) => {
                  return new Date(b.created_at) - new Date(a.created_at);

                  });

                })
                .catch((error) => {
                  console.error(error);
                });
            },

  }


}
</script>