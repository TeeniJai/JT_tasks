<?php include "header.php" ?>

<h1>Some content</h1>
<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptas vel minima molestias alias voluptatem quae
    distinctio repellendus vitae. Exercitationem blanditiis dicta architecto, quasi vel autem vero a maxime excepturi
    modi.</p>
<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quis, eos quidem suscipit beatae cumque eligendi iste esse
    laboriosam libero vero itaque eveniet consequatur quod aliquid obcaecati ipsam hic magnam. Magni.</p>
<script>
document.write("'allo this is scripted java");
</script>
<noscript>
turn on script to see this >:(
</noscript>
<input type="button" onclick="hello()" value="Click me >:3">

<!-- js in class -->
<h2>simple button displaying date</h2> 
<button onclick="this.innerHTML = Date()">Click to show date</button>
<h2>Make a button and a placeholder as paragraph for the date</h2>
<button onclick="getElementById('p1').innerHTML = Date()">Click to show date</button>
<p id="p1"></p>


<h2>background color</h2>
<form>
<input type="color" id="background" onchange="changeColor()">
</form>

<h2>On mouse over & on mouse out</h2>
<span onmouseover="this.style.color='blue';
                this.style.backgroundColor='yellow';
                this.style.fontSize='2em';" 
                
            
onmouseout ="this.style.color='red';
                this.style.backgroundColor='purple';
                this.style.fontSize='2em';">weeeeee</span>


<?php include "footer.php" ?>