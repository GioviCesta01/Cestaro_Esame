import Vue from 'vue'
import App from './App.vue'

import List from '@/components/list.vue'
import Edit from '@/components/Edit.vue'
import Detail from '@/components/Detail.vue'
import Creation from '@/components/Creation.vue'
import VueRouter from 'VueRouter'

Vue.use(VueRouter)

const routes =[
  {
    path:'/list',
    components: List
  },
  {
    path:'/edit',
    components: Edit
  },
  {
    path:'/detail',
    components: Detail
  },
  {
    path:'/creation',
    components: Creation
  },
  {
    path:'',
    redirect:'/'
  }
];

Vue.config.productionTip = false

new Vue({
  render: h => h(App),
}).$mount('#app')

const router = new VueRouter({
  mode:'history',
  routes,
});
