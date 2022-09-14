<template>
  <v-app>
    <v-navigation-drawer app v-model="drawer" clipped >
      <v-container>
        <v-list-item>
          <v-list-item-content>
            <v-list-item-title class="title">
              Navigation lists
            </v-list-item-title>
          </v-list-item-content>
        </v-list-item>
        <v-divider></v-divider>
        <v-list dense nav>
          <v-list-item v-for="nav_list in nav_lists" :key="nav_list.name">
            <v-list-item-icon>
              <v-icon>{{ nav_list.icon }}</v-icon>
            </v-list-item-icon>
            <v-list-item-content>
              <v-list-item-title>{{ nav_list.name }}</v-list-item-title>
            </v-list-item-content>
          </v-list-item>
        </v-list>
      </v-container>
    </v-navigation-drawer>
    <header>
      <v-app-bar color="primary" dark app clipped-left>
        <v-app-bar-nav-icon @click="drawer=!drawer"></v-app-bar-nav-icon>
        <v-toolbar-title>Vue Dashboad</v-toolbar-title>
        <v-spacer></v-spacer>
        <v-toolbar-items>
          <v-btn text>Login</v-btn>
        </v-toolbar-items>
      </v-app-bar>
    </header>
    <v-main><router-view></router-view></v-main>
    <v-footer color="primary" dark app>
      ©2022 Yuki Masaki
    </v-footer>
  </v-app>
</template>

<script>
  export default {
    data(){
      return{
        drawer: null,
        nav_lists:[
          {name: 'Getting Started',icon: 'mdi-vuetify'},
          {name: 'Customization',icon: 'mdi-cogs'},
          {name: 'Styles & animations',icon: 'mdi-palette'},
          {name: 'UI Components',icon: 'mdi-view-dashboard'},
          {name: 'Directives',icon: 'mdi-function'},
          {name: 'Preminum themes',icon: 'mdi-vuetify'},
        ],
      }
    }
  }
</script>  