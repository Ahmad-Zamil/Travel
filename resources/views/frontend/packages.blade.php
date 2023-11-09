@extends('frontend.layouts.app')
@section('content')

     
<style>
    @charset "utf-8";
    /* CSS Document */

    /******************************

[Table of Contents]

1. Fonts
2. Body and some general stuff
3. Header
3.1 Top Bar
3.2 Logo
3.3 Main Nav
3.4 Menu
4. Home
4.1 Home Slider
4.2 Home Slider Nav
4.3 Home Slider Dots
5. Search
6. Section Title
7. Rating
8. Search
8.1 Search Extras
8.2 Search More Options
9. Offers
9.1 Sorting
9.2 Offers Grid
10. Footer
10.1 Footer - About
10.2 Footer - Blog
10.3 Footer - Tags
10.4 Footer - Contact Info
11. Copyright


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

    ::selection {}

    p::selection {}

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
        height: 43px;
        border-radius: 27px;
        overflow: hidden;
        z-index: 1;
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
        font-size: 13px;
        font-weight: 700;
        color: #fff;
        text-transform: uppercase;
        line-height: 45px;
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

    .parallax-window {
        min-height: 400px;
        background: transparent;
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
        height: 465px;
        background: transparent;
    }

    .home_background {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-repeat: no-repeat;
        background-size: cover;
        background-position: center center;
    }

    .home_content {
        position: absolute;
        bottom: 106px;
        left: 50%;
        -webkit-transform: translateX(-50%);
        -moz-transform: translateX(-50%);
        -ms-transform: translateX(-50%);
        -o-transform: translateX(-50%);
        transform: translateX(-50%);
    }

    .home_title {
        font-size: 72px;
        font-weight: 800;
        color: #FFFFFF;
        text-transform: uppercase;
        white-space: nowrap;
    }

    /*********************************
6. Section Title
*********************************/

    .section_title {
        font-size: 30px;
        font-weight: 700;
        color: #2d2c2c;
        margin-top: -8px;
        text-transform: uppercase;
    }

    /*********************************
7. Rating
*********************************/

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

    /*********************************
8. Search
*********************************/

    .search {

        position: absolute;
        top: 0;
        left: 0;
        width: 370px;
        height: 100%;
        background: #fa9e1b;
        z-index: 10;
    }

    .no-padding {
        padding-left: 0px;
        padding-right: 0px;
    }

    .no-margin {
        margin-left: 0px;
        margin-right: 0px;
    }

    .search_tabs_container {
        position: relative;
        top: -94px;
        width: 100%;
    }

    .search_tabs {
        height: auto;
        flex-wrap: wrap;
    }

    .search_tab {
        font-size: 14px;
        font-weight: 700;
        color: #2d2c2c;
        text-transform: uppercase;
        text-align: center;
        height: 94px;
        width: 50%;
        flex-grow: 1;
        background: #FFFFFF;
        cursor: pointer;
        -webkit-transition: all 200ms ease;
        -moz-transition: all 200ms ease;
        -ms-transition: all 200ms ease;
        -o-transition: all 200ms ease;
        transition: all 200ms ease;
    }

    .search_tab:not(:first-child):not(:nth-child(2)) {
        border: solid 1px #ededed;
        margin-right: -1px;
        margin-bottom: -1px;
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

    .search_tab:nth-child(2) {
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
        padding-left: 54px;
        padding-right: 47px;
        margin-top: -25px;
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
        flex-wrap: wrap;
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

    .search_item {
        margin-bottom: 23px;
    }

    .search_item:first-child {
        width: 100%;
    }

    .search_item:nth-child(2) {
        width: 100%;
    }

    .search_item:nth-child(3) {
        width: 100%;
    }

    .search_item:nth-child(4) {
        width: calc(50% - 15px);
        margin-right: 30px;
    }

    .search_item:nth-child(5) {
        width: calc(50% - 15px);
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
        margin-top: 40px;
    }

    .search_button:hover {
        opacity: 0.8;
    }

    /*********************************
8.1 Search Extras
*********************************/

    .extras {
        width: 100%;
        margin-top: 42px;
    }

    .search_extras_item {
        width: 50%;
        float: left;
        margin-bottom: 10px;
    }

    .search_extras_item:nth-child(even) {
        padding-left: 20px;
    }

    .search_extras_item div {
        display: inline-block;
        cursor: pointer;
    }

    .search_extras_item div:hover .search_features_cb {
        border: 1px solid #fd784f;
    }

    .search_extras_checkbox {
        cursor: pointer;
    }

    .search_extras_cb {
        display: block;
        position: relative;
        width: 12px;
        height: 12px;
        -webkit-appearance: none;
        -moz-appearance: none;
        -ms-appearance: none;
        -o-appearance: none;
        appearance: none;
        background-color: #FFFFFF;
        border: 1px solid #FFFFFF;
        padding: 9px;
        margin-top: 2px;
        border-radius: 0px;
        display: inline-block;
        position: relative;
        cursor: pointer;
        float: left;
    }

    .search_extras_cb:focus {
        outline: none;
        border: 1px solid #fd784f;
    }

    .search_extras_cb:checked::after {
        display: block;
        position: absolute;
        top: 2px;
        left: 2px;
        width: calc(100% - 4px);
        height: calc(100% - 4px);
        content: '';
        background: #fa9e1b;
    }

    .search_extras label {
        display: block;
        position: relative;
        font-size: 12px;
        font-weight: 400;
        padding-left: 31px;
        margin-bottom: 0px;
        cursor: pointer;
        color: #FFFFFF;
    }

    /*********************************
8.2 Search More Options
*********************************/

    .more_options {
        margin-top: 41px;
    }

    .more_options_trigger {
        display: inline-block;
        width: auto;
    }

    .more_options_trigger a {
        font-size: 14px;
        font-weight: 700;
        color: #FFFFFF;
        text-transform: uppercase;
        padding-left: 18px;
    }

    .more_options_trigger a::before {
        display: block;
        position: absolute;
        top: 7px;
        left: 0;
        width: 10px;
        height: 10px;
        content: '+';
        font-family: 'Open Sans', sans-serif;
        font-size: 13px;
        line-height: 8px;
        color: #FFFFFF;
        padding-left: 1px;
    }

    .more_options_trigger.active a::before {
        content: '-';
        padding-left: 2px;
    }

    .more_options_list {
        display: block;
        width: 100%;
        max-height: 0px;
        overflow: hidden;
        opacity: 0;
        -webkit-transition: all 500ms ease;
        -moz-transition: all 500ms ease;
        -ms-transition: all 500ms ease;
        -o-transition: all 500ms ease;
        transition: all 500ms ease;
    }

    .more_options_list label {
        display: block;
        position: relative;
        font-size: 12px;
        font-weight: 400;
        padding-left: 31px;
        margin-bottom: 0px;
        cursor: pointer;
        color: #FFFFFF;
    }

    .more_options_list li {
        margin-bottom: 10px;
    }

    .more_options_list.active {
        margin-top: 20px;
        opacity: 1;
    }

    /*********************************
9. Offers
*********************************/

    .offers {
        width: 100%;
        padding-top: 115px;
        padding-bottom: 50px;
    }

    /*********************************
9.1 Sorting
*********************************/

    .offers_sorting {
        display: inline-block;
    }

    .offers_sorting>li {
        display: inline-block;
        position: relative;
        width: 90%;
        height: 50px;
        font-size: 12px;
        font-weight: 700;
        color: #2d2c2c;
        text-transform: uppercase;
        line-height: 50px;
        cursor: pointer;
        border: solid 2px #31124b;
        border-radius: 5px;
        padding-left: 25px;
        padding-right: 14px;
        margin-right: 16px;
        margin-bottom: 40px;
        text-align: left;
    }

    .distance_item {
        width: 234px !important;
    }

    .offers_sorting li i {
        float: right;
        line-height: 48px;

    }

    .offers_sorting li ul {
        display: block;
        position: absolute;
        right: 0;
        top: 120%;
        margin: 0;
        width: 100%;
        background: #FFFFFF;
        visibility: hidden;
        opacity: 0;
        z-index: 1;
        box-shadow: 0 15px 25px rgba(63, 78, 100, 0.15);
        -webkit-transition: opacity 0.3s ease;
        -moz-transition: opacity 0.3s ease;
        -ms-transition: opacity 0.3s ease;
        -o-transition: opacity 0.3s ease;
        transition: all 0.3s ease;
    }

    .offers_sorting>li:hover ul {
        visibility: visible;
        opacity: 1;
        top: calc(100% + 1px);
    }

    .offers_sorting li ul li {
        display: block;
        text-align: center;
        padding-left: 25px;
        padding-right: 25px;
    }

    .offers_sorting li ul li span {
        display: block;
        height: 40px;
        line-height: 40px;
        border-bottom: solid 1px #dddddd;
        color: #51545f;
        text-align: left;
        -webkit-transition: opacity 0.3s ease;
        -moz-transition: opacity 0.3s ease;
        -ms-transition: opacity 0.3s ease;
        -o-transition: opacity 0.3s ease;
        transition: all 0.3s ease;
    }

    .offers_sorting li ul li span:hover {
        color: #b5aec4;
    }

    .offers_sorting li ul li:last-child span {
        border-bottom: none;
    }

    .offers_sorting li span:nth-child(2) {
        margin-left: 71px;
    }

    /*********************************
9.2 filter
*********************************/

    .filter_option {

        padding-left: 80px;
        padding-top: 5px;
        padding-bottom: 5px;
        background-color: #31124b;
        border-radius: 4px;
        font-size: 14px;
        font-weight: 600px;
        color: #FFFFFF;

    }

    .accordion {
        background-color: #eee;
        color: #444;
        cursor: pointer;
        padding: 18px;
        width: 100%;
        border: none;
        text-align: left;
        outline: none;
        font-size: 15px;
        transition: 0.4s;
    }

    .active,
    .accordion:hover {
        background-color: #ccc;
    }

    .panel {
        padding: 0 18px;
        display: none;
        background-color: white;
        overflow: hidden;
    }

    /*********************************
9.2 Offers Grid
*********************************/

    .offers_grid {
        width: 100%;
        margin-top: 40px;
    }

    .offers_item {
        width: 100%;
        margin-bottom: 46px;
    }

    .offers_item:last-child {
        margin-bottom: 0px;
    }

    .offers_image img {
        width: 100%;
    }

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
        border-radius: 5px;
    }

    .offers_image_background:hover {
        -ms-transform: scale(1.02);
        /* IE 9 */
        -webkit-transform: scale(1.02);
        /* Safari 3-8 */
        transform: scale(1.02);
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

    /* .offer_name a {
       
    } */

    .offers_content {}

    .offers_price {
        display: inline-block;
        font-size: 28px;
        font-weight: 700;
        color: #1d1c1c;
        line-height: 25px;
    }

    .offers_price span {
        font-size: 14px;
        font-weight: 400;
        color: #929191;
        margin-left: 12px;
    }

    .offers_rating {}

    .offers_rating i::before {
        font-size: 13px;
        margin-right: 2px;
    }

    .offers_text {
        font-size: 18px;
        font-weight: 600;
        color: #504c4c;
        margin-top: 16px;
        margin-bottom: 0px;
    }

    .offers_text_description {
        font-size: 14px;
        font-weight: 400;
        color: #000000;
        margin-top: 5px;
        margin-bottom: 0px;
    }

    .offers_icons {
        margin-top: 21px;
    }

    .offers_icons_item {
        display: inline-block;
        margin-right: 15px;
    }

    .offers_icons_item:last-child {
        margin-right: 0px;
    }

    .book_button {
        background: #31124b;
        margin-top: 39px;
        margin-bottom: -5px;
        -webkit-transition: all 200ms ease;
        -moz-transition: all 200ms ease;
        -ms-transition: all 200ms ease;
        -o-transition: all 200ms ease;
        transition: all 200ms ease;
    }

    .book_button:hover {
        opacity: 0.8;
    }

    .offer_reviews {
        position: absolute;
        top: 0;
        right: 0;
    }

    .offer_reviews_content {
        display: inline-block;
        vertical-align: middle;
        margin-right: 7px;
    }

    .offer_reviews_title {
        font-size: 12px;
        font-weight: 700;
        color: #2d2c2c;
        text-transform: uppercase;
    }

    .offer_reviews_subtitle {
        font-size: 12px;
        font-weight: 600;
        color: #929191;
        margin-top: 1px;
    }

    .offer_reviews_rating {
        display: inline-block;
        width: 62px;
        height: 57px;
        font-size: 28px;
        font-weight: 700;
        color: #FFFFFF;
        line-height: 57px;
        background: #fa9e1b;
        vertical-align: middle;
        border-radius: 45%;
        -webkit-transform: translateY(-4px);
        -moz-transform: translateY(-4px);
        -ms-transform: translateY(-4px);
        -o-transform: translateY(-4px);
        transform: translateY(-4px);
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


    /* offer responsive */



    /******************************

[Table of Contents]

1. 1680px
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
0. 1730px
************/

    @media only screen and (max-width: 1730px) {
        .temp_col {
            display: none !important;
        }

        .col-1680-4 {
            flex: 0 0 33.333333%;
            max-width: 33.333333%;
        }

        .offers {
            padding-top: 0px;
        }

        .search {
            position: relative;
            width: 100%;
            height: auto;
            background: linear-gradient(to right, #fa9e1b, #8d4fff);
            z-index: 10;
        }

        .search_inner {
            width: 100%;
            height: 100%;
        }

        .no-padding {
            padding-left: 15px;
            padding-right: 15px;
        }

        .no-margin {
            margin-left: -15px;
            margin-right: -15px;
        }

        .search_tabs_container {
            position: absolute;
            bottom: 100%;
            left: 15px;
            width: calc(100% - 30px);
        }

        .search_tabs {
            flex-wrap: nowrap;

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

        .search_tab:not(:first-child):not(:nth-child(2)) {
            border: none;
            margin-right: 0px;
            margin-bottom: 0px;
        }

        .search_tab:nth-child(2) {
            border-top-right-radius: 0px;
            padding-right: 0px;
        }

        .search_tab:last-child {
            border-top-right-radius: 94px;
            padding-right: 7px;
        }

        .search_panel {
            display: none !important;
            width: 100%;
            height: 100%;
            -webkit-animation: fadeEffect 1s;
            animation: fadeEffect 1s;
            padding-left: 0px;
            padding-right: 0px;
            margin-top: 0px;
            padding-top: 57px;
            padding-bottom: 72px;
        }

        .search_item {
            margin-bottom: 0px;
        }

        .search_item:first-child {
            width: 37%;
        }

        .search_item:nth-child(2) {
            width: 16%;
        }

        .search_item:nth-child(3) {
            width: 16%;
        }

        .search_item:nth-child(4) {
            width: 9.947%;
            margin-right: 0px;
        }

        .search_item:nth-child(5) {
            width: 9.947%;
        }

        .search_extras_item {
            width: 20%;
        }

        .search_extras_item:nth-child(even) {
            padding-left: 0px;
        }

        .more_options {
            width: 100%;
            margin-top: 28px;
        }

        .search_button {
            margin-top: 29px;
        }

        .offers_sorting_container {
            margin-top: 0px;
        }
    }

    /************
1. 1680px
************/

    @media only screen and (max-width: 1680px) {}

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

    @media only screen and (max-width: 1280px) {}

    /************
4. 1199px
************/

    @media only screen and (max-width: 1199px) {
        .main_nav_container {
            margin-right: 121px;
        }

        .offers_sorting>li {
            margin-bottom: 17px;
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

        .hamburger {
            display: block;
        }

        .offers {
            padding-bottom: 105px;
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
            top: auto;
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
            margin-top: 0px;
            padding-bottom: 0px;
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

        .col-1680-4 {
            flex: 0 0 100%;
            max-width: 100%;
        }

        .offers_image_container {
            width: 100%;
            height: 443px;
            margin-bottom: 38px;
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

        .offers_image_background:hover {
            -ms-transform: scale(1.02);
            /* IE 9 */
            -webkit-transform: scale(1.02);
            /* Safari 3-8 */
            transform: scale(1.02);
        }

        .footer_column {
            margin-bottom: 60px;
        }

        .footer_column:last-child {
            margin-bottom: 0px;
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
        .search_extras_item {
            width: 50%;
        }

        .offers_image_container {
            height: 327px;
        }

        .home_title {
            font-size: 48px;
        }
    }

    /************
11. 575px
************/

    @media only screen and (max-width: 575px) {
        p {
            font-size: 13px;
        }

        h1 {
            font-size: 28px;
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

        .section_title {
            font-size: 21px;
        }

        .home {
            width: 100%;
            height: 375px;
            background: transparent;
        }

        .home_title {
            font-size: 24px;
        }

        .offers_image_container {
            height: calc((100vw - 30px) / 0.97);
        }

        .offers_price {
            font-size: 30px;
        }

        .offers_price span {
            font-size: 12px;
            margin-left: 7px;
        }

        .offer_reviews_rating {
            width: 56px;
            height: 47px;
            font-size: 24px;
            line-height: 47px;
        }

        .offer_reviews_title {
            font-size: 11px;
        }

        .offer_reviews_subtitle {
            font-size: 11px;
        }

        .offers_text {
            font-size: 13px;
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

    @media only screen and (max-width: 480px) {
        .accordion {
            margin-bottom: 80px;
        }

        .panel {
            margin-bottom: 80px;
        }
    }

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
    }

    /************
14. 400px
************/

    @media only screen and (max-width: 400px) {}
</style>

<!-- Home -->

     <div class="home">
        <div class="home_background parallax-window" data-parallax="scroll"
            data-image-src="images/about_background.jpg"></div>
        <div class="home_content">
            <div class="home_title">our offers</div>
        </div>
    </div>

    <!-- Offers -->

    <div class="offers">

        <!-- Offers -->

        <div class="container">
            <div class="row">

                <!-- Offers Sorting -->
                <div class="col-12 col-sm-12 col-md-3 col-lg-3 text-center offer-sort-mbl"
                    style="border: 2px solid #eee; border-radius: 5px; margin-top: 40px; margin-right: 80px;">

                    <style>
                        @media screen and (max-width:480px) {
                            .offer-sort-mbl {
                                border: none !important;
                            }
                        }
                    </style>

                    <div class="offers_sorting_container">
                        <p
                            style="font-size: 29px;font-weight: 700;margin-bottom: 15px; margin-top: 15px; color: #2d2c2c;">
                            Preferences</p>
                        <ul class="offers_sorting">
                            <li>
                                <span class="sorting_text">price</span>
                                <i class="fa fa-chevron-down"></i>
                                <ul>
                                    <li class="sort_btn" data-isotope-option='{ "sortBy": "original-order" }'
                                        data-parent=".price_sorting"><span>show all</span></li>
                                    <li class="sort_btn" data-isotope-option='{ "sortBy": "price" }'
                                        data-parent=".price_sorting"><span>ascending</span></li>
                                </ul>
                            </li>
                            <li>
                                <span class="sorting_text">location</span>
                                <i class="fa fa-chevron-down"></i>
                                <ul>
                                    <li class="sort_btn" data-isotope-option='{ "sortBy": "original-order" }'>
                                        <span>default</span>
                                    </li>
                                    <li class="sort_btn" data-isotope-option='{ "sortBy": "name" }'>
                                        <span>alphabetical</span>
                                    </li>
                                </ul>
                            </li>
                            <!-- <li>
                                <span class="sorting_text">Duration</span>
                                <i class="fa fa-chevron-down"></i>
                                <ul>
                                    <li class="filter_btn" data-filter="*"><span>show all</span></li>
                                    <li class="sort_btn" data-isotope-option='{ "sortBy": "stars" }'>
                                        <span>ascending</span>
                                    </li>
                                    <li class="filter_btn" data-filter=".rating_3"><span>3</span></li>
                                    <li class="filter_btn" data-filter=".rating_4"><span>4</span></li>
                                    <li class="filter_btn" data-filter=".rating_5"><span>5</span></li>
                                </ul>
                            </li> -->

                            <li>
                                <span class="sorting_text">Duration</span>
                                <i class="fa fa-chevron-down"></i>
                                <ul>
                                    <li class="num_sorting_btn"><span>3 Nights 2 Days</span></li>
                                    <li class="num_sorting_btn"><span>5 Nights 4 Days</span></li>
                                    <li class="num_sorting_btn"><span>7 Nights 6 Days</span></li>
                                </ul>
                            </li>
                        </ul>
                    </div>

                    <div class="footer_col">
                        <div class="footer_title" style="color: #000000; font-size: 24px; margin-top: 20px;">Other
                            Packages</div>
                        <div class="footer_content footer_blog" style="margin-top: 20px;">

                            <!-- Footer blog item -->
                            <div class="footer_blog_item clearfix" style="border: 1px solid #31124b;padding: 8px;">
                                <div class="footer_blog_image"><img src="images/footer_blog_1.jpg"
                                        alt="https://unsplash.com/@avidenov"></div>
                                <div class="footer_blog_content">
                                    <div class="footer_blog_title" style=" text-align: left;"><a href="blog.html"
                                            style="color: #000000; font-weight: 600;">Grab the new package with us
                                            this year</a>
                                    </div>
                                    <div class=""
                                        style=" text-align: left; color: red; margin-top: 5px; font-size: 12px;">Nov
                                        29, 2017</div>
                                </div>
                            </div>

                            <!-- Footer blog item -->
                            <div class="footer_blog_item clearfix" style="border: 1px solid #31124b;padding: 8px;">
                                <div class="footer_blog_image"><img src="images/footer_blog_1.jpg"
                                        alt="https://unsplash.com/@avidenov"></div>
                                <div class="footer_blog_content">
                                    <div class="footer_blog_title" style=" text-align: left;"><a href="blog.html"
                                            style="color: #000000; font-weight: 600;">Grab the new package with us
                                            this year</a>
                                    </div>
                                    <div class=""
                                        style=" text-align: left; color: red; margin-top: 5px; font-size: 12px;">Nov
                                        29, 2017</div>
                                </div>
                            </div>

                            <!-- Footer blog item -->
                            <div class="footer_blog_item clearfix" style="border: 1px solid #31124b;padding: 8px;">
                                <div class="footer_blog_image"><img src="images/footer_blog_1.jpg"
                                        alt="https://unsplash.com/@avidenov"></div>
                                <div class="footer_blog_content">
                                    <div class="footer_blog_title" style=" text-align: left;"><a href="blog.html"
                                            style="color: #000000; font-weight: 600;">Grab the new package with us
                                            this year</a>
                                    </div>
                                    <div class=""
                                        style=" text-align: left; color: red; margin-top: 5px; font-size: 12px;">Nov
                                        29, 2017</div>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>


                <div class="col-12 col-sm-12 col-md-8 col-lg-8">

                    <div class="offers_grid">
                        <div class="offers_item rating_4"
                            style="box-shadow: 2px 2px 10px 2px #888888; padding: 20px; border-radius: 4px;">

                            <div class="row">
                                <div class="col-lg-1 temp_col"></div>
                                <div class="col-lg-3 col-1680-4">
                                    <div class="offers_image_container">

                                        <div class="offers_image_background"
                                            style="background-image:url(images/offer_1.jpg)"></div>
                                        <div class="offer_name">Bandarban
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-8">
                                    <div class="offers_content">
                                        <div class="offers_price">Bandarban Famiy Tour</div>
                                        <div class="offers_text">
                                            ৳ 5500
                                        </div>
                                        <p class="offers_text_description">Lorem ipsum dolor sit amet
                                            consectetur adipisicing elit. Illo beatae, dolor dicta voluptatem
                                            nisi praesentium quia assumenda odio eveniet. Voluptas.</p>

                                        <div class="button book_button"><a
                                                href="tour_details.html">Details<span></span><span></span><span></span></a>
                                        </div>
                                        <div class="offer_reviews">
                                            <div class="offer_reviews_content">

                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>



                        <div class="offers_item rating_3"
                            style="box-shadow: 2px 2px 10px 2px #888888; padding: 20px; border-radius: 4px;">
                            <div class="row">
                                <div class="col-lg-1 temp_col"></div>
                                <div class="col-lg-3 col-1680-4">
                                    <div class="offers_image_container">

                                        <div class="offers_image_background"
                                            style="background-image:url(images/offer_1.jpg)"></div>
                                        <div class="offer_name">Bandarban
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-8">
                                    <div class="offers_content">
                                        <div class="offers_price">Bandarban Famiy Tour</div>
                                        <div class="offers_text">
                                            ৳ 5500
                                        </div>
                                        <p class="offers_text_description">Lorem ipsum dolor sit amet
                                            consectetur adipisicing elit. Illo beatae, dolor dicta voluptatem
                                            nisi praesentium quia assumenda odio eveniet. Voluptas.</p>


                                        <div class="button book_button"><a
                                                href="#">Details<span></span><span></span><span></span></a>
                                        </div>
                                        <div class="offer_reviews">
                                            <div class="offer_reviews_content">

                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>



                        <div class="offers_item rating_5"
                            style="box-shadow: 2px 2px 10px 2px #888888; padding: 20px; border-radius: 4px;">
                            <div class="row">
                                <div class="col-lg-1 temp_col"></div>
                                <div class="col-lg-3 col-1680-4">
                                    <div class="offers_image_container">

                                        <div class="offers_image_background"
                                            style="background-image:url(images/offer_1.jpg)"></div>
                                        <div class="offer_name">Bandarban
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-8">
                                    <div class="offers_content">
                                        <div class="offers_price">Bandarban Famiy Tour</div>
                                        <div class="offers_text">
                                            ৳ 5500
                                        </div>
                                        <p class="offers_text_description">Lorem ipsum dolor sit amet
                                            consectetur adipisicing elit. Illo beatae, dolor dicta voluptatem
                                            nisi praesentium quia assumenda odio eveniet. Voluptas.</p>


                                        <div class="button book_button"><a
                                                href="#">Details<span></span><span></span><span></span></a>
                                        </div>
                                        <div class="offer_reviews">
                                            <div class="offer_reviews_content">

                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>



                        <div class="offers_item rating_4"
                            style="box-shadow: 2px 2px 10px 2px #888888; padding: 20px; border-radius: 4px;">
                            <div class="row">
                                <div class="col-lg-1 temp_col"></div>
                                <div class="col-lg-3 col-1680-4">
                                    <div class="offers_image_container">

                                        <div class="offers_image_background"
                                            style="background-image:url(images/offer_1.jpg)"></div>
                                        <div class="offer_name">Bandarban
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-8">
                                    <div class="offers_content">
                                        <div class="offers_price">Bandarban Famiy Tour</div>
                                        <div class="offers_text">
                                            ৳ 5500
                                        </div>
                                        <p class="offers_text_description">Lorem ipsum dolor sit amet
                                            consectetur adipisicing elit. Illo beatae, dolor dicta voluptatem
                                            nisi praesentium quia assumenda odio eveniet. Voluptas.</p>


                                        <div class="button book_button"><a
                                                href="#">Details<span></span><span></span><span></span></a>
                                        </div>
                                        <div class="offer_reviews">
                                            <div class="offer_reviews_content">

                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>



                    </div>

                </div>


            </div>
        </div>
    </div>


@endsection