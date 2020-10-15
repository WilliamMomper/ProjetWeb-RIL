import AllBooks from './components/AllBooks.vue';
import AllVehicules from './components/AllVehicules.vue';
import AllAgence from './components/AllAgence.vue';
import AllAgent from './components/AllAgent.vue';

import AddBook from './components/AddBook.vue';
import AddVehicule from './components/AddVehicule.vue';
import AddAgence from './components/AddAgence.vue';
import AddAgent from './components/AddAgent.vue';

import EditBook from './components/EditBook.vue';
import EditVehicule from './components/EditVehicule.vue';
import EditAgence from './components/EditAgence.vue';
import EditAgent from './components/EditAgent.vue';

import login from './components/login.vue';

export const routes = [
   
    {
        name: 'home',
        path: '/',
        component: AllVehicules
    },
    {
        name: 'login',
        path: '/',
        component: login
    },
     {
        name: 'HomeAgence',
        path: '/Agences',
        component: AllAgence
    },
     {
        name: 'HomeAgent',
        path: '/Agents',
        component: AllAgent
    },
    {
        name: 'addAgent',
        path: '/addAgent',
        component: AddAgent
    },
    
    {
        name: 'addVehicule',
        path: '/addVehicule',
        component: AddVehicule
    },
    {
        name: 'addAgence',
        path: '/addAgence',
        component: AddAgence
    },
    {
        name: 'edit',
        path: '/edit/:id',
        component: EditBook
    },
    {
        name: 'editAgence',
        path: '/editAgence/:id',
        component: EditAgence
    },
    {
        name: 'editAgent',
        path: '/editAgent/:id',
        component: EditAgent
    },
    {
        name: 'editVehicule',
        path: '/editVehicule/:id',
        component: EditVehicule
    }
];