<div id="app">

<h1>Наші тури</h1>

<div class="tour">
<div class="tour-left">
<h3>Італія</h3>
<img src="/Web_1/PhotoForWeb_4.jpg">
</div>

<div class="tour-info">
<p><b>Готелі:</b> 3★, 4★, 5★</p>
<p><b>Тип відпочинку:</b> екскурсії, музеї, кухня</p>
<p><b>Тривалість:</b> 7 днів</p>
<p><b>Ціна:</b> від 900€</p>

<button @click="addToCart({
id:1,
name:'Тур в Італію',
price:900
})">
Додати в кошик
</button>
</div>
</div>

<div class="tour">
<div class="tour-left">
<h3>Франція</h3>
<img src="/Web_1/PhotoForWeb_3.jpg">
</div>

<div class="tour-info">
<p><b>Готелі:</b> 3★, 4★</p>
<p><b>Тип відпочинку:</b> Париж, Діснейленд, шопінг</p>
<p><b>Тривалість:</b> 5 днів</p>
<p><b>Ціна:</b> від 850€</p>

<button @click="addToCart({
id:2,
name:'Тур у Францію',
price:850
})">
Додати в кошик
</button>
</div>
</div>

<div class="tour">
<div class="tour-left">
<h3>Туреччина</h3>
<img src="/Web_1/PhotoForWeb_2.jpg">
</div>

<div class="tour-info">
<p><b>Готелі:</b> 4★, 5★ (All Inclusive)</p>
<p><b>Тип відпочинку:</b> море, пляж, SPA</p>
<p><b>Тривалість:</b> 7–10 днів</p>
<p><b>Ціна:</b> від 700€</p>

<button @click="addToCart({
id:3,
name:'Тур у Туреччину',
price:700
})">
Додати в кошик
</button>
</div>
</div>

</div>