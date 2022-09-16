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
          {text: '有効期限', align: 'center', value: 'expire_date'},
          {text: '顧客名', align: 'center', value: 'customer_id'},
          {text: '割当先', align: 'center', value: 'assigned_to'},
          {text: '通知', align: 'center', value: 'is_notify'},
          {text: '作成日', align: 'center', value: 'created_at'},
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