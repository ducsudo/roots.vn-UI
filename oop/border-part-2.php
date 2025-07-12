<style>
    /* .box {
        width: 200px;
        height: 100px;
        border: 5px solid black; 
        border-left-color: red; 
    }
    .box {
        width: 200px;
        height: 100px;
        border: 5px solid;
        border-image: linear-gradient(to right, red, black) 1;
    } */
* {
    padding: 0;
    margin: 0;
}
.circle-box {
    width: 100px;
    height: 100px;
    border: 5px solid black;
    border-radius: 50%; /* Makes it a circle */
    position: relative;
}

.box {
    position: absolute;
    width: 100px; /* Same size as .circle-box */
    height: 100px;
    border: 5px solid red; /* Mimic border */
    border-radius: 50%;
    top: 0;
    left: 0;
    background-color: transparent;
    clip-path: inset(0 100px 0 0); /* Show only part of the border */
}



</style>

<!-- <div class="circle-box"> -->
    <div class="box"></div>
<!-- </div> -->