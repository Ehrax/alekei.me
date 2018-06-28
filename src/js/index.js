import style from '../scss/style.scss';
import { animatedSpace, space } from './space.js';

$(() => {

    // render hero animation
    animatedSpace();

    // on resize listener
    $(window).resize(() => {
        space.removeAll();
        $('canvas').remove();
        animatedSpace();
    });
});