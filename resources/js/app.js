// Importación de dependencias.
import './bootstrap';
import '../sass/app.scss';
import '@fortawesome/fontawesome-free/scss/fontawesome.scss';
import '@fortawesome/fontawesome-free/scss/solid.scss';
import jQuery from "jquery";
import DataTable from 'datatables.net-bs5';
import 'datatables.net-responsive-bs5';
import language from 'datatables.net-plugins/i18n/es-MX.json';
import 'animate.css';

// Inicialización global de DataTable.
const table = new DataTable(document.querySelector('#tabla'), {
    reponsive: true,
    language: language
});

// Nuestros modulos que se vayan generando.

import './scaffold';