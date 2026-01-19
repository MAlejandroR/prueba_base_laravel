import './bootstrap';

import Alpine from 'alpinejs';
import Swal from 'sweetalert2'
import {createApp} from "vue";
import {Tabla} from "vue";

window.Swal = Swal;   // <-- ESTO ES LA CLAVE





createApp({
    components:{
        Tabla
    }
})
window.Alpine = Alpine;

Alpine.start();
