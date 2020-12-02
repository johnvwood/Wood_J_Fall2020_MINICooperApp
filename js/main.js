import { fetchData } from "./modules/async.js";

//const myVM = (() => {
(()=>{
    //let vue_vm = new Vue({
    new Vue({
        data: {
            carData:[],
            carCurrent:{},
        },

        mounted(){
            fetchData("./includes/index.php")
                .then(data => {
                    data.forEach(car => this.carData.push(car));
                }).catch(err => console.error(err));
        },

        methods:{
            carClicked(target){
                this.carCurrent = target;
                console.log('Clicked on car');
            }
        },

    }).$mount(".app");
})();