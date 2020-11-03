<style>
    * {
        box-sizing: border-box;
    }

    body {
        margin: 0;
        font-family: Arial;
        font-size: 17px;
    }

    #video {
        position: fixed;
        right: 0;
        bottom: 0;
        min-width: 100%;
        min-height: 100%;
    }

    .image {
        background-image: url("img/city_entrance.jpg");
        position: fixed;
        right: 0;
        bottom: 0;
        min-width: 100%;
        min-height: 100%;
        background-color: #cccccc;
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
    }


    .content {
        position: fixed;
        bottom: 0;
        background: rgba(0, 0, 0, 0.5);
        color: #f1f1f1;
        width: 100%;
        padding: 20px;
    }

    .myBtn {
        width: 200px;
        font-size: 18px;
        padding: 10px;
        border: none;
        background: #000;
        color: #fff;
        cursor: pointer;
    }

    .myBtn:hover {
        background: #ddd;
        color: black;
    }

    .buttoncircle {
        background-color: #fc6e91;
        border: 5px solid rgba(255,255,255,.75);
        color: white;
        position: absolute;
        transition: .5s ease;
        top:30%;
        left:20%;
        padding: 20px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
        margin: 4px 2px;
        border-radius: 50%;
    }

    .buttoncircle:hover {
        border: 1px solid rgba(255,255,255,.75);
    }

    .backbtn {
        background-color: #fff6f8;
        border: 5px solid rgba(255,255,255,.75);
        color: #000000;
        position: absolute;
        transition: .5s ease;
        top:85%;
        left:50%;
        padding: 20px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
        margin: 4px 2px;
        border-radius: 50%;
    }

    .backbtn:hover {
        border: 1px solid rgba(255,255,255,.75);
    }
</style>
