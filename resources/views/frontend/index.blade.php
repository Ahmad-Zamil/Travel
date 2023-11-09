@extends('frontend.layouts.app')
@section('content')


<style>
    @charset "utf-8";
    /* CSS Document */

    /******************************

    ******************************/

    /***********
    1. Fonts
    ***********/

    @import url('https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800');

    @font-face {
        font-family: 'Beyond';
        src: url('../fonts/beyond_the_mountains.otf') format('truetype'),
            url('../fonts/beyond_the_mountains.ttf') format('opentype');
    }

    /*********************************
    2. Body and some general stuff
    *********************************/

    * {
        margin: 0;
        padding: 0;
        -webkit-font-smoothing: antialiased;
        -webkit-text-shadow: rgba(0, 0, 0, .01) 0 0 1px;
        text-shadow: rgba(0, 0, 0, .01) 0 0 1px;
    }

    body {
        font-family: 'Open Sans', sans-serif;
        font-size: 14px;
        font-weight: 400;
        background: #FFFFFF;
        color: #a5a5a5;
    }

    div {
        display: block;
        position: relative;
        -webkit-box-sizing: border-box;
        -moz-box-sizing: border-box;
        box-sizing: border-box;
    }

    ul {
        list-style: none;
        margin-bottom: 0px;
    }

    p {
        font-family: 'Open Sans', sans-serif;
        font-size: 14px;
        line-height: 2;
        font-weight: 400;
        color: #929191;
        -webkit-font-smoothing: antialiased;
        -webkit-text-shadow: rgba(0, 0, 0, .01) 0 0 1px;
        text-shadow: rgba(0, 0, 0, .01) 0 0 1px;
    }

    p a {
        display: inline;
        position: relative;
        color: inherit;
        border-bottom: solid 1px #ffa07f;
        -webkit-transition: all 200ms ease;
        -moz-transition: all 200ms ease;
        -ms-transition: all 200ms ease;
        -o-transition: all 200ms ease;
        transition: all 200ms ease;
    }

    a,
    a:hover,
    a:visited,
    a:active,
    a:link {
        text-decoration: none;
        -webkit-font-smoothing: antialiased;
        -webkit-text-shadow: rgba(0, 0, 0, .01) 0 0 1px;
        text-shadow: rgba(0, 0, 0, .01) 0 0 1px;
    }

    p a:active {
        position: relative;
        color: #FF6347;
    }

    p a:hover {
        color: #FFFFFF;
        background: #ffa07f;
    }

    p a:hover::after {
        opacity: 0.2;
    }

    /* ::selection
    {

    }
    p::selection
    {

    } */
    h1 {
        font-size: 48px;
    }

    h2 {
        font-size: 36px;
    }

    h3 {
        font-size: 24px;
    }

    h4 {
        font-size: 18px;
    }

    h5 {
        font-size: 14px;
    }

    h1,
    h2,
    h3,
    h4,
    h5,
    h6 {
        font-family: 'Open Sans', sans-serif;
        -webkit-font-smoothing: antialiased;
        -webkit-text-shadow: rgba(0, 0, 0, .01) 0 0 1px;
        text-shadow: rgba(0, 0, 0, .01) 0 0 1px;
    }

    h1::selection,
    h2::selection,
    h3::selection,
    h4::selection,
    h5::selection,
    h6::selection {}

    .form-control {
        color: #db5246;
    }

    section {
        display: block;
        position: relative;
        box-sizing: border-box;
    }

    .clear {
        clear: both;
    }

    .clearfix::before,
    .clearfix::after {
        content: "";
        display: table;
    }

    .clearfix::after {
        clear: both;
    }

    .clearfix {
        zoom: 1;
    }

    .float_left {
        float: left;
    }

    .float_right {
        float: right;
    }

    .trans_200 {
        -webkit-transition: all 200ms ease;
        -moz-transition: all 200ms ease;
        -ms-transition: all 200ms ease;
        -o-transition: all 200ms ease;
        transition: all 200ms ease;
    }

    .trans_300 {
        -webkit-transition: all 300ms ease;
        -moz-transition: all 300ms ease;
        -ms-transition: all 300ms ease;
        -o-transition: all 300ms ease;
        transition: all 300ms ease;
    }

    .trans_400 {
        -webkit-transition: all 400ms ease;
        -moz-transition: all 400ms ease;
        -ms-transition: all 400ms ease;
        -o-transition: all 400ms ease;
        transition: all 400ms ease;
    }

    .trans_500 {
        -webkit-transition: all 500ms ease;
        -moz-transition: all 500ms ease;
        -ms-transition: all 500ms ease;
        -o-transition: all 500ms ease;
        transition: all 500ms ease;
    }

    .fill_height {
        height: 100%;
    }

    .super_container {
        width: 100%;
        overflow: hidden;
    }

    .prlx_parent {
        overflow: hidden;
    }

    .prlx {
        height: 130% !important;
    }

    .nopadding {
        padding: 0px !important;
    }

    .button {
        display: inline-block;
        height: 35px;
        border-radius: 27px;
        overflow: hidden;
    }

    .button h3 {
        color: #1d1b1b;
        font-size: 20px;
        font-weight: 700;
        font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif
    }

    .button_bcg {
        position: absolute;
        top: 0;
        left: 0;
        width: 200%;
        height: 100%;
        background: linear-gradient(to right, #fa9e1b, #8d4fff, #fa9e1b);
        z-index: -1;
        -webkit-transition: all 400ms ease;
        -moz-transition: all 400ms ease;
        -ms-transition: all 400ms ease;
        -o-transition: all 400ms ease;
        transition: all 400ms ease;
    }

    .button:hover .button_bcg {
        left: -100%;
    }

    .button a {
        display: block;
        font-size: 15px;
        font-weight: 700;
        color: #fff;
        /* text-transform: uppercase; */
        line-height: 37px;
        padding-left: 46px;
        padding-right: 46px;
        white-space: nowrap;
        z-index: 2;
    }

    .button span {
        display: inline-block;
        vertical-align: middle;
        width: 5.75px;
        height: 5.63px;
        background: #FFFFFF;
        border-radius: 50%;
        margin-right: 2px;
    }

    .button span:first-child {
        margin-left: 10px;
    }

    .button span:nth-child(2) {
        opacity: 0.6;
    }

    .button span:last-child {
        opacity: 0.4;
        margin-right: 0px;
    }

    /*********************************
    3. Header
    *********************************/

    .header {
        position: fixed;
        width: 100%;
        background: rgba(54, 19, 84, 0.6);
        z-index: 12;
    }

    .header.scrolled {
        background: rgba(54, 19, 84, 0.85);
    }

    /*********************************
    3.1 Top Bar
    *********************************/

    .top_bar {
        width: 100%;
        height: 36px;
        background: #350a4e;
        -webkit-transition: all 400ms ease;
        -moz-transition: all 400ms ease;
        -ms-transition: all 400ms ease;
        -o-transition: all 400ms ease;
        transition: all 400ms ease;
    }

    .header.scrolled .top_bar {
        visibility: hidden;
        opacity: 0;
        height: 0px;
    }

    .phone {
        display: inline-block;
        margin-right: 36px;
        line-height: 36px;
        font-size: 10px;
        font-weight: 600;
        color: #FFFFFF;
    }

    .social_list_item {
        position: relative;
        display: inline-block;
        margin-right: 3px;
    }

    .social_list_item:last-child {
        margin-right: 0px;
    }

    .social_list_item a {
        display: block;
        width: 100%;
        padding-left: 10px;
        padding-right: 10px;
        line-height: 36px;
    }

    .social_list_item:hover a i {
        color: #fa9e1c;
    }

    .social_list_item a i {
        font-size: 12px;
        color: #FFFFFF;
        -webkit-transition: all 200ms ease;
        -moz-transition: all 200ms ease;
        -ms-transition: all 200ms ease;
        -o-transition: all 200ms ease;
        transition: all 200ms ease;
    }

    .social_list_item a:hover {
        color: #FFFFFF;
    }

    .user_box_link {
        display: inline-block;
    }

    .user_box_link a {
        display: block;
        font-size: 10px;
        line-height: 36px;
        font-weight: 600;
        color: #FFFFFF;
        text-transform: uppercase;
    }

    .user_box_link a:hover {
        color: #fa9e1c;
    }

    .user_box_login {
        margin-right: 15px;
    }

    .user_box_login::after {
        display: block;
        position: absolute;
        top: 15px;
        right: -9px;
        background: #FFFFFF;
        width: 1px;
        height: 9px;
        content: '';
    }

    .main_nav_col {
        height: 90px;
        -webkit-transition: all 400ms ease;
        -moz-transition: all 400ms ease;
        -ms-transition: all 400ms ease;
        -o-transition: all 400ms ease;
        transition: all 400ms ease;
    }

    .header.scrolled .main_nav_col {
        height: 90px;
    }

    /*********************************
    3.2 Logo
    *********************************/

    .logo_container {
        -webkit-transform: translateY(-6px);
        -moz-transform: translateY(-6px);
        -ms-transform: translateY(-6px);
        -o-transform: translateY(-6px);
        transform: translateY(-6px);
    }

    .header.scrolled .logo_container {
        -webkit-transform: none;
        -moz-transform: none;
        -ms-transform: none;
        -o-transform: none;
        transform: none;
    }

    .logo a {
        font-family: 'Open Sans', sans-serif;
        font-size: 30px;
        color: #f4f4f8;
        font-weight: 800;
        text-transform: uppercase;
    }

    .logo a img {
        display: inline-block;
        vertical-align: baseline;
        margin-right: 9px;
        -webkit-transform: translateY(2px);
        -moz-transform: translateY(2px);
        -ms-transform: translateY(2px);
        -o-transform: translateY(2px);
        transform: translateY(2px);
    }

    /*********************************
    3.3 Main Nav
    *********************************/

    .main_nav_container {
        margin-right: 221px;
    }

    .main_nav_item {
        position: relative;
        display: inline-block;
        margin-right: 40px;
    }

    .main_nav_item:last-child {
        margin-right: 0px;
    }

    .main_nav_item a {
        font-family: 'Open Sans', sans-serif;
        font-size: 13px;
        font-weight: 600;
        color: #FFFFFF;
        text-transform: uppercase;
        padding-bottom: 10px;
        padding-top: 10px;
    }

    .main_nav_item::after {
        display: block;
        position: absolute;
        left: -1px;
        bottom: -11px;
        width: calc(100% + 2px);
        height: 2px;
        background: linear-gradient(to right, #fa9e1b, #8d4fff);
        content: '';
        opacity: 0;
        -webkit-transition: all 200ms ease;
        -moz-transition: all 200ms ease;
        -ms-transition: all 200ms ease;
        -o-transition: all 200ms ease;
        transition: all 200ms ease;
    }

    .main_nav_item:hover::after {
        opacity: 1;
    }

    .content_search {
        -webkit-transform: translateY(-1px);
        -moz-transform: translateY(-1px);
        -ms-transform: translateY(-1px);
        -o-transform: translateY(-1px);
        transform: translateY(-1px);
        cursor: pointer;
    }

    .header.scrolled .content_search {
        -webkit-transform: none;
        -moz-transform: none;
        -ms-transform: none;
        -o-transform: none;
        transform: none;
    }

    .mag_glass {
        -webkit-transition: all 200ms ease;
        -moz-transition: all 200ms ease;
        -ms-transition: all 200ms ease;
        -o-transition: all 200ms ease;
        transition: all 200ms ease;
    }

    .content_search img {
        width: 17px;
        height: 17px;
    }

    .content_search:hover .mag_glass {
        fill: #fa9e1c;
    }

    .search_form {
        position: absolute;
        right: 15px;
        top: 120px;
        width: 237px;
        height: 40px;
        visibility: hidden;
        opacity: 0;
    }

    .search_form.active {
        top: 105px;
        visibility: visible;
        opacity: 1;
    }

    .search_content_input {
        width: 100%;
        height: 100%;
        background: #FFFFFF;
        color: #1b0b32;
        padding-left: 20px;
        outline: none !important;
        border: none !important;
        box-shadow: 0px 8px 20px rgba(0, 0, 0, 0.15);
    }

    .bez_1 {
        -webkit-transition: all 0.3s cubic-bezier(0.7, 0, 0.3, 1);
        -moz-transition: all 0.3s cubic-bezier(0.7, 0, 0.3, 1);
        -ms-transition: all 0.3s cubic-bezier(0.7, 0, 0.3, 1);
        -o-transition: all 0.3s cubic-bezier(0.7, 0, 0.3, 1);
        transition: all 0.3s cubic-bezier(0.7, 0, 0.3, 1);
    }

    /*********************************
    3.4 Menu
    *********************************/

    .hamburger {
        display: none;
        -webkit-transform: translateY(-3px);
        -moz-transform: translateY(-3px);
        -ms-transform: translateY(-3px);
        -o-transform: translateY(-3px);
        transform: translateY(-3px);
        cursor: pointer;
        margin-left: 20px;
    }

    .header.scrolled .hamburger {
        -webkit-transform: none;
        -moz-transform: none;
        -ms-transform: none;
        -o-transform: none;
        transform: none;
    }

    .hamburger i {
        font-size: 24px;
        color: #FFFFFF;
    }

    .hamburger:hover i {
        color: #fa9e1c;
    }

    .menu {
        position: fixed;
        width: 100vw;
        height: 40vh;
        background: linear-gradient(to right, #fa9e1b, #8d4fff);
        z-index: 100;
        opacity: 0;
        visibility: hidden;
    }

    .menu.active {
        opacity: 0.95;
        visibility: visible;
    }

    .menu_content {
        width: 100%;
        height: 100%;
    }

    .menu_item {
        position: relative;
        margin-bottom: 10px;
    }

    .menu_item:last-child {
        margin-bottom: 0px;
    }

    .menu_logo {
        margin-bottom: 28px;
    }

    .menu_logo a img {
        width: 40px !important;
    }

    .menu_item a {
        display: inline-block;
        position: relative;
        font-family: 'Beyond';
        font-size: 36px;
        color: #FFFFFF;
        font-weight: 400;
    }

    .menu_item a::after {
        display: block;
        position: absolute;
        top: 60%;
        left: 0;
        width: 0;
        height: 4px;
        background: #FFFFFF;
        letter-spacing: 2px;
        content: '';
        z-index: 10;
        pointer-events: none;
        -webkit-transition: all 200ms ease;
        -moz-transition: all 200ms ease;
        -ms-transition: all 200ms ease;
        -o-transition: all 200ms ease;
        transition: all 400ms ease;
    }

    .menu_item:hover a::after {
        width: 100%;
    }

    .menu_close_container {
        position: absolute;
        top: 94px;
        right: 122px;
        width: 21px;
        height: 21px;
        cursor: pointer;
        -webkit-transform: rotate(45deg);
        -moz-transform: rotate(45deg);
        -ms-transform: rotate(45deg);
        -o-transform: rotate(45deg);
        transform: rotate(45deg);
    }

    .menu_close {
        top: 9px;
        width: 21px;
        height: 3px;
        background: #FFFFFF;
        -webkit-transition: all 200ms ease;
        -moz-transition: all 200ms ease;
        -ms-transition: all 200ms ease;
        -o-transition: all 200ms ease;
        transition: all 200ms ease;
    }

    .menu_close::after {
        display: block;
        position: absolute;
        top: -9px;
        left: 9px;
        content: '';
        width: 3px;
        height: 21px;
        background: #FFFFFF;
        -webkit-transition: all 200ms ease;
        -moz-transition: all 200ms ease;
        -ms-transition: all 200ms ease;
        -o-transition: all 200ms ease;
        transition: all 200ms ease;
    }

    .menu_close_container:hover .menu_close,
    .menu_close_container:hover .menu_close::after {
        background: #fa9e1c;
    }

    /*********************************
    4. Home
    *********************************/

    .home {
        width: 100%;
        height: 92vh;
    }

    @media screen and (max-width:480px) {
        .home {
            height: 90vh;
        }
    }


    /*********************************
    4.1 Home Slider
    *********************************/

    .home_slider_container {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        z-index: 10;
        background: #31124b;
    }

    .home_slider {
        width: 100%;
        height: 100%;
    }

    .home_slider_item {
        width: 100%;
        height: 100%;
    }

    .home_slider_background {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-repeat: no-repeat;
        background-size: cover;
        background-position: center center;
        opacity: 0.5;
    }

    .home_slider_content {
        position: absolute;
        top: 50%;
        left: 50%;
        -webkit-transform: translate(-50%, -50%);
        -moz-transform: translate(-50%, -50%);
        -ms-transform: translate(-50%, -50%);
        -o-transform: translate(-50%, -50%);
        transform: translate(-50%, -50%);
        z-index: 11;
    }

    .home_slider_content h1 {
        margin-bottom: 0px;
    }

    .home_slider_content h1:first-child {
        font-size: 112px;
        font-weight: 900;
        color: #FFFFFF;
        text-transform: uppercase;
    }

    .home_slider_content h1:nth-child(2) {
        font-family: 'Beyond';
        font-size: 100px;
        color: #FFFFFF;
        margin-top: -34px;
    }

    .home_slider_button {
        margin-top: 70px;
    }

    .flipInX {
        animation-delay: 600ms;
    }

    /*********************************
    4.2 Home Slider Nav
    *********************************/

    .home_slider_nav {
        position: absolute;
        top: 50%;
        -webkit-transform: translateY(-50%);
        -moz-transform: translateY(-50%);
        -ms-transform: translateY(-50%);
        -o-transform: translateY(-50%);
        transform: translateY(-50%);
        z-index: 11;
        cursor: pointer;
    }

    .home_slider_prev {
        left: 50px;
    }

    .home_slider_next {
        right: 50px;
    }

    .home_slider_prev:hover .nav_path,
    .home_slider_prev:hover .nav_arrow {
        fill: url(#home_grad_prev);
    }

    .home_slider_next:hover .nav_arrow,
    .home_slider_next:hover .nav_path {
        fill: url(#home_grad_next);
    }

    /*********************************
    4.3 Home Slider Dots
    *********************************/

    .home_slider_dots {
        position: absolute;
        right: 50px;
        bottom: 45px;
        z-index: 10;
    }

    /* .home_slider_custom_dots
    {

    } */
    .home_slider_custom_dot {
        display: inline-block;
        position: relative;
        height: 35px;
        line-height: 35px;
        color: #FFFFFF;
        cursor: pointer;
        font-size: 13px;
        font-weight: 600;
        -webkit-transition: all 200ms ease;
        -moz-transition: all 200ms ease;
        -ms-transition: all 200ms ease;
        -o-transition: all 200ms ease;
        transition: all 200ms ease;
    }

    .home_slider_custom_dot:hover {
        color: #fa9e1c;
    }

    .home_slider_custom_dot:hover.active div {
        border-color: #fa9e1c;
    }

    .home_slider_custom_dot.active {
        padding-left: 13px;
        padding-right: 9px;
        margin-right: 3px;
    }

    .home_slider_custom_dot div {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        border: solid 2px transparent;
        border-radius: 18px;
        -webkit-transition: all 200ms ease;
        -moz-transition: all 200ms ease;
        -ms-transition: all 200ms ease;
        -o-transition: all 200ms ease;
        transition: all 200ms ease;
    }

    .home_slider_custom_dot.active div {
        border: solid 2px #FFFFFF;
    }

    /*********************************
    5. Search
    *********************************/

    .search {
        width: 100%;
        height: 192px;
        background: linear-gradient(to right, #fa9e1b, #8d4fff);
        z-index: 10;
    }

    .search_tabs_container {
        position: absolute;
        bottom: 100%;
        left: 15px;
        width: calc(100% - 30px);
    }

    .search_tabs {
        height: 94px;
    }

    .search_tab {
        font-size: 14px;
        font-weight: 700;
        color: #2d2c2c;
        text-transform: uppercase;
        text-align: center;
        height: 100%;
        flex-grow: 1;
        background: #FFFFFF;
        cursor: pointer;
        -webkit-transition: all 200ms ease;
        -moz-transition: all 200ms ease;
        -ms-transition: all 200ms ease;
        -o-transition: all 200ms ease;
        transition: all 200ms ease;
    }

    .search_tab img {
        margin-right: 10px;
        -webkit-transition: all 200ms ease;
        -moz-transition: all 200ms ease;
        -ms-transition: all 200ms ease;
        -o-transition: all 200ms ease;
        transition: all 200ms ease;
    }

    .search_tab:first-child {
        border-top-left-radius: 94px;
        padding-left: 7px;
    }

    .search_tab:last-child {
        border-top-right-radius: 94px;
        padding-right: 7px;
    }

    .search_tab.active {
        background: #fa9e1b;
        color: #FFFFFF;
    }

    .search_tab.active img {
        -webkit-filter: brightness(200%) grayscale(100%);
        -moz-filter: brightness(200%) grayscale(100%);
        -ms-filter: brightness(200%) grayscale(100%);
        -o-filter: brightness(200%) grayscale(100%);
        filter: brightness(200%) grayscale(100%);
    }

    .search_tab:hover {
        background: #fa9e1b;
        color: #FFFFFF;
    }

    .search_tab:hover img {
        -webkit-filter: brightness(200%) grayscale(100%);
        -moz-filter: brightness(200%) grayscale(100%);
        -ms-filter: brightness(200%) grayscale(100%);
        -o-filter: brightness(200%) grayscale(100%);
        filter: brightness(200%) grayscale(100%);
    }

    .search_panel {
        display: none !important;
        width: 100%;
        height: 100%;
        -webkit-animation: fadeEffect 1s;
        animation: fadeEffect 1s;
    }

    .search_panel.active {
        display: flex !important;
    }

    /* Fade in tabs */
    @-webkit-keyframes fadeEffect {
        from {
            opacity: 0;
        }

        to {
            opacity: 1;
        }
    }

    @keyframes fadeEffect {
        from {
            opacity: 0;
        }

        to {
            opacity: 1;
        }
    }

    .search_panel_content {
        width: 100%;
        height: 100%;
    }

    .search_input {
        width: 100%;
        height: 46px;
        border: none;
        outline: none;
        padding-left: 15px;
        padding-right: 15px;
        font-size: 13px;
        font-weight: 600;
        color: #929191;
    }

    .search_item:first-child {
        width: 30.453%;
    }

    .search_item:nth-child(2) {
        width: 13.961%;
    }

    .search_item:nth-child(3) {
        width: 13.961%;
    }

    .search_item:nth-child(4) {
        width: 9.947%;
    }

    .search_item:nth-child(5) {
        width: 9.947%;
    }

    .search_item div {
        font-size: 13px;
        font-weight: 700;
        color: #FFFFFF;
        text-transform: uppercase;
        margin-bottom: 14px;
    }

    .dropdown_item_select {
        -webkit-appearance: none;
        -moz-appearance: none;
        -ms-appearance: none;
        -o-appearance: none;
        appearance: none;
        -webkit-box-shadow: 0px 0px 0px rgba(0, 0, 0, 0);
        -webkit-user-select: none;
        background-image: url(../images/dropdown.png);
        background-position: center right;
        background-repeat: no-repeat;
        border: solid 1px #FFFFFF;
        margin: 0;
        overflow: hidden;
        text-overflow: ellipsis;
        white-space: nowrap;
        cursor: pointer;
    }

    .dropdown_item_select::-ms-expand {
        display: none;
    }

    .dropdown_item_select:hover {
        border: solid 1px #fa9e1c;
    }

    .dropdown_item_select:focus {
        outline-color: #fa9e1c;
    }

    .search_button {
        font-size: 13px;
        font-weight: 700;
        color: #fff;
        text-transform: uppercase;
        line-height: 53px;
        padding-left: 46px;
        padding-right: 46px;
        background: #31124b;
        -webkit-transform: translateY(15px);
        -moz-transform: translateY(15px);
        -ms-transform: translateY(15px);
        -o-transform: translateY(15px);
        transform: translateY(15px);
        border: none;
        outline: none;
        cursor: pointer;
    }

    .search_button:hover {
        opacity: 0.8;
    }

    /*********************************
    6. Section Title
    *********************************/

    .section_title {
        font-size: 36px;
        font-weight: 700;
        color: #2d2c2c;
        margin-top: -50px;
    }

    /*********************************
    7. Intro
    *********************************/

    .intro {
        width: 100%;
        padding-top: 60px;
        padding-bottom: 40px;
    }

    .intro_title {
        font-weight: 700;
        color: #2d2c2c;
        margin-top: -14px;
    }

    @media screen and (max-width: 480px) {
        .intro_title {
            margin-top: -20px;
            margin-bottom: 55px;
        }
    }

    .intro_text {
        margin-top: 21px;
    }

    .intro_text p {
        font-size: 24px;
        font-style: italic;
        color: #929191;
        line-height: 1.336;
        margin-bottom: 0px;
    }

    .intro_items {
        margin-top: 5px;

    }

    @media only screen and (max-width: 480px) {
        .intro_items {
            /*margin-right: 30px;*/
            margin-top: 55px;
        }
    }

    .intro_item {

        margin-bottom: 20px;
        width: 100%;
        height: 340px;
    }

    .intro_item_overlay {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        z-index: 2;
        background: rgba(49, 18, 75, 0.55);
    }

    .intro_item_background {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-repeat: no-repeat;
        background-size: cover;
        background-position: center center;
        z-index: 1;
    }

    .intro_item_content {
        width: 100%;
        height: 100%;
        z-index: 3;

    }

    @media only screen and (max-width: 480px) {
        .intro_item_content {
            margin-top: -60px;
        }
    }

    .intro_date {
        position: absolute;
        top: 35px;
        left: 50%;
        -webkit-transform: translateX(-50%);
        -moz-transform: translateX(-50%);
        -ms-transform: translateX(-50%);
        -o-transform: translateX(-50%);
        transform: translateX(-50%);
        width: auto;
        padding-left: 39px;
        padding-right: 39px;
        white-space: nowrap;
        font-size: 13px;
        font-weight: 400;
        color: #FFFFFF;
        line-height: 27px;
        background: #fa9e1c;
        border-radius: 14px;
    }

    .intro_button {
        position: absolute;
        bottom: 40px;
        left: 50%;
        -webkit-transform: translateX(-50%);
        -moz-transform: translateX(-50%);
        -ms-transform: translateX(-50%);
        -o-transform: translateX(-50%);
        transform: translateX(-50%);
    }

    /* .intro_center
    {

    } */
    .intro_center h1 {
        font-size: 35px;
        font-weight: 700;
        color: #FFFFFF;
        letter-spacing: -0.05em;
    }

    .intro_price {
        font-size: 18px;
        font-weight: 700;
        color: #FFFFFF;
        margin-top: -4px;
    }

    .rating {
        margin-top: 10px;
    }

    .rating i {
        font-size: 19px;
        margin-right: 4px;
    }

    .rating i:last-child {
        margin-right: 0px;
    }

    .rating_1 i:first-child {
        color: #ffeb8d;
    }

    .rating_2 i:first-child {
        color: #ffeb8d;
    }

    .rating_2 i:nth-child(2) {
        color: #fed46b;
    }

    .rating_3 i:first-child {
        color: #ffeb8d;
    }

    .rating_3 i:nth-child(2) {
        color: #fed46b;
    }

    .rating_3 i:nth-child(3) {
        color: #fbb53d;
    }

    .rating_4 i:first-child {
        color: #ffeb8d;
    }

    .rating_4 i:nth-child(2) {
        color: #fed46b;
    }

    .rating_4 i:nth-child(3) {
        color: #fbb53d;
    }

    .rating_4 i:nth-child(4) {
        color: #fa9e1b;
    }

    .rating_5 i:first-child {
        color: #ffeb8d;
    }

    .rating_5 i:nth-child(2) {
        color: #fed46b;
    }

    .rating_5 i:nth-child(3) {
        color: #fbb53d;
    }

    .rating_5 i:nth-child(4) {
        color: #fa9e1b;
    }

    .rating_5 i:nth-child(5) {
        color: #ef910a;
    }

    /*********************************
    8. CTA
    *********************************/

    .cta {
        padding-top: 70px;
        padding-bottom: 60px;
        background: linear-gradient(to right, #fa9e1b, #8d4fff);
    }

    .cta_background {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-repeat: no-repeat;
        background-size: cover;
        background-position: center center;
        opacity: 0.27;
    }

    /*********************************
    8.1 CTA Slider
    *********************************/

    /* .cta_slider_container
    {

    } */
    .cta_item {
        padding-top: 75px;
        padding-bottom: 61px;
        padding-left: 90px;
        padding-right: 90px;
        background: #FFFFFF;
    }

    .cta_title {
        font-size: 30px;
        font-weight: 700;
        color: #1d1b1b;
        text-transform: uppercase;
    }

    .cta_text {
        font-weight: 600;
        line-height: 2.29;
        margin-top: 14px;
        margin-bottom: 0px;
    }

    .cta_button {
        margin-top: 38px;
    }

    .rating_r i::before {
        font-family: 'FontAwesome';
        content: "\f006";
        font-style: normal;
        font-size: 19px;
        margin-right: 4px;
    }

    .rating_r_1 i:first-child::before {
        color: #ffeb8d;
        content: "\f005";
    }

    .rating_r_2 i:first-child::before {
        color: #ffeb8d;
        content: "\f005";
    }

    .rating_r_2 i:nth-child(2)::before {
        color: #fed46b;
        content: "\f005";
    }

    .rating_r_3 i:first-child::before {
        color: #ffeb8d;
        content: "\f005";
    }

    .rating_r_3 i:nth-child(2)::before {
        color: #fed46b;
        content: "\f005";
    }

    .rating_r_3 i:nth-child(3)::before {
        color: #fbb53d;
        content: "\f005";
    }

    .rating_r_4 i:first-child::before {
        color: #ffeb8d;
        content: "\f005";
    }

    .rating_r_4 i:nth-child(2)::before {
        color: #fed46b;
        content: "\f005";
    }

    .rating_r_4 i:nth-child(3)::before {
        color: #fbb53d;
        content: "\f005";
    }

    .rating_r_4 i:nth-child(4)::before {
        color: #fa9e1b;
        content: "\f005";
    }

    .rating_r_5 i:first-child::before {
        color: #ffeb8d;
        content: "\f005";
    }

    .rating_r_5 i:nth-child(2)::before {
        color: #fed46b;
        content: "\f005";
    }

    .rating_r_5 i:nth-child(3)::before {
        color: #fbb53d;
        content: "\f005";
    }

    .rating_r_5 i:nth-child(4)::before {
        color: #fa9e1b;
        content: "\f005";
    }

    .rating_r_5 i:nth-child(5)::before {
        color: #ef910a;
        content: "\f005";
    }

    .cta_slider_nav {
        position: absolute;
        top: 50%;
        -webkit-transform: translateY(-50%);
        -moz-transform: translateY(-50%);
        -ms-transform: translateY(-50%);
        -o-transform: translateY(-50%);
        transform: translateY(-50%);
        z-index: 10;
        cursor: pointer;
    }

    .cta_slider_prev {
        left: -75px;
    }

    .cta_slider_next {
        right: -75px;
    }

    .cta_slider_prev:hover .nav_path,
    .cta_slider_prev:hover .nav_arrow {
        fill: url(#cta_grad_prev);
    }

    .cta_slider_next:hover .nav_path,
    .cta_slider_next:hover .nav_arrow {
        fill: url(#cta_grad_next);
    }

    /*********************************
    9. Offers
    *********************************/

    .offers {
        width: 100%;
        padding-top: 100px;
        padding-bottom: 0px;
        background: #f3f6f9;
    }

    .offers_items {
        margin-top: 35px;
    }

    @media screen and (max-width: 480px) {
        .offers_items {
            margin-top: 5px;
        }
    }

    .offers_col {
        margin-bottom: 65px;
    }

    /* .offers_item
    {

    } */
    .offers_image_container {
        width: 100%;
        height: 100%;
    }

    .offers_image_background {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-repeat: no-repeat;
        background-size: cover;
        background-position: center center;
    }

    @media only screen and (max-width: 480px) {
        .offers {
            margin: 0px;
        }
    }


    .offer_name {
        position: absolute;
        left: 0;
        bottom: 27px;
        width: 110px;
        height: 33px;
        background: #fa9e1b;
        overflow: hidden;
        display: block;


        font-size: 12px;
        font-weight: 600;
        color: #FFFFFF;
        text-transform: uppercase;
        line-height: 35px;
        padding-left: 10px;
    }

    /* .offers_content
    {

    } */
    .offers_price {
        margin-top: 30px;
        display: inline-block;
        font-size: 28px;
        font-weight: 700;
        color: #fa9e1b;
        line-height: 25px;
    }

    @media only screen and (max-width: 480px) {
        .offers_price {
            margin-top: -5px;
            display: inline-block;
            font-size: 28px;
            font-weight: 700;
            color: #eda84a;
            line-height: 25px;
        }
    }

    /* .offers_price span
    {
    font-size: 14px;
    font-weight: 400;
    color: #929191;
    margin-left: 12px;
    } */
    .offers_price_limit {
        margin-top: 5px;
        font-size: 14px;
        font-weight: 400;
        color: #252525;
        margin-left: 6px;
    }

    /* .offers_rating
    {

    } */
    .offers_rating i::before {
        font-size: 13px;
        margin-right: 2px;
    }

    .offers_text {
        font-size: 14px;
        font-weight: 400;
        color: #929191;
        margin-top: 16px;
    }

    .offers_icons {
        margin-top: 17px;
    }

    .offers_icons_item {
        display: inline-block;
        margin-right: 15px;
    }

    .offers_icons_item:last-child {
        margin-right: 0px;
    }

    .offers_link {
        margin-top: 10px;
        margin-bottom: 20px;
    }

    .offers_link a {
        font-size: 12px;
        font-weight: 700;
        color: #2d2c2c;
        text-transform: uppercase;
        -webkit-transition: all 200ms ease;
        -moz-transition: all 200ms ease;
        -ms-transition: all 200ms ease;
        -o-transition: all 200ms ease;
        transition: all 200ms ease;
    }

    .offers_link a:hover {
        color: #fa9e1b;
    }

    @media only screen and (max-width: 480px) {
        .offers_link a {
            margin: 0px;
            font-size: 12px;
            font-weight: 700;
            color: #2d2c2c;
            text-transform: uppercase;
            -webkit-transition: all 200ms ease;
            -moz-transition: all 200ms ease;
            -ms-transition: all 200ms ease;
            -o-transition: all 200ms ease;
            transition: all 200ms ease;
        }

        .offers_link a:hover {
            color: #fa9e1b;
        }

    }

    /*********************************
    10. Testimonials
    *********************************/

    .testimonials {
        width: 100%;
        padding-top: 105px;
        padding-bottom: 105px;
        background: #FFFFFF;
    }

    .test_border {
        position: absolute;
        left: 0;
        bottom: 0;
        width: 100%;
        height: 2px;
        background: linear-gradient(to right, #fa9e1b, #8d4fff);
    }

    /*********************************
    10.1 Testimonials Slider
    *********************************/

    .test_slider_container {
        width: 100%;
        margin-top: 54px;
    }

    .test_item {
        padding-top: 36px;
    }

    .test_icon {
        position: absolute;
        top: 0px;
        left: 41px;
        width: 72px;
        height: 72px;
        background: #fa9e1b;
        border-radius: 50%;
        overflow: hidden;
    }

    .test_icon img {
        position: relative;
        top: 50%;
        left: 50%;
        -webkit-transform: translate(-50%, -50%);
        -moz-transform: translate(-50%, -50%);
        -ms-transform: translate(-50%, -50%);
        -o-transform: translate(-50%, -50%);
        transform: translate(-50%, -50%);
        width: auto !important;
    }

    .test_content_container {
        position: absolute;
        left: 0;
        bottom: 0;
        width: 100%;
        height: 44.1%;
        background: rgba(49, 18, 75, 0.8);
    }

    .test_content {
        width: 100%;
        height: 100%;
        padding-left: 38px;
        padding-top: 44px;
        padding-right: 40px;
    }

    .test_item_info {
        position: absolute;
        left: 41px;
        bottom: calc(100% - 18px);
        background: #FFFFFF;
        padding-left: 20px;
        padding-right: 21px;
        padding-top: 9px;
        padding-bottom: 10px;
        z-index: 10;
    }

    .test_name {
        font-size: 14px;
        font-weight: 700;
        color: #2d2c2c;
        text-transform: uppercase;
    }

    .test_date {
        font-size: 11px;
        margin-top: 2px;
        color: #2d2c2c;
        padding-left: 2px;
    }

    .test_quote_title {
        font-size: 20px;
        font-weight: 500;
        color: #FFFFFF;
        padding-left: 3px;
    }

    .test_quote_text {
        font-weight: 500;
        color: #FFFFFF;
        margin-top: 11px;
    }

    .test_slider_nav {
        position: absolute;
        top: 50%;
        -webkit-transform: translateY(-50%);
        -moz-transform: translateY(-50%);
        -ms-transform: translateY(-50%);
        -o-transform: translateY(-50%);
        transform: translateY(-50%);
        z-index: 10;
        cursor: pointer;
    }

    .test_slider_nav .nav_path,
    .test_slider_nav .nav_arrow {
        fill: #c4ced2;
    }

    .test_slider_prev {
        left: -75px;
    }

    .test_slider_next {
        right: -75px;
    }

    .test_slider_prev:hover .nav_path,
    .test_slider_prev:hover .nav_arrow {
        fill: url(#test_grad_prev);
    }

    .test_slider_next:hover .nav_path,
    .test_slider_next:hover .nav_arrow {
        fill: url(#test_grad_next);
    }

    /*********************************
    11. Trending
    *********************************/

    .trending {
        width: 100%;
        padding-top: 105px;
        padding-bottom: 50px;
    }

    .trending_container {
        margin-top: 90px;
    }

    .trending_item {
        margin-bottom: 55px;
    }

    .trending_image {
        width: 82px;
        height: 76px;
        float: left;
    }

    .trending_image img {
        width: 100%;
    }

    .trending_content {
        padding-left: 94px;
    }

    .trending_title {
        margin-top: -5px;
    }

    .trending_title a {
        font-size: 16px;
        font-weight: 700;
        color: #2d2c2c;
        text-transform: uppercase;
        -webkit-transition: all 200ms ease;
        -moz-transition: all 200ms ease;
        -ms-transition: all 200ms ease;
        -o-transition: all 200ms ease;
        transition: all 200ms ease;
    }

    .trending_title a:hover {
        color: #fa9e1b;
    }

    .trending_price {
        font-size: 14px;
        font-weight: 700;
        color: #fa9e1b;
        margin-top: 2px;
    }

    .trending_location {
        font-size: 14px;
        font-weight: 400;
        color: #929191;
        text-transform: uppercase;
        margin-top: 5px;
    }

    /*********************************
    12. Contact
    *********************************/

    .contact {
        width: 100%;
        padding-bottom: 105px;
    }

    .contact_background {
        position: absolute;
        bottom: -34px;
        left: 0;
        width: 100%;
        height: 104%;
        background-repeat: no-repeat;
        background-size: cover;
        background-position: center center;
    }

    .contact_title {
        font-size: 30px;
        font-weight: 700;
        color: #FFFFFF;
        text-transform: uppercase;
    }

    .contact_form_container {
        padding-top: 74px;
        padding-left: 48px;
        padding-right: 48px;
        padding-bottom: 88px;
        background: linear-gradient(to top right, #fa9e1b, #8d4fff);
    }

    .contact_form {
        margin-top: 52px;
        font-size: 0px;
    }

    .input_field {
        height: 48px;
        font-size: 12px;
        font-weight: 400;
        border: none;
        outline: none;
        background: transparent;
        color: #FFFFFF;
        border-bottom: solid 2px #e1e1e1;
    }

    .contact_form_name {
        width: calc((100% - 30px) / 2);
        margin-right: 30px;
    }

    .contact_form_email {
        width: calc((100% - 30px) / 2);
    }

    .contact_form_subject {
        width: 100%;
        margin-top: 11px;
    }

    .contact_form_message {
        height: 126px;
        width: 100%;
        border: none;
        outline: none;
        margin-top: 19px;
        background: transparent;
        font-size: 12px;
        font-weight: 400;
        color: #FFFFFF;
        border-bottom: solid 2px #e1e1e1;
        padding-top: 11px;
    }

    .form_submit_button {
        font-size: 13px;
        font-weight: 700;
        color: #fff;
        text-transform: uppercase;
        line-height: 53px;
        padding-left: 29px;
        padding-right: 29px;
        background: #31124b;
        -webkit-transform: translateY(15px);
        -moz-transform: translateY(15px);
        -ms-transform: translateY(15px);
        -o-transform: translateY(15px);
        transform: translateY(15px);
        border: none;
        outline: none;
        margin-top: 37px;
        cursor: pointer;
    }

    .form_submit_button:hover {
        opacity: 0.8;
    }

    .input_field::-webkit-input-placeholder,
    .text_field::-webkit-input-placeholder {
        font-size: 12px !important;
        font-weight: 400 !important;
        color: #FFFFFF !important;
    }

    .input_field:-moz-placeholder,
    .text_field:-moz-placeholder {
        font-size: 12px !important;
        font-weight: 400 !important;
        color: #FFFFFF !important;
    }

    .input_field::-moz-placeholder,
    .text_field::-moz-placeholder {
        font-size: 12px !important;
        font-weight: 400 !important;
        color: #FFFFFF !important;
    }

    .input_field:-ms-input-placeholder,
    .text_field:-ms-input-placeholder {
        font-size: 12px !important;
        font-weight: 400 !important;
        color: #FFFFFF !important;
    }

    .input_field::input-placeholder,
    .text_field::input-placeholder {
        font-size: 12px !important;
        font-weight: 400 !important;
        color: #FFFFFF !important;
    }


    /*********************************
    13. Footer
    *********************************/

    .footer {
        width: 100%;
        padding-top: 55px;
        padding-bottom: 0px;
        background: #31124b;
    }

    .footer_title {
        font-size: 15px;
        font-weight: 700;
        color: #FFFFFF;

        /* text-transform: uppercase; */
    }

    /*********************************
    13.1 Footer - About
    *********************************/

    .footer_about {
        padding-top: 61px;
        padding-right: 70px;
    }

    .footer_logo {
        position: absolute;
        left: 0;
        top: -24px;
    }

    .footer_about_text {
        font-size: 14px;
        font-weight: 600;
        color: #FFFFFF;
    }

    .footer_social_item {
        display: inline-block;
        width: 31px;
        height: 31px;
        border: solid 1px #fa9e1b;
        border-radius: 50%;
        text-align: center;
        -webkit-transition: all 200ms ease;
        -moz-transition: all 200ms ease;
        -ms-transition: all 200ms ease;
        -o-transition: all 200ms ease;
        transition: all 200ms ease;
        margin-right: 9px;
    }

    .footer_social_item:last-child {
        margin-right: 0px;
    }

    .footer_social_item a {
        display: block;
        position: relative;
        width: 100%;
        height: 100%;
    }

    .footer_social_item a i {
        display: block;
        position: relative;
        color: #FFFFFF;
        top: 50%;
        -webkit-transform: translateY(-50%);
        -moz-transform: translateY(-50%);
        -ms-transform: translateY(-50%);
        -o-transform: translateY(-50%);
        transform: translateY(-50%);
        font-size: 12px;
        -webkit-transition: all 200ms ease;
        -moz-transition: all 200ms ease;
        -ms-transition: all 200ms ease;
        -o-transition: all 200ms ease;
        transition: all 200ms ease;
    }

    .footer_social_item:hover {
        background: #fa9e1b;
    }

    .footer_social_item:hover a i {
        color: #31124b;
    }

    /*********************************
    13.2 Footer - Blog
    *********************************/

    .footer_blog {
        margin-top: 39px;
    }

    .footer_blog_item {
        margin-bottom: 21px;
    }

    .footer_blog_item:last-child {
        margin-bottom: 0px;
    }

    .footer_blog_image {
        width: 60px;
        height: 60px;
        float: left;
    }

    .footer_blog_image img {
        width: 100%;
    }

    .footer_blog_content {
        padding-left: 81px;
    }

    .footer_blog_title {
        margin-top: -4px;
        padding-left: 1px;
    }

    .footer_blog_title a {
        font-size: 14px;
        font-weight: 400;
        color: #FFFFFF;
    }

    .footer_blog_title a:hover {
        color: #fa9e1b;
    }

    .footer_blog_date {
        font-size: 12px;
        font-weight: 400;
        color: #fa9e1b;
        margin-top: 7px;
    }

    /*********************************
    13.3 Footer - Tags
    *********************************/

    .footer_tags {
        margin-top: 40px;
    }

    .tag_item {
        height: 35px;
        width: 50%;

        /* float: left; */
        /* margin-left: 115px;
    margin-right: 85px; */
        margin-bottom: 9px;
        border: solid 1px #dd9128;
        border-radius: 5px;
        -webkit-transition: all 200ms ease;
        -moz-transition: all 200ms ease;
        -ms-transition: all 200ms ease;
        -o-transition: all 200ms ease;
        transition: all 200ms ease;
    }

    .tag_item:hover {
        background: #dd9128;
    }

    .tag_item a {
        display: block;
        font-size: 12px;
        font-weight: 600;
        color: #FFFFFF;
        line-height: 33px;
        padding-left: 25px;
        padding-right: 25px;
    }

    /*********************************
    13.4 Footer - Contact Info
    *********************************/

    .contact_info_list {
        margin-top: 40px;
    }

    .contact_info_item {
        margin-bottom: 22px;
    }

    .contact_info_icon {
        width: 20px;
        height: 20px;
        margin-right: 10px;
    }

    .contact_info_icon img {
        display: block;
        width: 100%;
    }

    .contact_info_text,
    .contact_info_text a {
        color: #FFFFFF;
        line-height: 2.14;
        margin-top: -4px;
    }

    .contact_info_item:hover .contact_info_text,
    .contact_info_item:hover .contact_info_text a {
        color: #fa9e1b;
    }

    /*********************************
    14. Copyright
    *********************************/

    .copyright {
        background: #1f0733;
    }

    .copyright_content {
        height: 52px;
    }

    .copyright_content div {
        font-size: 12px;
        font-weight: 600;
        color: #685677;
    }

    .footer_nav_container {
        height: 52px;
    }

    .footer_nav {}

    .footer_nav_list {
        font-size: 0px;
    }

    .footer_nav_item {
        display: inline-block;
        margin-right: 40px;
    }

    .footer_nav_item a {
        font-size: 12px;
        font-weight: 600;
        color: #685677;
        text-transform: uppercase;
        line-height: 2;
        -webkit-transition: all 200ms ease;
        -moz-transition: all 200ms ease;
        -ms-transition: all 200ms ease;
        -o-transition: all 200ms ease;
        transition: all 200ms ease;
    }

    .footer_nav_item a:hover {
        color: #FFFFFF;
    }



    /*  responsivenessssss */

    /* @charset "utf-8"; */
    /* CSS Document */

    /******************************

    [Table of Contents]

    1. 1600px
    2. 1440px
    3. 1280px
    4. 1199px
    5. 1024px
    6. 991px
    7. 959px
    8. 880px
    9. 768px
    10. 767px
    11. 539px
    12. 479px
    13. 400px

    ******************************/

    /************
    1. 1600px
    ************/

    @media only screen and (max-width: 1600px) {}

    /************
    2. 1440px
    ************/

    @media only screen and (max-width: 1440px) {}

    /************
    3. 1380px
    ************/

    @media only screen and (max-width: 1380px) {}

    /************
    3. 1280px
    ************/

    @media only screen and (max-width: 1280px) {
        .cta_slider_prev {
            left: 15px;
        }

        .cta_slider_next {
            right: 15px;
        }

        .cta_slider_nav .nav_path,
        .cta_slider_nav .nav_arrow {
            fill: url(#grad);
        }

        .test_slider_prev {
            left: 15px;
        }

        .test_slider_next {
            right: 15px;
        }
    }

    /************
    4. 1199px
    ************/

    @media only screen and (max-width: 1199px) {
        .main_nav_container {
            margin-right: 121px;
        }

        .home_slider_content h1:first-child {
            font-size: 92px;
        }

        .home_slider_content h1:nth-child(2) {
            font-size: 80px;
            margin-top: -24px;
        }

        .footer_blog_content {
            padding-left: 74px;
        }
    }

    /************
    4. 1100px
    ************/

    @media only screen and (max-width: 1100px) {}

    /************
    5. 1024px
    ************/

    @media only screen and (max-width: 1024px) {}

    /************
    6. 991px
    ************/

    @media only screen and (max-width: 991px) {
        .main_nav_container {
            display: none;
        }

        .home_slider_content h1:first-child {
            font-size: 72px;
        }

        .home_slider_content h1:nth-child(2) {
            font-size: 60px;
            margin-top: -18px;
        }

        .home_slider_button {
            margin-top: 58px;
        }

        .hamburger {
            display: block;
        }

        .search {
            height: auto;
            padding-top: 100px;
            padding-bottom: 100px;
        }

        .search_tabs_container {
            position: relative;
            bottom: auto;
            left: auto;
            width: auto;
        }

        .search_tabs {
            height: auto;
        }

        .search_tab {
            height: 62px;
            width: 100%;
            padding-left: 15px;
        }

        .search_tab:first-child {
            border-top-left-radius: 0px;
            padding-left: 15px;
        }

        .search_tab:last-child {
            border-top-right-radius: 0px;
        }

        .search_panel {
            display: none !important;
            margin-top: 50px;
        }

        .search_panel.active {
            display: flex !important;
        }

        .search_item {
            width: 100% !important;
            margin-bottom: 23px;
        }

        .search_item:last-child {
            margin-bottom: 0px;
        }

        .search_button {
            margin-top: 9px;
        }

        .intro_col {
            margin-bottom: 60px;
        }

        .intro_col:last-child {
            margin-bottom: 0px;
        }

        .intro_item {
            height: 810px;
        }

        .cta_item {
            padding-left: 30px;
            padding-right: 30px;
        }

        .cta_slider_nav {
            display: none !important;
        }

        .offers_image_container {
            height: 708px;
        }

        .offers_content {
            margin-top: 40px;
        }

        .test_slider_nav {
            display: none !important;
        }


        .copyright {
            padding-top: 30px;
            padding-bottom: 30px;
        }

        .copyright_content {
            height: auto;
            margin-top: 15px;
        }

        .footer_nav_container {
            height: auto;
        }

        .footer_nav_item {
            display: block;
        }
    }

    /************
    7. 959px
    ************/

    @media only screen and (max-width: 959px) {}

    /************
    8. 880px
    ************/

    @media only screen and (max-width: 880px) {}

    /************
    9. 768px
    ************/

    @media only screen and (max-width: 768px) {}

    /************
    10. 767px
    ************/

    @media only screen and (max-width: 767px) {
        .intro_item {
            height: 599px;
        }

        .offers_image_container {
            height: 524px;
        }
    }

    /************
    11. 575px
    ************/

    @media only screen and (max-width: 575px) {
        p {
            font-size: 13px;
        }

        .top_bar {
            display: none;
        }

        .button {
            height: 44px;
            border-radius: 22px;
        }

        .button a {
            line-height: 44px;
            padding-left: 36px;
            padding-right: 36px;
        }

        .logo a img {
            width: 24px;
        }

        .logo a {
            font-size: 24px;
        }

        .home_slider_nav {
            display: none !important;
        }

        .home_slider_content h1:first-child {
            font-size: 48px;
        }

        .home_slider_content h1:nth-child(2) {
            font-size: 43px;
            margin-top: -12px;
        }

        .home_slider_button {
            margin-top: 45px;
        }

        .home_slider_dots {
            display: none !important;
        }

        .main_nav_col {
            height: 60px;
        }

        .header.scrolled .main_nav_col {
            height: 60px;
        }

        .logo_container {
            -webkit-transform: none;
            -moz-transform: none;
            -ms-transform: none;
            -o-transform: none;
            transform: none;
        }

        .content_search {
            -webkit-transform: translateY(2px);
            -moz-transform: translateY(2px);
            -ms-transform: translateY(2px);
            -o-transform: translateY(2px);
            transform: translateY(2px);
        }

        .header.scrolled .content_search {
            -webkit-transform: translateY(2px);
            -moz-transform: translateY(2px);
            -ms-transform: translateY(2px);
            -o-transform: translateY(2px);
            transform: translateY(2px);
        }

        .hamburger {
            -webkit-transform: none;
            -moz-transform: none;
            -ms-transform: none;
            -o-transform: none;
            transform: none;
        }

        .logo a {
            font-size: 16px;
        }

        .logo a img {
            width: 16px;
            margin-right: 7px;
        }

        .hamburger i {
            font-size: 18px;
        }

        .content_search svg {
            width: 15px;
            height: 15px;
        }

        .menu_close_container {
            top: 15px;
            right: 28px;
        }

        .menu_logo {
            margin-bottom: 17px;
        }

        .menu_logo a img {
            width: 28px !important;
        }

        .menu_item a {
            font-size: 17px;
        }

        .search_button {
            line-height: 44px;
        }

        .intro_item {
            height: calc((100vw - 30px) / 0.85);
        }

        .section_title {
            font-size: 27px;
        }

        .cta_item {
            padding-left: 15px;
            padding-right: 15px;
        }

        .cta_title {
            font-size: 24px;
        }

        .test_item {
            padding-top: 26px;
        }

        .test_icon {
            left: 20px;
            width: 52px;
            height: 52px;
        }

        .test_content {
            padding-left: 20px;
            padding-right: 20px;
            padding-top: 36px;
        }

        .test_item_info {
            left: 20px;
        }

        .test_name {
            font-size: 12px;
        }

        .test_date {
            font-size: 10px;
        }

        .test_quote_title {
            font-size: 16px;
            padding-left: 1px;
        }

        .test_quote_text {
            margin-top: 5px;
        }

        .trending_title a {
            font-size: 14px;
        }

        .trending_price {
            font-size: 12px;
        }

        .trending_location {
            font-size: 12px;
        }

        .offers_image_container {
            height: calc((100vw - 30px) / 0.974);
        }

        .trending_item {
            margin-bottom: 30px;
        }

        .contact_title {
            font-size: 24px;
        }

        .contact_form_name {
            width: 100%;
            margin-right: 0px;
        }

        .contact_form_email {
            width: 100%;
            margin-top: 11px;
        }

        .form_submit_button {
            line-height: 44px;
        }

        .footer_about_text {
            font-size: 13px;
        }
    }

    /************
    11. 539px
    ************/

    @media only screen and (max-width: 539px) {}

    /************
    12. 480px
    ************/

    @media only screen and (max-width: 480px) {}

    /************
    13. 479px
    ************/

    @media only screen and (max-width: 479px) {
        h2 {
            font-size: 24px;
        }

        p {
            font-size: 13px;
        }

        .intro_center h1 {
            font-size: 36px;
        }

        .intro_text p {
            font-size: 16px;
        }
    }

    /************
    14. 400px
    ************/

    @media only screen and (max-width: 400px) {}
</style>

<!-- Home -->

<div class="home">

    <!-- Home Slider -->

    <div class="home_slider_container">

        <div class="owl-carousel owl-theme home_slider">

            <!-- Slider Item -->
            <div class="owl-item home_slider_item">
                <!-- Image by https://unsplash.com/@anikindimitry -->
                <div class="home_slider_background" style="background-image:url(images/home_slider.jpg)">
                </div>

                <div class="home_slider_content text-center">
                    <div class="home_slider_content_inner" data-animation-in="flipInX" data-animation-out="animate-out fadeOut">
                        <h1>discover</h1>
                        <h1>the world</h1>
                        <!-- <div class="button home_slider_button">
                                <div class="button_bcg"></div><a href="#">explore
                                    now<span></span><span></span><span></span></a>
                            </div> -->
                    </div>
                </div>
            </div>

            <!-- Slider Item -->
            <div class="owl-item home_slider_item">
                <div class="home_slider_background" style="background-image:url(images/home_slider.jpg)">
                </div>

                <div class="home_slider_content text-center">
                    <div class="home_slider_content_inner" data-animation-in="flipInX" data-animation-out="animate-out fadeOut">
                        <h1>discover</h1>
                        <h1>the world</h1>
                        <!-- <div class="button home_slider_button">
                                <div class="button_bcg"></div><a href="#">explore
                                    now<span></span><span></span><span></span></a>
                            </div> -->
                    </div>
                </div>
            </div>

            <!-- Slider Item -->
            <div class="owl-item home_slider_item">
                <div class="home_slider_background" style="background-image:url(images/home_slider.jpg)">
                </div>

                <div class="home_slider_content text-center">
                    <div class="home_slider_content_inner" data-animation-in="flipInX" data-animation-out="animate-out fadeOut">
                        <h1>discover</h1>
                        <h1>the world</h1>
                        <!-- <div class="button home_slider_button">
                                <div class="button_bcg"></div><a href="#">explore
                                    now<span></span><span></span><span></span></a>
                            </div> -->
                    </div>
                </div>
            </div>

        </div>

        <!-- Home Slider Nav - Prev -->
        <div class="home_slider_nav home_slider_prev">
            <svg version="1.1" id="Layer_2" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="28px" height="33px" viewBox="0 0 28 33" enable-background="new 0 0 28 33" xml:space="preserve">
                <defs>
                    <linearGradient id='home_grad_prev'>
                        <stop offset='0%' stop-color='#fa9e1b' />
                        <stop offset='100%' stop-color='#8d4fff' />
                    </linearGradient>
                </defs>
                <path class="nav_path" fill="#F3F6F9" d="M19,0H9C4.029,0,0,4.029,0,9v15c0,4.971,4.029,9,9,9h10c4.97,0,9-4.029,9-9V9C28,4.029,23.97,0,19,0z
            M26,23.091C26,27.459,22.545,31,18.285,31H9.714C5.454,31,2,27.459,2,23.091V9.909C2,5.541,5.454,2,9.714,2h8.571
            C22.545,2,26,5.541,26,9.909V23.091z" />
                <polygon class="nav_arrow" fill="#F3F6F9" points="15.044,22.222 16.377,20.888 12.374,16.885 16.377,12.882 15.044,11.55 9.708,16.885 11.04,18.219
            11.042,18.219 " />
            </svg>
        </div>

        <!-- Home Slider Nav - Next -->
        <div class="home_slider_nav home_slider_next">
            <svg version="1.1" id="Layer_3" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="28px" height="33px" viewBox="0 0 28 33" enable-background="new 0 0 28 33" xml:space="preserve">
                <defs>
                    <linearGradient id='home_grad_next'>
                        <stop offset='0%' stop-color='#fa9e1b' />
                        <stop offset='100%' stop-color='#8d4fff' />
                    </linearGradient>
                </defs>
                <path class="nav_path" fill="#F3F6F9" d="M19,0H9C4.029,0,0,4.029,0,9v15c0,4.971,4.029,9,9,9h10c4.97,0,9-4.029,9-9V9C28,4.029,23.97,0,19,0z
        M26,23.091C26,27.459,22.545,31,18.285,31H9.714C5.454,31,2,27.459,2,23.091V9.909C2,5.541,5.454,2,9.714,2h8.571
        C22.545,2,26,5.541,26,9.909V23.091z" />
                <polygon class="nav_arrow" fill="#F3F6F9" points="13.044,11.551 11.71,12.885 15.714,16.888 11.71,20.891 13.044,22.224 18.379,16.888 17.048,15.554
        17.046,15.554 " />
            </svg>
        </div>

        <!-- Home Slider Dots -->

        <div class="home_slider_dots">
            <ul id="home_slider_custom_dots" class="home_slider_custom_dots">
                <li class="home_slider_custom_dot active">
                    <div></div>01.
                </li>
                <li class="home_slider_custom_dot">
                    <div></div>02.
                </li>
                <li class="home_slider_custom_dot">
                    <div></div>03.
                </li>
            </ul>
        </div>

    </div>

</div>

<!-- Search -->



<!-- Intro -->

<div class="intro">
    <div class="container" style="max-width: 1250px !important;">
        <div class="row">
            <div class="col">
                <h2 class="intro_title text-center" style="margin-bottom:20px;">Tour Solution For Enjoyable Travel</h2>
            </div>
        </div>

        <div class="row intro_items">

            <!-- Intro Item -->

            <div class="col-lg-4 intro_col text-center">
                <div class="intro_item">
                    <div class="intro_item_overlay"></div>
                    <!-- Image by https://unsplash.com/@dnevozhai -->
                    <div class="intro_item_background" style="background-image:url(images/cox-1.jpg)"></div>
                    <div class="intro_item_content d-flex flex-column align-items-center justify-content-center">
                        <div class="intro_date">May 25th - June 01st</div>
                        <div class="button intro_button">
                            <div class="button_bcg"></div><a href="#">See
                                more</a>
                        </div>
                        <div class="intro_center text-center">
                            <h1>Cox's Bazar</h1>
                            <div class="intro_price">Premium</div>

                        </div>
                    </div>
                </div>
            </div>

            <!-- Intro Item -->

            <div class="col-lg-4 intro_col">
                <div class="intro_item">
                    <div class="intro_item_overlay"></div>
                    <!-- Image by https://unsplash.com/@hellolightbulb -->
                    <div class="intro_item_background" style="background-image:url(images/intro_2.jpg)"></div>
                    <div class="intro_item_content d-flex flex-column align-items-center justify-content-center">
                        <div class="intro_date">May 25th - June 01st</div>
                        <div class="button intro_button">
                            <div class="button_bcg"></div><a href="#">See
                                more</a>
                        </div>
                        <div class="intro_center text-center">
                            <h1>Saint Martin</h1>
                            <div class="intro_price">Premium</div>

                        </div>
                    </div>
                </div>
            </div>

            <!-- Intro Item -->

            <div class="col-lg-4 intro_col">
                <div class="intro_item">
                    <div class="intro_item_overlay"></div>
                    <!-- Image by https://unsplash.com/@willianjusten -->
                    <div class="intro_item_background" style="background-image:url(images/intro_3.jpg)"></div>
                    <div class="intro_item_content d-flex flex-column align-items-center justify-content-center">
                        <div class="intro_date">May 25th - June 01st</div>
                        <div class="button intro_button">
                            <div class="button_bcg"></div><a href="#">See
                                more</a>
                        </div>
                        <div class="intro_center text-center">
                            <h1>kuakata</h1>
                            <div class="intro_price">Premium</div>

                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 intro_col">
                <div class="intro_item">
                    <div class="intro_item_overlay"></div>
                    <!-- Image by https://unsplash.com/@willianjusten -->
                    <div class="intro_item_background" style="background-image:url(images/intro_3.jpg)"></div>
                    <div class="intro_item_content d-flex flex-column align-items-center justify-content-center">
                        <div class="intro_date">May 25th - June 01st</div>
                        <div class="button intro_button">
                            <div class="button_bcg"></div><a href="#">See
                                more</a>
                        </div>
                        <div class="intro_center text-center">
                            <h1>Sajek</h1>
                            <div class="intro_price">Premium</div>

                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 intro_col">
                <div class="intro_item">
                    <div class="intro_item_overlay"></div>
                    <!-- Image by https://unsplash.com/@willianjusten -->
                    <div class="intro_item_background" style="background-image:url(images/intro_3.jpg)"></div>
                    <div class="intro_item_content d-flex flex-column align-items-center justify-content-center">
                        <div class="intro_date">May 25th - June 01st</div>
                        <div class="button intro_button">
                            <div class="button_bcg"></div><a href="#">See
                                more</a>
                        </div>
                        <div class="intro_center text-center">
                            <h1>Bandarban</h1>
                            <div class="intro_price">Premium</div>

                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 intro_col">
                <div class="intro_item">
                    <div class="intro_item_overlay"></div>
                    <!-- Image by https://unsplash.com/@willianjusten -->
                    <div class="intro_item_background" style="background-image:url(images/intro_3.jpg)"></div>
                    <div class="intro_item_content d-flex flex-column align-items-center justify-content-center">
                        <div class="intro_date">May 25th - June 01st</div>
                        <div class="button intro_button">
                            <div class="button_bcg"></div><a href="#">See
                                more</a>
                        </div>
                        <div class="intro_center text-center">
                            <h1>Rangamati</h1>
                            <div class="intro_price">Premium</div>

                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

<!-- CTA -->

<div class="cta">
    <!-- Image by https://unsplash.com/@thanni -->
    <div class="cta_background" style="background-image:url(images/cta.jpg)"></div>

    <div class="container">
        <div class="row">
            <div class="col">

                <!-- CTA Slider -->

                <div class="cta_slider_container">
                    <div class="owl-carousel owl-theme cta_slider">

                        <!-- CTA Slider Item -->
                        <div class="owl-item cta_item text-center">
                            <div class="cta_title">maldives deluxe package</div>
                            <div class="rating_r rating_r_4">
                                <i></i>
                                <i></i>
                                <i></i>
                                <i></i>
                                <i></i>
                            </div>
                            <p class="cta_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam
                                eu convallis tortor. Suspendisse potenti. In faucibus massa arcu, vitae cursus
                                mi hendrerit nec. Proin bibendum, augue faucibus tincidunt ultrices, tortor
                                augue gravida lectus, et efficitur enim justo vel ligula.</p>
                            <div class="button cta_button">
                                <!-- <div class="button_bcg"></div><a href="#">book
                                        now</a> -->
                                <h3> - Showkot Chowdhury</h3>
                            </div>
                        </div>

                        <!-- CTA Slider Item -->
                        <div class="owl-item cta_item text-center">
                            <div class="cta_title">maldives deluxe package</div>
                            <div class="rating_r rating_r_4">
                                <i></i>
                                <i></i>
                                <i></i>
                                <i></i>
                                <i></i>
                            </div>
                            <p class="cta_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam
                                eu convallis tortor. Suspendisse potenti. In faucibus massa arcu, vitae cursus
                                mi hendrerit nec. Proin bibendum, augue faucibus tincidunt ultrices, tortor
                                augue gravida lectus, et efficitur enim justo vel ligula.</p>
                            <div class="button cta_button">
                                <!-- <div class="button_bcg"></div><a href="#">book
                                        now</a> -->
                                <h3> - Showkot Chowdhury </h3>
                            </div>
                        </div>

                        <!-- CTA Slider Item -->
                        <div class="owl-item cta_item text-center">
                            <div class="cta_title">maldives deluxe package</div>
                            <div class="rating_r rating_r_4">
                                <i></i>
                                <i></i>
                                <i></i>
                                <i></i>
                                <i></i>
                            </div>
                            <p class="cta_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam
                                eu convallis tortor. Suspendisse potenti. In faucibus massa arcu, vitae cursus
                                mi hendrerit nec. Proin bibendum, augue faucibus tincidunt ultrices, tortor
                                augue gravida lectus, et efficitur enim justo vel ligula.</p>
                            <div class="button cta_button">
                                <!-- <div class="button_bcg"></div><a href="#">book
                                        now</a> -->
                                <h3> - Showkot Chowdhury</h3>
                            </div>
                        </div>

                    </div>

                    <!-- CTA Slider Nav - Prev -->
                    <div class="cta_slider_nav cta_slider_prev">
                        <svg version="1.1" id="Layer_4" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="28px" height="33px" viewBox="0 0 28 33" enable-background="new 0 0 28 33" xml:space="preserve">
                            <defs>
                                <linearGradient id='cta_grad_prev'>
                                    <stop offset='0%' stop-color='#fa9e1b' />
                                    <stop offset='100%' stop-color='#8d4fff' />
                                </linearGradient>
                            </defs>
                            <path class="nav_path" fill="#F3F6F9" d="M19,0H9C4.029,0,0,4.029,0,9v15c0,4.971,4.029,9,9,9h10c4.97,0,9-4.029,9-9V9C28,4.029,23.97,0,19,0z
                        M26,23.091C26,27.459,22.545,31,18.285,31H9.714C5.454,31,2,27.459,2,23.091V9.909C2,5.541,5.454,2,9.714,2h8.571
                        C22.545,2,26,5.541,26,9.909V23.091z" />
                            <polygon class="nav_arrow" fill="#F3F6F9" points="15.044,22.222 16.377,20.888 12.374,16.885 16.377,12.882 15.044,11.55 9.708,16.885 11.04,18.219
                        11.042,18.219 " />
                        </svg>
                    </div>

                    <!-- CTA Slider Nav - Next -->
                    <div class="cta_slider_nav cta_slider_next">
                        <svg version="1.1" id="Layer_5" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="28px" height="33px" viewBox="0 0 28 33" enable-background="new 0 0 28 33" xml:space="preserve">
                            <defs>
                                <linearGradient id='cta_grad_next'>
                                    <stop offset='0%' stop-color='#fa9e1b' />
                                    <stop offset='100%' stop-color='#8d4fff' />
                                </linearGradient>
                            </defs>
                            <path class="nav_path" fill="#F3F6F9" d="M19,0H9C4.029,0,0,4.029,0,9v15c0,4.971,4.029,9,9,9h10c4.97,0,9-4.029,9-9V9C28,4.029,23.97,0,19,0z
                    M26,23.091C26,27.459,22.545,31,18.285,31H9.714C5.454,31,2,27.459,2,23.091V9.909C2,5.541,5.454,2,9.714,2h8.571
                    C22.545,2,26,5.541,26,9.909V23.091z" />
                            <polygon class="nav_arrow" fill="#F3F6F9" points="13.044,11.551 11.71,12.885 15.714,16.888 11.71,20.891 13.044,22.224 18.379,16.888 17.048,15.554
                    17.046,15.554 " />
                        </svg>
                    </div>

                </div>

            </div>
        </div>
    </div>

</div>

<!-- Offers -->

<div class="offers">
    <div class="container" style="max-width: 1250px !important;">
        <div class="row">
            <div class="col text-center">
                <h2 class="section_title">Popular Offers</h2>
            </div>
        </div>
        <div class="row offers_items">

            <!-- Offers Item -->
            <div class="col-lg-6 offers_col">
                <div class="offers_item">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="offers_image_container">

                                <div class="offers_image_background" style="background-image:url(images/cox-1.jpg)">
                                </div>
                                <div class="offer_name">Saint Martin</div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="offers_content">
                                <div class="offers_price">Bandarban</div>

                                <p class="offers_text">Suspendisse potenti. In faucibus massa. Lorem ipsum
                                    dolor sit amet, consectetur adipiscing elit. Nullam eu convallis tortor.</p>

                                <div class="offers_link"><a href="packages.html"><button style="border-radius: 3px;
                                    border: none;
                                    background-color: #3b0b64;
                                    color: #fff;
                                    padding: 4px 7px;
                                    font-weight: 600;">Read
                                            More</button></a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Offers Item -->
            <div class="col-lg-6 offers_col">
                <div class="offers_item">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="offers_image_container">

                                <div class="offers_image_background" style="background-image:url(images/cox-1.jpg)">
                                </div>
                                <div class="offer_name">Saint Martin</div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="offers_content">
                                <div class="offers_price">Bandarban</div>

                                <p class="offers_text">Suspendisse potenti. In faucibus massa. Lorem ipsum
                                    dolor sit amet, consectetur adipiscing elit. Nullam eu convallis tortor.</p>

                                <div class="offers_link"><a href="packages.html"><button style="border-radius: 3px;
                                    border: none;
                                    background-color: #3b0b64;
                                    color: #fff;
                                    padding: 4px 7px;
                                    font-weight: 600;">Read
                                            More</button></a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Offers Item -->
            <div class="col-lg-6 offers_col">
                <div class="offers_item">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="offers_image_container">

                                <div class="offers_image_background" style="background-image:url(images/cox-1.jpg)">
                                </div>
                                <div class="offer_name">Saint Martin</div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="offers_content">
                                <div class="offers_price">Bandarban</div>

                                <p class="offers_text">Suspendisse potenti. In faucibus massa. Lorem ipsum
                                    dolor sit amet, consectetur adipiscing elit. Nullam eu convallis tortor.</p>

                                <div class="offers_link"><a href="packages.html"><button style="border-radius: 3px;
                                    border: none;
                                    background-color: #3b0b64;
                                    color: #fff;
                                    padding: 4px 7px;
                                    font-weight: 600;">Read
                                            More</button></a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Offers Item -->
            <div class="col-lg-6 offers_col">
                <div class="offers_item">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="offers_image_container">

                                <div class="offers_image_background" style="background-image:url(images/cox-1.jpg)">
                                </div>
                                <div class="offer_name">Saint Martin</div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="offers_content">
                                <div class="offers_price">Bandarban</div>

                                <p class="offers_text">Suspendisse potenti. In faucibus massa. Lorem ipsum
                                    dolor sit amet, consectetur adipiscing elit. Nullam eu convallis tortor.</p>

                                <div class="offers_link"><a href="packages.html"><button style="border-radius: 3px;
                                    border: none;
                                    background-color: #3b0b64;
                                    color: #fff;
                                    padding: 4px 7px;
                                    font-weight: 600;">Read
                                            More</button></a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection