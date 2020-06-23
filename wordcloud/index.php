<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <title>Word Cloud Generator</title>
    <style>
        body {
            position: relative;
            font-family: "Helvetica Neue", sans-serif;
            width: 960px;
            margin: auto;
            margin-bottom: 1em;
            margin-top: 20px;
        }

        #presets a {
            border-left: solid #666 1px;
            padding: 0 10px;
        }

        #presets a.first {
            border-left: none;
        }

        #keyword {
            width: 300px;
        }

        #fetcher {
            width: 500px;
        }

        #keyword, #go {
            font-size: 1.5em;
        }

        #text {
            width: 100%;
            height: 100px;
        }

        p.copy {
            font-size: small;
        }

        #form {
            font-size: small;
            position: relative;
        }

        hr {
            border: none;
            border-bottom: solid #ccc 1px;
        }

        a.active {
            text-decoration: none;
            color: #000;
            font-weight: bold;
            cursor: text;
        }

        #angles line, #angles path, #angles circle {
            stroke: #666;
        }

        #angles text {
            fill: #333;
        }

        #angles path.drag {
            fill: #666;
            cursor: move;
        }

        #angles {
            text-align: center;
            margin: 0 auto;
            width: 350px;
        }

        #angles input, #max {
            width: 42px;
        }
    </style>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<div onchange="myFunction()" id="vis"></div>


<form id="form">

    <p style="position: absolute; right: 0; top: 0" id="status"></p>

    <div style="text-align: center">
        <div id="presets"></div>
        <div id="custom-area">
            <p><label for="text">Paste your text below!</label>
            <p><textarea id="text">
How the Cloud Generator Works

The layout algorithm for positioning words without overlap is available on GitHub under an open source license as d3-cloud. Note that this is the only the layout algorithm and any code for converting text into words and rendering the final output requires additional development.

As placement can be quite slow for more than a few hundred words, the layout algorithm can be run asynchronously, with a configurable time step size. This makes it possible to animate words as they are placed without stuttering. It is recommended to always use a time step even without animations as it prevents the browser’s event loop from blocking while placing the words.

The layout algorithm itself is incredibly simple. For each, starting with the most “important”:

Attempt to place the at some starting point: usually near the middle, or somewhere on a central horizontal line.
If the intersects with any previously placed words, move it one step along an increasing spiral. Repeat until no intersections are found.
The hard part is making it perform efficiently! According to Jonathan Feinberg, Wordle uses a combination of hierarchical bounding boxes and quadtrees to achieve reasonable speeds.

Glyphs in JavaScript
                    </textarea>
                <button onclick="myFunction()" id="go" type="submit">Go!</button>
        </div>
    </div>

    <hr>

    <div style="float: right; text-align: right">
        <p><label for="max">Number of words:</label> <input type="number" value="250" min="1" id="max">
        <p><label for="per-line"><input type="checkbox" id="per-line"> One word per line</label>
            <!--<p><label for="colours">Colours:</label> <a href="#" id="random-palette">get random palette</a>-->
        <p><label>Download:</label>
            <button id="download-svg">SVG</button><!-- |
    <a id="download-png" href="#">PNG</a>-->
    </div>

    <div style="float: left">
        <p><label>Spiral:</label>
            <label for="archimedean"><input type="radio" name="spiral" id="archimedean" value="archimedean"
                                            checked="checked"> Archimedean</label>
            <label for="rectangular"><input type="radio" name="spiral" id="rectangular" value="rectangular"> Rectangular</label>
        <p><label for="scale">Scale:</label>
            <label for="scale-log"><input type="radio" name="scale" id="scale-log" value="log" checked="checked"> log n</label>
            <label for="scale-sqrt"><input type="radio" name="scale" id="scale-sqrt" value="sqrt"> √n</label>
            <label for="scale-linear"><input type="radio" name="scale" id="scale-linear" value="linear"> n</label>
        <p><label for="font">Font:</label> <input type="text" id="font" value="Impact">
    </div>

    <div id="angles">
        <p><input type="number" id="angle-count" value="5" min="1"> <label for="angle-count">orientations</label>
            <label for="angle-from">from</label> <input type="number" id="angle-from" value="-60" min="-90" max="90"> °
            <label for="angle-to">to</label> <input type="number" id="angle-to" value="60" min="-90" max="90"> °
    </div>

    <hr style="clear: both">

<!--    <p style="float: right"><a href="about/">How the Word Cloud Generator Works</a>.-->
<!--    <p style="float: left">Copyright &copy; <a href="http://www.jasondavies.com/">Jason Davies</a> | <a-->
<!--            href="../privacy/">Privacy Policy</a>. The generated word clouds may be used for any purpose.-->

</form>

<ins class="adsbygoogle" style="display:inline-block;width:728px;height:90px;margin-left:116px"
     data-ad-client="ca-pub-2911491153890039" data-ad-slot="2029654015"></ins>

<script src="d3.min.js"></script>
<script src="cloud.min.js"></script>
<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>

<script>

    let text = document.getElementById("text").value;
    document.getElementById("text").value = '';
    function mFunction() {
        window.setTimeout(function () {
            console.log("time out");
            var x = document.getElementsByTagName("text");
            for (let i = 0; i < x.length; i++) {
                x[i].addEventListener('click', function () {
                    // console.log(x[i].innerHTML);
                    $.post("php/storeWordCount.php", {'word': x[i].innerHTML},
                        function (data, status) {
                            if (status === "success") {
                                console.log(data);
                                alert('"' + x[i].innerHTML + '" have been upvoted Successfully!!')
                            }
                        });
                });
            }

        }, 2000);
    }

    mFunction();

    function myFunction() {
        let str = document.getElementById("text").value;
        if(str !== text) {
            mFunction();
        }

        $.post("php/storeWordCount.php", {str: str},
            function (data, status) {
                if (status === "success") {
                    console.log(data);
                }
            });

    }
</script>

<script>
    window.google_analytics_uacct = "UA-54563-3";
    var _gaq = _gaq || [];
    _gaq.push(['_setAccount', 'UA-54563-3']);
    _gaq.push(['_trackPageview']);
    setTimeout(function () {
        var ga = document.createElement('script');
        ga.type = 'text/javascript';
        ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
        (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(ga);
    }, 1);
    (adsbygoogle = window.adsbygoogle || []).push({});
</script>
