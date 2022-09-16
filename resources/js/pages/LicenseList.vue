<template>
  <v-data-table
    :headers="headers"
    :items="licenseList"
  >

  </v-data-table>
</template>

<script>
  export default {
    data () {
      return {
        licenseList: [],
        headers: [
          {text: 'ID', align: 'center', value: 'id'},
          {text: '製品名', align: 'center', value: 'product_name'},
          {text: 'プロダクトキー', align: 'center', value: 'product_key'},
        ],
      }
    },
    methods: {
      //ユーザー一覧
      indexLicense() {
        this.licenseList = [];
        axios.get('/api/licenses')
        .then( response =>{
          this.licenseList = response.data;
        })
        .catch (error => {
          console.log("Error : " + response);
        });
      }
    },
    mounted() {
      this.indexLicense();
    }
  }
</script>