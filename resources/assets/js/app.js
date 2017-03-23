


require('./bootstrap');

Vue.component('example', require('./components/Example.vue'));
Vue.component('widget-grid', require('./components/WidgetGrid.vue'));
Vue.component('marketing-image-grid', require('./components/MarketingImageGrid.vue'));
Vue.component('user-chart', require('./components/UserChart.vue'));

const app = new Vue({
    el: 'body'
});
