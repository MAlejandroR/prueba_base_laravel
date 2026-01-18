import './bootstrap';

import Alpine from 'alpinejs';
import Swal from 'sweetalert2'
window.Swal = Swal;   // <-- ESTO ES LA CLAVE


window.Alpine = Alpine;

Alpine.start();
