<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            background: #222;
            overflow: hidden;
        }
        i {
            position: absolute;
            width: 4px;
            height: 4px;
            background: #0f0;
            pointer-events: none;
            animation:animate 2s linear forwards;
        }
        @keyframes animate {
            0% {
                opacity:1;
                transform: translate(0,0);
            }
            100% {
                opacity: 0;
                transform: translate(var(--x),var(--y));
            }
        }
    </style>
</head>
<body>
    <script>
        function spark(event) {
            let i = document.createElement("i");
            i.style.left = (event.pageX) + "px";
            i.style.top = (event.pageY) + "px";

            i.style.scale = `${Math.random() * 2 + 1}`;

            i.style.setProperty("--x", getRandomTRansitionValue());
            i.style.setProperty("--y", getRandomTRansitionValue());

            document.body.appendChild(i);
            setTimeout(() => {
                document.body.removeChild(i);
            }, 2000);
        }

        function getRandomTRansitionValue() {
            return `${Math.random() * 400 - 200}px`;
        }
        document.addEventListener("mousemove", spark);
    </script>
</body>
</html>