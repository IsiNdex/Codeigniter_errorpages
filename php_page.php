<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
 
    <style>
        body {
            width: 100%;
            height: 100%;
            margin: 0%;
            padding: 0%;
            overflow-x: hidden;
            overflow-y: hidden;
        }
 
        .container {
            width: 100%;
            height: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
            background: #200122;  /* fallback for old browsers */
            background: -webkit-linear-gradient(to right, #6f0000, #200122);  /* Chrome 10-25, Safari 5.1-6 */
            background: linear-gradient(to right, #6f0000, #200122); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */

        }
        .orta {
            float: left;
            width: 700px;
            height: 450px;
            background-color: #200122;
            border-radius: 20px;
            opacity: 0.7;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .p1 {
            float: left;
            width: 100%;
            min-height: 5px;
            position: absolute;
            display: flex;
            align-items: center;
            justify-content: center;
            font-family: 'Courier New', Courier, monospace;
            font-size: 34px;
            color: #df9f9f;

            top: 160px;
        }

        .p2 {
            float: left;
            width: 100%;
            min-height: 5px;
            position: absolute;
            display: flex;
            align-items: center;
            justify-content: center;
            font-family: 'Courier New', Courier, monospace;
            font-size: 25px;
            top: 335px;

            color: #df9f9f;
        }

        .butus {
            float: left;
            width: 100%;
            min-height: 5px;
            position: absolute;
            display: flex;
            align-items: center;
            justify-content: center;
            top: 450px;
            font-family: 'Courier New', Courier, monospace;
            text-decoration: none;
        }

        .uaa {
            color: #df9f9f;
            font-size: 20px;
            font-family: 'Courier New', Courier, monospace;
            font-weight: 900;
            transition: 0.5s;
        }

        .uaa::before {
        content: "";
        height: 233%;
        left: -30px;
        position: absolute;
        top: -15px;
        transition: clip-path .5s cubic-bezier(.165, 0.84, 0.44, 1), -webkit-clip-path .5s cubic-bezier(.165, 0.84, 0.44, 1);
        width: 156%;
        display: flex;
        align-items: center;
        justify-content: center;
        }
        
        .uaa:hover{
            color: #200122;
        }

        .uuu {
            text-decoration: none;
        }

        .button-48 {
            appearance: none;
            background-color: #200122;
            border-width: 0;
            box-sizing: border-box;
            color: #000000;
            cursor: pointer;
            display: inline-block;
            font-family: Clarkson,Helvetica,sans-serif;
            font-size: 14px;
            font-weight: 500;
            letter-spacing: 0;
            line-height: 1em;
            margin: 0;
            opacity: 1;
            outline: 0;
            padding: 1.5em 2.2em;
            position: relative;
            text-align: center;
            text-decoration: none;
            text-rendering: geometricprecision;
            text-transform: uppercase;
            transition: opacity 300ms cubic-bezier(.694, 0, 0.335, 1),background-color 100ms cubic-bezier(.694, 0, 0.335, 1),color 100ms cubic-bezier(.694, 0, 0.335, 1);
            user-select: none;
            -webkit-user-select: none;
            touch-action: manipulation;
            vertical-align: baseline;
            white-space: nowrap;
        }

        .button-48:before {
            animation: opacityFallbackOut .5s step-end forwards;
            backface-visibility: hidden;
            background-color: #df9f9f;
            clip-path: polygon(-1% 0, 0 0, -25% 100%, -1% 100%);
            content: "";
            height: 100%;
            left: 0;
            position: absolute;
            top: 0;
            transform: translateZ(0);
            transition: clip-path .5s cubic-bezier(.165, 0.84, 0.44, 1), -webkit-clip-path .5s cubic-bezier(.165, 0.84, 0.44, 1);
            width: 100%;
        }

        .button-48:hover:before {
            animation: opacityFallbackIn 0s step-start forwards;
            clip-path: polygon(0 0, 101% 0, 101% 101%, 0 101%);
        }

        .button-48:after {
            background-color: #FFFFFF;
        }

        .button-48 span {
            z-index: 1;
            position: relative;
        }

        @media (max-width: 920px) {
            .orta {height: 100%; width: 95%;}
        }
    </style>
</head>
<body>
 
    <div class="container">
        <div class="orta">
            <div class="p1"><h1>PHP ERROR</h1> </div><br>
            <div class="p2"><h4>~ A PHP ERROR WAS ENCOUNTERED ~ </h4></div><br>
            <div class="butus">
                <a href="" class="uuu"><button class="button-48" role="button"><span class="uaa">HOME PAGE</span></button></a>
            </div>
        </div>
    </div>
    
</body>
</html>