import './bootstrap';

// Import our custom CSS
import '~resources/scss/app.scss';

// Import all of Bootstrap's JS
import * as bootstrap from 'bootstrap';

// Search Img in Resources to Add the to Public
import.meta.glob([
    '../img/**'
]);
