@import
url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');

*, ::before, ::after{
--tw-border-spacing-x: 0;
--tw-border-spacing-y: 0;
--tw-translate-x: 0;
--tw-translate-y: 0;
--tw-rotate: 0;
--tw-skew-x: 0;
--tw-skew-y: 0;
--tw-scale-x: 1;
--tw-scale-y: 1;
--tw-pan-x: ;
--tw-pan-y: ;
--tw-pinch-zoom: ;
--tw-scroll-snap-strictness: proximity;
--tw-gradient-from-position: ;
--tw-gradient-via-position: ;
--tw-gradient-to-position: ;
--tw-ordinal: ;
--tw-slashed-zero: ;
--tw-numeric-figure: ;
--tw-numeric-spacing: ;
--tw-numeric-fraction: ;
--tw-ring-inset: ;
--tw-ring-offset-width: 0px;
--tw-ring-offset-color: #fff;
--tw-ring-color: rgb(59 130 246 / 0.5);
--tw-ring-offset-shadow: 0 0 #0000;
--tw-ring-shadow: 0 0 #0000;
--tw-shadow: 0 0 #0000;
--tw-shadow-colored: 0 0 #0000;
--tw-blur: ;
--tw-brightness: ;
--tw-contrast: ;
--tw-grayscale: ;
--tw-hue-rotate: ;
--tw-invert: ;
--tw-saturate: ;
--tw-sepia: ;
--tw-drop-shadow: ;
--tw-backdrop-blur: ;
--tw-backdrop-brightness: ;
--tw-backdrop-contrast: ;
--tw-backdrop-grayscale: ;
--tw-backdrop-hue-rotate: ;
--tw-backdrop-invert: ;
--tw-backdrop-opacity: ;
--tw-backdrop-saturate: ;
--tw-backdrop-sepia: ;
--tw-contain-size: ;
--tw-contain-layout: ;
--tw-contain-paint: ;
--tw-contain-style: ;
}

::backdrop{
--tw-border-spacing-x: 0;
--tw-border-spacing-y: 0;
--tw-translate-x: 0;
--tw-translate-y: 0;
--tw-rotate: 0;
--tw-skew-x: 0;
--tw-skew-y: 0;
--tw-scale-x: 1;
--tw-scale-y: 1;
--tw-pan-x: ;
--tw-pan-y: ;
--tw-pinch-zoom: ;
--tw-scroll-snap-strictness: proximity;
--tw-gradient-from-position: ;
--tw-gradient-via-position: ;
--tw-gradient-to-position: ;
--tw-ordinal: ;
--tw-slashed-zero: ;
--tw-numeric-figure: ;
--tw-numeric-spacing: ;
--tw-numeric-fraction: ;
--tw-ring-inset: ;
--tw-ring-offset-width: 0px;
--tw-ring-offset-color: #fff;
--tw-ring-color: rgb(59 130 246 / 0.5);
--tw-ring-offset-shadow: 0 0 #0000;
--tw-ring-shadow: 0 0 #0000;
--tw-shadow: 0 0 #0000;
--tw-shadow-colored: 0 0 #0000;
--tw-blur: ;
--tw-brightness: ;
--tw-contrast: ;
--tw-grayscale: ;
--tw-hue-rotate: ;
--tw-invert: ;
--tw-saturate: ;
--tw-sepia: ;
--tw-drop-shadow: ;
--tw-backdrop-blur: ;
--tw-backdrop-brightness: ;
--tw-backdrop-contrast: ;
--tw-backdrop-grayscale: ;
--tw-backdrop-hue-rotate: ;
--tw-backdrop-invert: ;
--tw-backdrop-opacity: ;
--tw-backdrop-saturate: ;
--tw-backdrop-sepia: ;
--tw-contain-size: ;
--tw-contain-layout: ;
--tw-contain-paint: ;
--tw-contain-style: ;
}

/*
! tailwindcss v3.4.15 | MIT License | https://tailwindcss.com
*/

/*
1. Prevent padding and border from affecting element width. (https://github.com/mozdevs/cssremedy/issues/4)
2. Allow adding a border to an element by just adding a border-width.
(https://github.com/tailwindcss/tailwindcss/pull/116)
*/

*,
::before,
::after {
box-sizing: border-box;
/* 1 */
border-width: 0;
/* 2 */
border-style: solid;
/* 2 */
border-color: #e5e7eb;
/* 2 */
}

::before,
::after {
--tw-content: '';
}

/*
1. Use a consistent sensible line-height in all browsers.
2. Prevent adjustments of font size after orientation changes in iOS.
3. Use a more readable tab size.
4. Use the user's configured `sans` font-family by default.
5. Use the user's configured `sans` font-feature-settings by default.
6. Use the user's configured `sans` font-variation-settings by default.
7. Disable tap highlights on iOS
*/

html,
:host {
line-height: 1.5;
/* 1 */
-webkit-text-size-adjust: 100%;
/* 2 */
-moz-tab-size: 4;
/* 3 */
-o-tab-size: 4;
tab-size: 4;
/* 3 */
font-family: ui-sans-serif, system-ui;
/* 4 */
font-feature-settings: normal;
/* 5 */
font-variation-settings: normal;
/* 6 */
-webkit-tap-highlight-color: transparent;
/* 7 */
}

/*
1. Remove the margin in all browsers.
2. Inherit line-height from `html` so users can set them as a class directly on the `html` element.
*/

body {
margin: 0;
/* 1 */
line-height: inherit;
/* 2 */
}

/*
1. Add the correct height in Firefox.
2. Correct the inheritance of border color in Firefox. (https://bugzilla.mozilla.org/show_bug.cgi?id=190655)
3. Ensure horizontal rules are visible by default.
*/

hr {
height: 0;
/* 1 */
color: inherit;
/* 2 */
border-top-width: 1px;
/* 3 */
}

/*
Add the correct text decoration in Chrome, Edge, and Safari.
*/

abbr:where([title]) {
-webkit-text-decoration: underline dotted;
text-decoration: underline dotted;
}

/*
Remove the default font size and weight for headings.
*/

h1,
h2,
h3,
h4,
h5,
h6 {
font-size: inherit;
font-weight: inherit;
}

/*
Reset links to optimize for opt-in styling instead of opt-out.
*/

a {
color: inherit;
text-decoration: inherit;
}

/*
Add the correct font weight in Edge and Safari.
*/

b,
strong {
font-weight: bolder;
}

/*
1. Use the user's configured `mono` font-family by default.
2. Use the user's configured `mono` font-feature-settings by default.
3. Use the user's configured `mono` font-variation-settings by default.
4. Correct the odd `em` font sizing in all browsers.
*/

code,
kbd,
samp,
pre {
font-family: ui-monospace, SFMono-Regular;
/* 1 */
font-feature-settings: normal;
/* 2 */
font-variation-settings: normal;
/* 3 */
font-size: 1em;
/* 4 */
}

/*
Add the correct font size in all browsers.
*/

small {
font-size: 80%;
}

/*
Prevent `sub` and `sup` elements from affecting the line height in all browsers.
*/

sub,
sup {
font-size: 75%;
line-height: 0;
position: relative;
vertical-align: baseline;
}

sub {
bottom: -0.25em;
}

sup {
top: -0.5em;
}

/*
1. Remove text indentation from table contents in Chrome and Safari.
(https://bugs.chromium.org/p/chromium/issues/detail?id=999088, https://bugs.webkit.org/show_bug.cgi?id=201297)
2. Correct table border color inheritance in all Chrome and Safari.
(https://bugs.chromium.org/p/chromium/issues/detail?id=935729, https://bugs.webkit.org/show_bug.cgi?id=195016)
3. Remove gaps between table borders by default.
*/

table {
text-indent: 0;
/* 1 */
border-color: inherit;
/* 2 */
border-collapse: collapse;
/* 3 */
}

/*
1. Change the font styles in all browsers.
2. Remove the margin in Firefox and Safari.
3. Remove default padding in all browsers.
*/

button,
input,
optgroup,
select,
textarea {
font-family: inherit;
/* 1 */
font-feature-settings: inherit;
/* 1 */
font-variation-settings: inherit;
/* 1 */
font-size: 100%;
/* 1 */
font-weight: inherit;
/* 1 */
line-height: inherit;
/* 1 */
letter-spacing: inherit;
/* 1 */
color: inherit;
/* 1 */
margin: 0;
/* 2 */
padding: 0;
/* 3 */
}

/*
Remove the inheritance of text transform in Edge and Firefox.
*/

button,
select {
text-transform: none;
}

/*
1. Correct the inability to style clickable types in iOS and Safari.
2. Remove default button styles.
*/

button,
input:where([type='button']),
input:where([type='reset']),
input:where([type='submit']) {
-webkit-appearance: button;
/* 1 */
background-color: transparent;
/* 2 */
background-image: none;
/* 2 */
}

/*
Use the modern Firefox focus style for all focusable elements.
*/

:-moz-focusring {
outline: auto;
}

/*
Remove the additional `:invalid` styles in Firefox.
(https://github.com/mozilla/gecko-dev/blob/2f9eacd9d3d995c937b4251a5557d95d494c9be1/layout/style/res/forms.css#L728-L737)
*/

:-moz-ui-invalid {
box-shadow: none;
}

/*
Add the correct vertical alignment in Chrome and Firefox.
*/

progress {
vertical-align: baseline;
}

/*
Correct the cursor style of increment and decrement buttons in Safari.
*/

::-webkit-inner-spin-button,
::-webkit-outer-spin-button {
height: auto;
}

/*
1. Correct the odd appearance in Chrome and Safari.
2. Correct the outline style in Safari.
*/

[type='search'] {
-webkit-appearance: textfield;
/* 1 */
outline-offset: -2px;
/* 2 */
}

/*
Remove the inner padding in Chrome and Safari on macOS.
*/

::-webkit-search-decoration {
-webkit-appearance: none;
}

/*
1. Correct the inability to style clickable types in iOS and Safari.
2. Change font properties to `inherit` in Safari.
*/

::-webkit-file-upload-button {
-webkit-appearance: button;
/* 1 */
font: inherit;
/* 2 */
}

/*
Add the correct display in Chrome and Safari.
*/

summary {
display: list-item;
}

/*
Removes the default spacing and border for appropriate elements.
*/

blockquote,
dl,
dd,
h1,
h2,
h3,
h4,
h5,
h6,
hr,
figure,
p,
pre {
margin: 0;
}

fieldset {
margin: 0;
padding: 0;
}

legend {
padding: 0;
}

ol,
ul,
menu {
list-style: none;
margin: 0;
padding: 0;
}

/*
Reset default styling for dialogs.
*/

dialog {
padding: 0;
}

/*
Prevent resizing textareas horizontally by default.
*/

textarea {
resize: vertical;
}

/*
1. Reset the default placeholder opacity in Firefox. (https://github.com/tailwindlabs/tailwindcss/issues/3300)
2. Set the default placeholder color to the user's configured gray 400 color.
*/

input::-moz-placeholder, textarea::-moz-placeholder {
opacity: 1;
/* 1 */
color: #9ca3af;
/* 2 */
}

input::placeholder,
textarea::placeholder {
opacity: 1;
/* 1 */
color: #9ca3af;
/* 2 */
}

/*
Set the default cursor for buttons.
*/

button,
[role="button"] {
cursor: pointer;
}

/*
Make sure disabled buttons don't get the pointer cursor.
*/

:disabled {
cursor: default;
}

/*
1. Make replaced elements `display: block` by default. (https://github.com/mozdevs/cssremedy/issues/14)
2. Add `vertical-align: middle` to align replaced elements more sensibly by default.
(https://github.com/jensimmons/cssremedy/issues/14#issuecomment-634934210)
This can trigger a poorly considered lint error in some tools but is included by design.
*/

img,
svg,
video,
canvas,
audio,
iframe,
embed,
object {
display: block;
/* 1 */
vertical-align: middle;
/* 2 */
}

/*
Constrain images and videos to the parent width and preserve their intrinsic aspect ratio.
(https://github.com/mozdevs/cssremedy/issues/14)
*/

img,
video {
max-width: 100%;
height: auto;
}

/* Make elements with the HTML hidden attribute stay hidden by default */

[hidden]:where(:not([hidden="until-found"])) {
display: none;
}

.fixed{
position: fixed;
}

.mx-10{
margin-left: 2.5rem;
margin-right: 2.5rem;
}

.mx-auto{
margin-left: auto;
margin-right: auto;
}

.mb-4{
margin-bottom: 1rem;
}

.ml-10{
margin-left: 2.5rem;
}

.ml-20{
margin-left: 5rem;
}

.ml-\[20\%\]{
margin-left: 20%;
}

.mt-10{
margin-top: 2.5rem;
}

.mt-28{
margin-top: 7rem;
}

.mt-4{
margin-top: 1rem;
}

.flex{
display: flex;
}

.grid{
display: grid;
}

.h-16{
height: 4rem;
}

.h-64{
height: 16rem;
}

.h-\[50\%\]{
height: 50%;
}

.h-auto{
height: auto;
}

.h-screen{
height: 100vh;
}

.w-28{
width: 7rem;
}

.w-32{
width: 8rem;
}

.w-\[300px\]{
width: 300px;
}

.w-\[350px\]{
width: 350px;
}

.w-\[400px\]{
width: 400px;
}

.w-full{
width: 100%;
}

.max-w-\[135\%\]{
max-width: 135%;
}

.flex-1{
flex: 1 1 0%;
}

.cursor-pointer{
cursor: pointer;
}

.appearance-none{
-webkit-appearance: none;
-moz-appearance: none;
appearance: none;
}

.grid-cols-1{
grid-template-columns: repeat(1, minmax(0, 1fr));
}

.flex-col{
flex-direction: column;
}

.items-center{
align-items: center;
}

.justify-center{
justify-content: center;
}

.justify-between{
justify-content: space-between;
}

.gap-6{
gap: 1.5rem;
}

.space-x-3 > :not([hidden]) ~ :not([hidden]){
--tw-space-x-reverse: 0;
margin-right: calc(0.75rem * var(--tw-space-x-reverse));
margin-left: calc(0.75rem * calc(1 - var(--tw-space-x-reverse)));
}

.space-y-4 > :not([hidden]) ~ :not([hidden]){
--tw-space-y-reverse: 0;
margin-top: calc(1rem * calc(1 - var(--tw-space-y-reverse)));
margin-bottom: calc(1rem * var(--tw-space-y-reverse));
}

.overflow-hidden{
overflow: hidden;
}

.rounded-2xl{
border-radius: 1rem;
}

.rounded-3xl{
border-radius: 1.5rem;
}

.rounded-lg{
border-radius: 0.5rem;
}

.bg-customBg{
--tw-bg-opacity: 1;
background-color: rgb(1 0 57 / var(--tw-bg-opacity, 1));
}

.bg-white{
--tw-bg-opacity: 1;
background-color: rgb(255 255 255 / var(--tw-bg-opacity, 1));
}

.bg-cover{
background-size: cover;
}

.bg-center{
background-position: center;
}

.p-8{
padding: 2rem;
}

.px-16{
padding-left: 4rem;
padding-right: 4rem;
}

.px-4{
padding-left: 1rem;
padding-right: 1rem;
}

.px-8{
padding-left: 2rem;
padding-right: 2rem;
}

.py-2{
padding-top: 0.5rem;
padding-bottom: 0.5rem;
}

.text-left{
text-align: left;
}

.text-center{
text-align: center;
}

.font-poppins{
font-family: Poppins, sans-serif;
}

.text-2xl{
font-size: 1.5rem;
line-height: 2rem;
}

.text-4xl{
font-size: 2.25rem;
line-height: 2.5rem;
}

.text-5xl{
font-size: 3rem;
line-height: 1;
}

.text-base{
font-size: 1rem;
line-height: 1.5rem;
}

.text-lg{
font-size: 1.125rem;
line-height: 1.75rem;
}

.text-xl{
font-size: 1.25rem;
line-height: 1.75rem;
}

.text-xs{
font-size: 0.75rem;
line-height: 1rem;
}

.font-bold{
font-weight: 700;
}

.font-light{
font-weight: 300;
}

.font-medium{
font-weight: 500;
}

.font-semibold{
font-weight: 600;
}

.leading-6{
line-height: 1.5rem;
}

.leading-tight{
line-height: 1.25;
}

.tracking-wide{
letter-spacing: 0.025em;
}

.text-customBg{
--tw-text-opacity: 1;
color: rgb(1 0 57 / var(--tw-text-opacity, 1));
}

.text-gray-400{
--tw-text-opacity: 1;
color: rgb(156 163 175 / var(--tw-text-opacity, 1));
}

.text-gray-800{
--tw-text-opacity: 1;
color: rgb(31 41 55 / var(--tw-text-opacity, 1));
}

.text-white{
--tw-text-opacity: 1;
color: rgb(255 255 255 / var(--tw-text-opacity, 1));
}

.shadow-md{
--tw-shadow: 0 4px 6px -1px rgb(0 0 0 / 0.1), 0 2px 4px -2px rgb(0 0 0 / 0.1);
--tw-shadow-colored: 0 4px 6px -1px var(--tw-shadow-color), 0 2px 4px -2px var(--tw-shadow-color);
box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow);
}

.transition-all{
transition-property: all;
transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
transition-duration: 150ms;
}

.transition-colors{
transition-property: color, background-color, border-color, text-decoration-color, fill, stroke;
transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
transition-duration: 150ms;
}

.duration-500{
transition-duration: 500ms;
}

.ease-in-out{
transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
}

.hover\:bg-customHover:hover{
--tw-bg-opacity: 1;
background-color: rgb(3 2 84 / var(--tw-bg-opacity, 1));
}

.hover\:bg-gray-400:hover{
--tw-bg-opacity: 1;
background-color: rgb(156 163 175 / var(--tw-bg-opacity, 1));
}

.hover\:text-customHover:hover{
--tw-text-opacity: 1;
color: rgb(3 2 84 / var(--tw-text-opacity, 1));
}

.hover\:text-white:hover{
--tw-text-opacity: 1;
color: rgb(255 255 255 / var(--tw-text-opacity, 1));
}

@media (min-width: 640px){
.sm\:grid-cols-2{
grid-template-columns: repeat(2, minmax(0, 1fr));
}
}


</>