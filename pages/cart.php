<div id="app">

<h1>Кошик</h1>

<div v-if="cart.length === 0">
Кошик порожній
</div>

<div v-for="item in cart" class="cart-item">
<span>{{ item.name }} - {{ item.price }}€</span>

<div>
<button @click="decrease(item)">-</button>
{{ item.quantity }}
<button @click="increase(item)">+</button>
<button @click="remove(item)">❌</button>
</div>
</div>

<h2 class="total" v-if="cart.length > 0">
TOTAL: {{ total }} €
</h2>

</div>